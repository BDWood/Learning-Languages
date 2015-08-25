<?php

class Person {

    public $health = 100;
    
    public $name;
    
    public $weapon;
    
    public $armor;
    
    public $potion = null;

    public function __construct($name, $weapon, $armor) {
        
        $this->name = $name;
        
        $this->weapon = $weapon;
        
        $this->armor = $armor;
    }

    public function speak() {
        
        return "Hi, my name is " . $this->name . ".";
    }

    public function pickUpPotion($potion) {
        $this->potion = $potion;
    }

    public function eat() {

        if ($this->potion) {
            
            $this->health += $this->potion->healAmount;
            $this->potion = null;
            if ($this->health > 100) {
                $this->health = 100;
            }
        
        } else {
            echo "error: no potion";
        }
    }
    
    public function attack($person) {
        
        if ($person->armor->strengthAmount < 10 + $this->weapon->damageAmount) {
            $person->health -= 10 + $this->weapon->damageAmount 
            - $person->armor->strengthAmount;
        }    
    }

}


class Weapon {
    public $damageAmount;

    public function __construct($damageAmount){
        $this->damageAmount = $damageAmount;
    }

}

class Melee extends Weapon {
    public $hasEdge;

    public function __construct($hasEdge) {
        
        parent::__construct($damageAmount, $hasEdge); 

        $this->hasEdge = $hasEdge;
        // if ($this->hasEdge = true) {
        //     $this->damageAmount = $damageAmount + 2;
        // } else {
        //     $this->damageAmount = $damageAmount +1;
        // }
    }
}

class Ranged extends Weapon {
    public $amountAmmunition;

    public function __construct($amountAmmunition) {
        $this->amountAmmunition = $amountAmmunition;
    }
}

class Potion {
    public $healAmount;

    public function __construct($healAmount) {
        $this->healAmount = $healAmount;
    }
}

class Armor {
    public $strengthAmount;

    public function __construct($strengthAmount) {
        $this->strengthAmount = $strengthAmount;
    }
}

