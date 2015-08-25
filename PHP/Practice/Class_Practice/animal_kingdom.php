<?php


class Animal {
    public $isLiving;
    public $canBreathe;
    public $canEat;
    public $canDrink;
    public $size;
    public $color;
}

class Reptile extends Animal {
    public $isColdBlooded;
    public $laysEggs;
    public $hasScales;
}

class BeardedDragon extends Reptile {
    public $hasNeckFrill;
}

class KomodoDragon extends Reptile {
    public $hasPoisonSpit;
}

class Bird extends Animal {
    public $hasFeathers;
    public $laysEggs;
    public $isWarmBlooded;
}

class Owl extends Bird {
    public $hasBigEyes;
    public $isNocturnal = true;
}

class BaldEagle extends Bird {
    public $hasWhiteHead;
}

class Mammal extends Animal {
    public $hasFur;
    public $hasLiveBirth;
    public $isWarmBlooded;
}

class Cat extends Mammal {
    public $hasSlitEyes;
    public $canRetractClaws;
}

class Tiger extends Cat {
    public $hasMane = false;
}

class Lion extends Cat {
    public $hasMane = true;
}

class Primate extends Mammal {
    public $enjoyBannanas = true;
    public $causesShenanigans = true;
}

class Gorilla extends Primate {
    public $hasSilverBack = true;
}

class SpiderMonkey extends Primate {
    public $hasCrazyTail = true;
}

$bobo = new Gorilla();

$chaz = new SpiderMonkey();

$simba = new Lion();

$tigger = new Tiger();

$freedom = new BaldEagle();

$owly = new Owl();

$dragster = new KomodoDragon();

$mortekai = new BeardedDragon();