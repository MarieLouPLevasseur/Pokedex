<?php


namespace App\Controllers;

use App\Models\Pokemon;
use App\Models\Pokemon_type;
use App\Models\Type;


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

    // j'initie un modele objet pour chaque table dont j'ai besoin de récupérer des données
    $pokemonModel= new Pokemon();
    $typeModel =new Type();

    // permet de récupérer les données D'UN Pokemon ciblé par son ID
    $currentPokemon= $pokemonModel->find($url_params['Pokemon_id']);

    // permet de récupérer le numéro du Pokemon ciblé  
    $currentPokemon_Number=$currentPokemon->getNumber();
    // d($currentPokemon_Number);
   
    // permet de récupérer tous les Types d'un pokemon ciblé
    $allTypesCurrentPokemon = $typeModel->findAllTypesByNumber($currentPokemon_Number);

    

      $this->show( "detail", [
        "currentPokemon"         => $currentPokemon,
        "allTypesCurrentPokemon" => $allTypesCurrentPokemon,

      ] );      
    }
}