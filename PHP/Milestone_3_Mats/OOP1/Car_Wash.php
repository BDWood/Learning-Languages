<?php

class vehicle {
    public $size = 'big';
    public $isDirty = true;
    
    function __construct($isDirty, $size) {
        $this->isDirty = $isDirty;
        $this->size = $size;
    }

}

class attendant {

    public $soap = 100;

    function getSoapAmount() {
        return "there is only" . $this->soap . " left";
    }
    
    function wash($vehicle){
        if ($vehicle->size == "big") {
            $this->soap -= 10;
        } else if ($vehicle->size == "medium") {
            $this->soap -= 5;
        } else if ($vehicle->size == "small") {
            $this->soap -= 2;
        } else {
            return "Wash your own motorcycle!!";
        }
        $vehicle->isDirty = false;
    }
}

$attendant = new attendant();
$vehicle = new vehicle(true, 'big');

$attendant->wash($vehicle);
echo $attendant->getSoapAmount();

print_r($vehicle);
