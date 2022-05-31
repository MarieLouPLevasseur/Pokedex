<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class CoreModel{

//========================================
// Propriétés
//========================================

protected $id;
protected $name;

//========================================
//   Constructeur
//========================================

//========================================
// Methods
//========================================
    //----------------------------------------------------------------
    //------------------permet de récupérer UNE LIGNE de la table --------------
    //--------------------------(1 Objet à partir de l'id)----------------------

     /**
     * Méthode qui retourne un objet Type à partir de son $id en BDD
     * @param int $id 
     * @return self Une instance de Type qui correspond à la marque
     */
    public function find( $id )
    {
        //nous retourne directement un objet avec LA LIGNE DE L'ID SPECIFIE EN PARAM
        $pdo = Database::getPDO();

    // Récupèration du nom de la classe actuel (qui hérite de CoreModel)
      $class_name = get_class( $this );

    // On récupère la valeur d'une propriété prédéfini comme la table en cours
    $table_name = $this->table;

    // on appel la table concerné et l'id transmis
    $sql = "SELECT * FROM `$table_name` WHERE `id` = $id";
    $pdoStatement = $pdo->query( $sql ); 

    //   on appelle la classe concerné
    $object = $pdoStatement->fetchObject( $class_name );
    return $object;
  
    }

    //--------------------------------------------------------------------------
    //------------------permet de récupérer PLUSIEURS LIGNES de la table --------------
    //--------------------------( Objet à partir de l'id)----------------------

    /**
     * Méthode qui retourne tout les objets Type en BDD
     * @return self[] Un tableau d'objets Type
     */
    public function findAll()
    {
    // on peut récupérer directement des objets dans le tableau retourné par PDO
      $pdo = Database::getPDO();

    // Je récupère le nom de la classe actuel (qui hérite de CoreModel)
      $class_name = get_class( $this );

      // On récupère la valeur d'une propriété TABLE prédéfinie
      $table_name = $this->table;

    // Requête SQL et execution
    $sql = "SELECT * FROM `$table_name`";

    $pdoStatement = $pdo->query( $sql );

    $objects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    // d( $objects );
    return $objects;
  }


    /**
     * Méthode qui retourne tout les objets Type selon type_id
     * @return self[] Un tableau d'objets Type
     */
    public function findAllTypeByID($type_id)
    {
    // on peut récupérer directement des objets dans le tableau retourné par PDO
      $pdo = Database::getPDO();

    // Je récupère le nom de la classe actuel (qui hérite de CoreModel)
      $class_name = get_class( $this );

    // Requête SQL et execution
    $sql = "SELECT number,pokemon.id as pokemon_id, type.id as type_id,pokemon.name
    FROM pokemon JOIN pokemon_type 
    ON pokemon.number = pokemon_type.pokemon_number
    JOIN type
    ON pokemon_type.type_id = type.id
    WHERE $type_id=type_id";

    $pdoStatement = $pdo->query( $sql );

    $objects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    // d( $objects );
    return $objects;
  }
//========================================
// Getters & Setters
//========================================

    //--------------------------------------------------------------------------
    //------------------permet de gérer propriété ID --------------

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}
    //--------------------------------------------------------------------------
    //------------------permet de gérer propriété NAME --------------

/**
 * Get the value of name
 */ 
public function getName()
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

return $this;
}
}