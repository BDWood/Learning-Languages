<?php


class Property {
    public $lot_size;
    public $title_owner;
    private $zoning;
    protected $ask_price;

    public function setZoning($zoning) {
        $this->zoning = $zoning;
    }
}

class House extends Property {
    public $roof_type;
    public $num_stories;
    public $num_rooms;
    public $num_baths;
    public $has_pool;

    public function setZoning($zoning) {
        if (preg_match('/commercial/', $zoning)){
            die("can't set commercial for a house");
        }
        parent::setZoning($zoning);
        //$this->setZoning($zoning);
        //$this->zoning = $zoning;
    }

    public function setAskPrice($ask_price) {
        $this->ask_price = $ask_price;
    }

}

class Warehouse extends Property {
    public $sq_footage;
    public $kw_capacity;
    public $ceiling_height;
}

$house = new House();

$house->setAskPrice(100);
$house->num_rooms = 4;
$house->setZoning('residential, single family');

print_r($house);