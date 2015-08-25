<?php

class Cow {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class Farmer {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function milkCows($cows) {
        
        foreach ($cows as $cow) {
            echo "Farmer " . $this->name . " milked cow: " . $cow->name . "<br>";
        }

        
    }
}

$cows = [];
$cows[] = new Cow('Betsy');
$cows[] = new Cow('Sara');
$cows[] = new Cow('Paula');
$cows[] = new Cow('Lulu');
$cows[] = new Cow('Bill');
$cows[] = new Cow('Betty Lu');
$cows[] = new Cow('Sally');
$cows[] = new Cow('Lavender');
$cows[] = new Cow('Josie');
$cows[] = new Cow('Cow');
$cows[] = new Cow('Random cow number 4');
$cows[] = new Cow('Pig');
$cows[] = new Cow('Junior');
$cows[] = new Cow('Jemima');


$cowNames = ['Betsy', 'Sara', 'Paula', 'Lulu', 'Bill', 'Betty Lu', 'Sally', 
'Lavender', 'Josie', 'Cow', 'Random Cow Number 4', 'pig', 'Jemima',
'Random Cow Number 700', 'Random Cow Number 8', 'Random Cow Number 10',
'Random Cow Number 20000'];

for ($i = 0; $i < 5000; $i++) {
    $name = $cowNames[rand(0, count($cowNames))];
    $cows[] = new Cow($name);
}

print_r($cows);

//($cows);


// $farmer = new Farmer('Craig');


// $farmer->milkCows($cows); 