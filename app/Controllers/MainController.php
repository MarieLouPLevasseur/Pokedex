<?php


namespace App\Controllers;

use App\Models\Pokemon;

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

      // j'initie un modele objet pour chaque table dont j'ai besoin de récupérer des données
      $pokemonModel= new Pokemon();

      // permet de récupérer les données de TOUS les Pokémons (par défaut selon leur ID)
      $allPokemons= $pokemonModel->findAll();

      //Je transmet les données à la vue via la méthode show afin de les rendre disponibles


        $this->show( "home",[
            "allPokemons" => $allPokemons,

        ]);

    }

    //==============================================
    //        DETAIL: page d'un personnage
    //==============================================

    public function detail($url_params)
    {
        
      echo "Page du Personnage #".$url_params['Pokemon_id'];


      $this->show( "detail", [
      ] );      
    }
}