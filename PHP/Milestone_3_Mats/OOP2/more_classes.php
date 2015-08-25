<?php


class Feline {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getSize(){
        return $this->size;
    }
}

class Lion extends Feline {
    
    public $size = 'large';
    public $hasMane = true;
}

class Tiger extends Feline{

    public $size = 'large';

}

class HouseCat extends Feline{

    public $size = 'small';

}

$lion = new Lion('Frog');

$tiger = new Tiger('Tubby');

$house_cat = new HouseCat ('Snoopy');

echo 'Frog the Lion is ' . $lion->size . '.';
echo '<br>';
echo 'Tubby the tiger is ' . $tiger->size . '.';
echo '<br>';
echo 'Snoopy the house cat is ' . $house_cat->size . '.';

echo '<br>';
echo $lion->getSize();
echo '<br>';
echo $tiger->getSize();
echo '<br>';
echo $house_cat->getSize();
echo '<br>';