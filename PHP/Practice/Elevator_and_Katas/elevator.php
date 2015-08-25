<?php 
/*
    Variables
    $dir_person
    $dir_elevator
    $floor_person
    $floor_elevator

    Write 4 different code segments. One for each scenario.
    for $dir_person and $dir_elevator true = up
    for $floor_person and $floor_elevator uses integers.
*/

//Easy Version below
/*
    $person_dir = 'up';
    $car_dir = 'down';
    $person_floor = 4;
    $car_floor = 5;


    if ($car_dir == 'up') {
        if ($person_dir == 'up') {
            //echo 'direction = direction<br>';
            
            if ($person_floor > $car_floor) {
                echo 'pick up';
            
            } else {
                echo 'no it\'s passed';
            }

        } else {
            echo 'it\'s going the wrong way.';
        } 

    } else {
        
        if ($person_dir == 'down') {
            //echo 'down';
            
            if ($person_floor < $car_floor) {
                echo 'pick up';
            
            } else {
                echo 'no it\'s passed';
            }
        
        } else {
            echo 'it\'s going the wrong way';
        }
    }

*/



//Ampersand version below
    $person_dir = 'down';
    $car_dir = 'down';
    $person_floor = 2;
    $car_floor = 4;

    if ($car_dir == 'up') {

        if ($person_dir == 'up' && $car_floor <= $person_floor) {
            echo 'Pick up';
        
        } else if ($person_dir == 'up' && $car_floor >= $person_floor) {
            echo 'it has already passed';
        
        } else {
            echo 'It is going the wrong direction';
        }

    } else {

        if ($person_dir == 'down' && $car_floor >= $person_floor) {
            echo 'pick up';

        } else if ($person_dir == 'down' && $car_floor <= $person_floor) {
            echo 'already passed';
        
        } else {
            echo 'wrong direction';
        }

    }
        





//  My version below
/*
    $person_dir = 'down';
    $car_dir = 'down';
    $person_floor = 2;
    $car_floor = 2;

    if ($car_dir == 'up') {
        
        if ($person_dir == $car_dir) {
            
            if ($person_floor >= $car_floor) {
                echo 'pick up';            
            
            } else {
                echo 'it already passed';
            }
    
        }else {
            echo 'No the car is going the wrong way';
        }



    } else {
        
        if ($person_dir == $car_dir) {
            
            if ($person_floor <= $car_floor) {
                echo 'pick up';
            
            } else {
                echo 'it already passed';
            }
    
        }else {
            echo 'No the car is going the wrong way';
        }        



    }
*/


    //more stuff tonight. debug Ampersand code. does not currently work.
    


    //Code debugged incorrect usage of the < and > operators. 
    //$car_floor and $person_floor were switched.
    //should've been $person_floor and then $car_floor
    //operators positioned as if they were.
    //fixed operators, not variables.