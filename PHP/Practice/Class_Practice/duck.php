<?php

interface FlyBehavior {
    public function fly();
}

class FlyWithWings implements FlyBehavior {
    public function fly() {
        echo "I can fly with my wings";
    }
}

class FlyWithRocket implements FlyBehavior {
    public function fly() {
        echo "lift off!";
    }
}

class CantFly implements FlyBehavior{
    public function fly() {
        echo "I don't even fly";
    }
    
}

interface QuackBehavior {
    public function quack();
}

class MakeNoise implements QuackBehavior {
    public function quack(){
        echo "Quack Quack";
    }
}

class Squeak implements QuackBehavior {
    public function quack() {
        echo "Squeak Squeak";
    }
}

class NoQuack implements QuackBehavior {
    public function quack() {
        echo "I don't even quack";
    }
}

class Duck {
    public $fly_behavior;
    public $quack_behavior;


    public function swim() {
        echo "swimming duck";
    }

    public function display() {
        echo "be a duck";
    }

    public function performQuack() {
        $this->quack_behavior->quack();
    }

    public function performFly() {
        $this->fly_behavior->fly();
    }
}

$duck = new Duck();

$duck->quack_behavior = new MakeNoise();

$duck->performQuack();