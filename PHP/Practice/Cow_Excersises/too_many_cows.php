<?php

class Cow {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function favColor() {
        return ['blue', 'green'];
    }
}

class Farmer {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$farmer = new Farmer('Bob');

$cows = [];

$cowNames = ['Betsy', 'Sara', 'Paula', 'Lulu', 'Bill', 'Betty Lu', 'Sally', 
'Lavender', 'Josie', 'Cow', 'Random Cow Number 4', 'pig', 'Jemima',
'Random Cow Number 700', 'Random Cow Number 8', 'Random Cow Number 10',
'Random Cow Number 20000'];

for ($i = 0; $i < 10000; $i++) {
    $name = $cowNames[rand(0, count($cowNames) -1)];
    $cows[] = new Cow($name);
}

echo $cows[3001]->name;
echo "<br>";
echo $cows[3001]->favColor()[0];