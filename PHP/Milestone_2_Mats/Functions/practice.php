<?php 

function add($x, $y) {
    $total = $x +$y;
    return $total;
}

$a = 10;
$b = 15;

//echo add($a, $b);


function message($message) {
    echo 'your message is ' . $message;
}

//message(add($a, $b));



function isLogged() {
    return false;
}


function changeFirstName($firstName, $isLogged) {

    if (!isLogged()) {
        return;
    }
}


$firstName = "Bryan";


echo changeFirstName($firstName, isLogged());



/*name space and scope almost synonymous. functions create their own scope. name
space is equal to one plus scope areas.*/