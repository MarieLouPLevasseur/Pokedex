<?php

// on inclut l'autochargement des dépendances de Composer:

require_once __DIR__.'/../vendor/autoload.php';


//==============================================
// ROUTER
//==============================================

//  création d'une classe avec Altorouter pour faire les chemin les pages 
$router = new AltoRouter();

// On indique au routeur la partie "fixe" de l'URL, pour qu'il soit capable d'isoler la partie "variable"
$router->setBasePath( $_SERVER['BASE_URI'] );


//---------- ROUTES VERS LE MAINCONTROLLER---------------
//HOME
$router->map( "GET", "/", [ 
    "method"     => "home", //nom de la méthode a appeler
    "controller" => "App\Controllers\MainController"  //controller a appeler via le namespace
    ], "main-home" );    

//DETAIL
$router->map( "GET", "/detail/[i:Pokemon_id]",[
    "method"     => "detail", //nom de la méthode a appeler
    "controller" => "App\Controllers\MainController" //controller a appeler via le namespace
    ]
    ,  "main-detail" );


// faire correspondre une URL et une route: il faut faire un match
$matchingRouteInfos = $router->match();

//==============================================
// DISPATCHER
//==============================================

//création d'une page erreur si celle-ci ne correspond pas à nos chemin définis
if ($matchingRouteInfos === false) {
    $controller = new App\Controllers\MainController;
    $controller->pageNotFound();
}

//La répartition du controller et de sa méthode sera ainsi automatique
$controllerToInstantiate = $matchingRouteInfos['target']['controller'];
$methodToCall            = $matchingRouteInfos['target']['method'];
// d($controllerToInstantiate);
// die;

// On instancie notre controller dynamiquement a partir du nom qui se trouve dans la variable $controllerToInstantiate (soit MainController par défaut ici)
$controller = new $controllerToInstantiate();

// On appelle la méthode dont le nom se trouve dans $methodToCall sur MainController et on lui transmet les Params d'URL lorsqu'il y en a
$controller->$methodToCall( $matchingRouteInfos['params'] );
