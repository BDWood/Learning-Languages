<?php 

function isPositiveNumber($input) {
    if (is_numeric($input) && $input > 0) {
        return true;
    } else {
        return false;
    }
}

//Return needs to be assigned a variable or echoed.
//Names for PHP functions should explain what the function does.
//short and succinct

// if (isPositiveNumber()) {
//     echo 'its valid';
// } else {
//     echo 'It isnt valid';
// }



function getDayName() {
    return date('l');
}

// echo todaysDate();

// function bar() {
//     echo 'e';
// }

// function foo() {
//     echo 'a';
//     bar();
//     echo 'b';
// }

// echo 'c';
// echo foo();
// echo 'd';

function isLoggedIn() {
    return true;
}


function deleteUser($user_id) {
    if isLoggedIn() {

    }
}


function hasAccess() {
    if isLoggedIn() {

    }
}

//singularity principal. Functions do one thing and do that one thing really 
//well.

//____________________________

hasAccess()