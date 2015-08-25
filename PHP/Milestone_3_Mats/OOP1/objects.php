<?php
class person {

    public $name = 'no-name';
    public $hair_color = '';
    public $occupation;

    public function __construct($occupation, $name) {
        $this->occupation = $occupation;
        $this->name = $name;
    }

    public function announce_name() {
        return "hello my name is " . $this->name . "<br>";
    }

    public function speak() {
        return $this->announce_name() . "And my hair is " . $this->hair_color . 
        "<br><br>";
    }

    public function goToWork() {
        if ($this->occupation == 'baker') {
            return "i'm making bread";
        } else if ($this->occupation == 'programmer') {
            return "i am writing code";
        } else {
            return "i dont know what to do at work";
        }
    }

}

$bryan = new person('programmer', 'Bryan');

echo $bryan->goToWork();
// $pete->name = 'pete';
// $pete->hair_color = 'orange';
// echo $pete->speak();




$frank = new person('baker', 'Frank');
echo $frank->goToWork();
// $frank->name = 'frank';
// $frank->hair_color = 'aquamarine';
// echo $frank->speak();


//print_r($bryan);