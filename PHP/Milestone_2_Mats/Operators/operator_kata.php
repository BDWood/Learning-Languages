<?php 

    // $result = 23 / 7 + 2 - 15 * 27;

    // echo 'result: ' . $result;


//string-to-number casting $result = 23 / '0.5fred' casts 0.5fred into 0.5
//however, $result = 23 / 'fred0.5' casts fred0.5 into fred which is equal to 0.

    // loop
    // for($i = 0; $i < 10;) {

    //     $i = $i +2;
    //     $i += 2; //This is the same as above.
    //     $i += 1; //counting by one
    //     $i++; //is the same as above; only works for one
    //     $i--; //is subtracting by one; only works for one.

    //     echo 'i: ' . $i . '<br>';
    // }    
 
    $hungry = true;
    $lazy = false;

    if ($hungry == true) {
        echo 'lets eat ';
        if ($lazy == false) {
            echo "eggs benadict"; 
        } else {
            echo "cereal today"; 
        } 
    } else {
        echo 'nope';
    }