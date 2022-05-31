<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Pokemon_type extends CoreModel
{

//========================================
// Propriétés
//========================================

 // propriétés ID hérité de CoreModel

 protected $table = "pokemon_type";
 protected $pokemon_number;
 protected $type_id;


//========================================
// Constructeur
//========================================

// X


//========================================
// Methods
//========================================

// les méthodes find et findAll sont hérités de CoreModel



//========================================
// Getters and setters
//========================================

// Les getters/setters de ID  hérité de CoreModel

    //------------------permet de gérer la propriété Type_id --------------

 /**
  * Get the value of type_id
  */ 
 public function getType_id()
 {
  return $this->type_id;
 }

 /**
  * Set the value of type_id
  *
  * @return  self
  */ 
 public function setType_id($type_id)
 {
  $this->type_id = $type_id;

  return $this;
 }
    //------------------permet de gérer la propriété Pokemon_number --------------

 /**
  * Get the value of pokemon_number
  */ 
 public function getPokemon_number()
 {
  return $this->pokemon_number;
 }

 /**
  * Set the value of pokemon_number
  *
  * @return  self
  */ 
 public function setPokemon_number($pokemon_number)
 {
  $this->pokemon_number = $pokemon_number;

  return $this;
 }
}
?>