<?php


namespace App\Controllers;

class MainController extends CoreController
{
    //==============================================
    //          PAGE 404: erreur sur l'URL 
    //==============================================
    
        public function pageNotFound() {
        $this->show('404');
    }
    //==============================================
    //              HOME: Accueil
    //==============================================

    
    public function home()
    {
        $this->show( "home",[]);

    }

    //==============================================
    //        DETAIL: page d'un personnage
    //==============================================

    public function detail($url_params)
    {
        
      echo "Page du Personnage #".$url_params['Pokemon_id'];

      $this->show( "detail", [] );      
    }
}