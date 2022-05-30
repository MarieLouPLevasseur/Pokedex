<?php
 
  namespace App\Controllers;

class CoreController
{
          //------------------permet de gérer l'affichage des templates communs et des données utiles (pour l'instant) --------------
//==============================================
//                 Propriétés
//==============================================
    protected $router;

    public function __construct($router) {
        // Je récupère le routeur et le stocke dans une propriété
        $this->router = $router;
    }
//=====================================================================================
// Fonction Support: GETTRANSVERSALVARS: code la route automatiquement pour les liens
//======================================================================================

    /**
     * Méthode permettant de générer les variables utiles sur toutes les pages
     */
    private function getTransversalVars() {
        // Je retourne un tableau associatif des données utile sur toutes les pages
        return [
            'baseURL' => $_SERVER['BASE_URI'],
            'router' => $this->router
        ];
    }
//======================================================================================
// Fonction Support: SHOW: affiche les templates et transmets les données utiles à la vue
//======================================================================================

    //ViewName correspond au paramètre ayant le meme nom que la méthode (et la page en elle-même) pour appeler le template associé
    //ViewData permettra de faire passer des données sous forme de tableau associatif dans les méthodes privées si nécessaires

    protected function show($viewName, $viewData = [])
    {

     // J'appelle la méthode s'occupant des données à utiliser sur toutes les pages
     $transversalVars = $this->getTransversalVars();

     // Pour chaque donnée, je l'ajoute à $viewData
     foreach ($transversalVars as $viewVarName=>$viewVarValue) {
         $viewData[$viewVarName] = $viewVarValue;
     }
     
        d(get_defined_vars());

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';

    }

}      

