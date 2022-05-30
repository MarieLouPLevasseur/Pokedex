<?php
 
  namespace App\Controllers;

class CoreController
{
          //------------------permet de gérer l'affichage des templates communs et des données utiles (pour l'instant) --------------

//==============================================
// Fonction Support: SHOW
//==============================================

    //ViewName correspond au paramètre ayant le meme nom que la méthode (et la page en elle-même) pour appeler le template associé
    //ViewData permettra de faire passer des données sous forme de tableau associatif dans les méthodes privées si nécessaires

    protected function show($viewName, $viewData = [])
    {
        d(get_defined_vars());

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }

}      

