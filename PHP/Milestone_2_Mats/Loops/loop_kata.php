<?php 


$fruits = ['apple', 'grape', 'banana'];

for($i = 0; $i < count($fruits); $i++) {
    $fruit = $fruits[$i];
    echo "$fruit : $i<br>";
}

echo "<br>New Array:<br><br>";

$animals = ['dog', 'cat', 't-rex', 'mouse'];

for($i = 0; $i < count($animals); $i++) {
    $animal = $animals[$i];
    echo "$animal : $i<br>";
}

echo "<br>New Array:<br><br>";

$food = ['chips', 'hamburger', 'beans', 'mac_and_cheese', 'chicken', 'fries'];

for($i = 0; $i < count($food); $i++) {
    $item = $food[$i];
    echo "$item : $i<br>";
}

echo "<br>New Array:<br><br>";











$loops = ['for', 'while', 'foreach'];

for($i = 0; $i < count($loops); $i++) {
    $loop = $loops[$i];
    echo "$loop : $i<br>";
}








echo "<br>New Array:<br><br>";





$colors = ['red', 'green', 'white', 'yellow', 'black', 'purple'];

for($i = 0; $i < count($colors); $i++) {
    $color = $colors[$i];
    echo $color . ' : ' . $i . '<br>';
}


