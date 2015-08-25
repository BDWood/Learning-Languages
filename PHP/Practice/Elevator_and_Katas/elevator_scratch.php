<?php 

$person_dir = 'down';
$car_dir ='up';
$person_floor = 3;
$car_floor = 4;

if ($person_dir == 'up') {
    if ($car_dir == 'up') {
        if ($person_floor >= $car_floor){
            echo 'pick up';
        } else {
            echo 'already passed';
        }
    } else {
        echo 'wrong direction';
    }

} else {
    if ($car_dir == 'down') {
        if ($person_floor <= $car_floor) {
            echo 'pick up';
        } else {
            echo 'already passed';
        }
    } else {
        echo 'wrong direction';
    }
}
