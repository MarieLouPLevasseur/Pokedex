<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Pokemon extends CoreModel
{

    protected $table = "pokemon";

//========================================
// Properties
//========================================

 // propriétés ID et NAME sont hérités de CoreModel

    protected $hp;
    protected $attack;
    protected $defense;
    protected $spe_attack;
    protected $spe_defense;
    protected $speed;
    protected $number;

//========================================
// Constructeur
//========================================

// X

//========================================
// Methods
//========================================

// les méthodes find et findAll sont hérité de CoreModel



//========================================
// Getters and setters
//========================================

// Les getters/setters de ID, NAME, UPDATED et CREATED sont hérité de CoreModel

    //------------------permet de gérer propriété hp --------------

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }
    //------------------permet de gérer propriété attack --------------

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }
    //------------------permet de gérer propriété defense --------------

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }
    //------------------permet de gérer propriété spe_attack --------------

    /**
     * Get the value of spe_attack
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpe_attack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

        //------------------permet de gérer propriété spe_defense --------------

    /**
     * Get the value of spe_defense
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */ 
    public function setSpe_defense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }
    //------------------permet de gérer propriété speed --------------

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
    //------------------permet de gérer propriété number --------------

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
?>