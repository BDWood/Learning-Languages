<?php

function addTwoNumbers($x, $y) {
    
    if(!is_numeric($x)) {
        throw new Exception;
    }

    if(!is_numeric($y)) {
        throw new Exception;
    }


    return $x + $y;
}

function isValid($isTrue) {
    if ($isTrue){
        echo "pass<br>";
    } else {
        echo "failed<br>";
    }
}

//isValid(addTwoNumbers('5', 5) == 10);


// try {
//     isValid(addTwoNumbers("a", 5) == 9);
// } catch(Exception $e) {
//     echo 'exception thrown<br>';
// }

// try {
//     isValid(addTwoNumbers(5, 'b') == 9);
// } catch(Exception $e) {
//     echo 'exception thrown<br>';
// }


function isPositive($num) {
    if ($num >= 0 && is_numeric($num)) {
        echo $num . ' is Positive<br>';
    } else {
        throw new Exception;
    }
}

// try {
//     isPositive(4);
// } catch (Exception $e) {
//     echo 'Not Positive Number<br>';
// }

// try {
//     isPositive(-4);
// } catch (Exception $e) {
//     echo 'Not Positive Number<br>';
// }

// try {
//     isPositive(0);
// } catch (Exception $e) {
//     echo 'Not Positive Number<br>';
// }

// try {
//     isPositive('a');
// } catch (Exception $e) {
//     echo 'Not Positive Number<br>';
// }

function numeric($var) {
    
    if (is_string($var)) {
        throw new Exception;
    }

    if (is_bool($var)) {
        throw new Exception;
    }

    if (is_null($var)) {
        throw new Exception;
    }

    echo $var . ' is numeric'; 
}

// try {
//     numeric('the');
// } catch (Exception $e) {
//     echo 'This is not numeric<br>';
// }

// try {
//     numeric(4);
// } catch (Exception $e) {
//     echo 'This is not numeric<br>';
// }

function isNumericAndPositive($var) {
    if (!is_numeric($var)) {
        throw new Exception;
    }

    if ($var < 0) {
        throw new Exception;
    }

    echo $var . ' is numeric and Positive<br>';

}


// try {
//     isNumericAndPositive(4);
// } catch (Exception $e) {
//     echo 'This is not numeric and/or positive<br>';
// }

// try {
//     isNumericAndPositive(-4);
// } catch (Exception $e) {
//     echo 'This is not numeric and/or positive<br>';
// }

// try {
//     isNumericAndPositive('4');
// } catch (Exception $e) {
//     echo 'This is not numeric and/or positive<br>';
// }

// try {
//     isNumericAndPositive('the');
// } catch (Exception $e) {
//     echo 'This is not numeric and/or positive<br>';
// }

class AgeOutOfRangeException extends Exception {

}

function isValidAge($age) {
    if ($age < 1 || $age > 108) {
        throw new AgeOutOfRangeException;
    } else {
        echo 'You are the correct age<br>';
    }
}

// try {
//     isValidAge(110);
// } catch (AgeOutOfRangeException $e) {
//     echo 'That age is ridiculous<br>';
// } catch (Exception $e) {
//     echo 'Something went wrong, how did you break that?<br>';
// }

// try {
//     isValidAge(-2);
// } catch (AgeOutOfRangeException $e) {
//     echo 'That age is ridiculous<br>';
// } catch (Exception $e) {
//     echo 'Something went wrong, how did you break that?<br>';
// }

// try {
//     isValidAge(0);
// } catch (AgeOutOfRangeException $e) {
//     echo 'That age is ridiculous<br>';
// } catch (Exception $e) {
//     echo 'Something went wrong, how did you break that?<br>';
// }

// try {
//     isValidAge(108);
// } catch (AgeOutOfRangeException $e) {
//     echo 'That age is ridiculous<br>';
// } catch (Exception $e) {
//     echo 'Something went wrong, how did you break that?<br>';
// }

// try {
//     isValidAge(1);
// } catch (AgeOutOfRangeException $e) {
//     echo 'That age is ridiculous<br>';
// } catch (Exception $e) {
//     echo 'Something went wrong, how did you break that?<br>';
// }

class InValidPasswordException extends Exception {

}

function PasswordValidate($password) {
    if (!preg_match('/^[a-zA-Z0-9!@#$%^&*\(\)]{8,}$/', $password)) {
        throw new InValidPasswordException;
    }
    echo 'Login<br> ';
}


try {
    PasswordValidate('12345abc');
} catch (InValidPasswordException $e) {
    echo 'Invalid Password<br>';
} catch (Exception $e) {
    echo 'Something went wrong, how did you break that?<br>';
}

try {
    PasswordValidate('12345');
} catch (InValidPasswordException $e) {
    echo 'Invalid Password<br>';
} catch (Exception $e) {
    echo 'Something went wrong, how did you break that?<br>';
}