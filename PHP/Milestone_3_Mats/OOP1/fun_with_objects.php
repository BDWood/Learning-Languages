<?php

class Animal {

    public $legs;
    public $color;


    public function __construct($legs, $color) {
        $this->legs = $legs;
        $this->color = $color;
    } 
}

$dog = new Animal(4, 'brown');

print_r($dog);



echo "<br><br><br><br><br><br>";


class Furniture {

    public $seatCount;

    public function __construct($seatCount) {
        $this->seatCount = $seatCount;
    }

}

$chair = new Furniture(1);
$couch = new Furniture(3);


echo "<br><br><br><br><br><br>";


class Computer {

    public $memorySize;
    public $cpuCount;
    public $diskSpace;

    public function __construct($memorySize, $cpuCount, $diskSpace) {
        $this->memorySize = $memorySize;
        $this->cpuCount = $cpuCount;
        $this->diskSpace = $diskSpace;
    }
}

$mac = new Computer('16gb', '5.6gh', '500gb');
$windows = new Computer('4gb', '2.4gh', '500gb');


echo "<br><br><br><br><br><br>";



class Person {

    public $health = 100;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        return "Hi, my name is " . $this->name . ".";
    }

    public function eat() {
        if ($health < 100) {
            $health = 100;
        } else {
            return "you already have enough health.";
        }
    }

    public function attack($person) {
        $person->health - 10;
    }

}

$frank = new Person('Frank');

echo $frank->speak();



echo "<br><br><br><br><br><br>";



class Vehicle {
    public $fuelAmount;
    public $mpg;


    public function __construct($fuelAmount, $mpg) {
        $this->fuelAmount = $fuelAmount;
        $this->mpg = $mpg;
    }

    public function honk() {
        
        return "honk honk I have " . $this->fuelAmount . " gal of gas.";
    }

    public function drive($distance) {
        $this->fuelAmount -= $distance / $this->mpg;
    }
}

$mustang = new Vehicle(100, 50);
echo $mustang->honk();

$mustang->drive(500);

echo $mustang->honk();

echo "<br><br><br><br><br><br>";





