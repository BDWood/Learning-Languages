<?php

class animal {

    public $color = 'brown';
    public $legs = 4;
    public $isMammal = true;
    public $ears = 'floppy';
    public $isWarmBlooded = true;
    private $canBreathe = true;
    private $isHungry = true;


    function __construct($color, $legs, $isMammal, $ears) {
        $this->color = $color;
        $this->legs = $legs;  
        $this->isMammal = $isMammal;
        $this->ears = $ears;
    }  

    function suffocate() {
        $this->canBreathe = false;
    }  

    function breathe() {
        if ($this->canBreathe) {
            return "What's that smell?";
        } else {
            return "I can't breathe!!!!!";
        }
    }

    function feed() {
        $this->isHungry = false;
    }

    function hunger() {
        if ($this->isHungry) {
            return "FEED ME!!!!";
        } else {
            return "I'm not Hungry";
        }
    }

    function think() {
        return "I am";
    }

    function speak() {
        return "bark bark";
    }

}


$myAnimal = new animal('brown', 4, true, 'floppy');

print_r($myAnimal);

// echo "<br>";
// echo $myAnimal->color;
// echo "<br>";
// echo $myAnimal->legs;
// echo "<br>";
// echo $myAnimal->ears;
// echo "<br>";
// echo $myAnimal->isMammal;

echo $myAnimal->breathe();
echo "<br>";
echo $myAnimal->suffocate();
echo $myAnimal->breathe();

// echo "<br>";
// echo $myAnimal->breathe();
// echo "<br>";
// echo $myAnimal->eat();
// echo "<br>";
// echo $myAnimal->think();
// echo "<br>";
// echo $myAnimal->speak();
// echo "<br>";

echo "<br>";

$myRedAnimal = new animal('red', 6, false, 'pointy');
print_r($myRedAnimal);