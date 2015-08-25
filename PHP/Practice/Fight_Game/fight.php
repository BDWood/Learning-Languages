<?php
require_once 'fight_logic.php';

$longsword = new Melee(true);
$club = new Melee(false);

$plateMail = new Armor(5);
$leather = new Armor(8);

$ceasar = new Person('Ceasar', $longsword, $leather, 15);
$brutus = new Person('Brutus', $club, $plateMail, 17);

//============================================================================\\

$ceasar->attack($brutus);

print_r($brutus);

$brutus->pickUpPotion(new Potion(10));

echo "<br>";

print_r($brutus);

$brutus->eat();



