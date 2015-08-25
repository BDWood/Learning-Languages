<?php   
    
    
$car_dir = 'down';
$person_dir = 'up';
$car_floor = 2;
$person_floor = 3;

if ($car_dir == 'up') {
    
    if ($person_dir == 'up') {
        // echo 'up';
        
        if ($person_floor > $car_floor) {
            echo 'pick up';
        
        } else {
            echo 'already passed';
        }
    
    } else {
        echo 'wrong direction';
    }

} else { 

    if ($person_dir == 'down') {
       // echo 'down';
        
        if ($person_floor < $car_floor) {
            echo 'pick up';
        
        } else {
            echo 'already passed';

        }
    } else {
        echo 'wrong direction';
    }
}