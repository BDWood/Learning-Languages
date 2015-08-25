<?php



class animal {
    public $foodType;
    public function __construct ($type) {
        $this->foodType = $type;
    }
}


class zooKeeper {
    private $meat = 10;
    private $veggies = 10;

    public function feed($animal) {
        if ($animal->foodType == 'carnivore') {
            $this->meat -= 2;
        } else if ($animal->foodType == 'herbivore') {
            
            $this->veggies -= 2;
        } else if ($animal->foodType == 'omnivore') {
           
            $this->veggies -= 1;
            $this->meat -= 1;
        } else {
            return "invalid animal input";
        }
    }

    public function getFoodStatus() {
        return "there are" . $this->meat . " units of meat and " . $this->veggies . 
        "units of Veggies.";
    }
}

$zooKeeper = new ZooKeeper();

print_r($zooKeeper);

echo "<br>";

$lion = new animal('carnivore');
$rabbit = new animal('herbivore');
$pig = new animal('omnivore');

$zooKeeper->feed($lion);
print_r($zooKeeper);

echo "<br>";
$zooKeeper->feed($rabbit);
print_r($zooKeeper);

echo "<br>";
$zooKeeper->feed($pig);
print_r($zooKeeper);