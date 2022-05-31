<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Type extends CoreModel
{

//========================================
// Propriétés
//========================================

 // propriétés ID, NAME CREATED AT et UPDATED AR hérités de CoreModel

 protected $table = "type";
 protected $color ;


//========================================
// Constructeur
//========================================

// X


//========================================
// Methods
//========================================

// les méthodes find et findAll sont hérité de CoreModel

//--------------------------------------------------------------------------
//------------------permet de récupérer PLUSIEURS LIGNES du Type_id de la table --------------
//--------------------------( Objet à partir de l'id)----------------------

public function findAllTypesByNumber($pokemon_number)
{

    /**
     * Méthode qui retourne les Type_id d'un Pokemon
     * @return self[] Un tableau d'objets Type
     */
 
    // on peut récupérer directement des objets dans le tableau retourné par PDO
      $pdo = Database::getPDO();


    // Je récupère le nom de la classe actuel (qui hérite de CoreModel)
    $class_name = get_class( $this );


    // Requête SQL et execution
    $sql = "SELECT pokemon_number, type.id as type_id,type.name,color
    FROM type JOIN pokemon_type 
    ON pokemon_type.type_id = type.id
    JOIN pokemon
    ON pokemon.number = pokemon_type.pokemon_number
    WHERE $pokemon_number=pokemon_number";

    $pdoStatement = $pdo->query( $sql );
    // d( $pdoStatement );
    // die;


    $objects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    return $objects;
  
}

//========================================
// Getters and setters
//========================================

// Les getters/setters de ID et NAME sont hérités de CoreModel
    //------------------permet de gérer propriété Color --------------

    /**
     * Get the value of color
    */ 
    public function getColor()
    {
    return $this->color;
    }

    /**
     * Set the value of color
    *
    * @return  self
    */ 
    public function setColor($color)
    {
    $this->color = $color;

    return $this;
    }
}
?>