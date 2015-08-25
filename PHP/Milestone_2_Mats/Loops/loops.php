<?php 

//$animals = ['camel', 'pig', 'skunk', 'lemur', 'cat'];

// $options = '';
// foreach($animals as $index => $animal) {
//     $options .= "<option value=\"$index\">$animal</option>";
// }

// $hamburger = [
//     'bun' => 'sesame',
//     'lettuce' => true,
//     'meat' => 'buffalo',
//     'cheese' => 'pepper jack',
//     'bacon' => true
// ];

// foreach($hamburger as $key => $attribute) {
//     echo "$key:$attribute<br>";
// }


// $capitol = 
//     'state' => 'Colorado',
//     'city' => 'Denver',
//     'population' => '80,000',
//     'interstate' => true,
//     'time-zone' => 'MTN'
// ];

// foreach($capitol as $key => $attribute) {
//     echo "$key : $attribute<br>";
// }

//can cause Infinite loops

// $condition = true;
// $i = 0;
// while($condition) {
//     if ($i > 100) {
//         $condition = false;
//     }
//     $i++;
//     echo "this is true<br>";
// }

$fruits = ['apple', 'orange', 'grape'];

for($i = 0; $i < count($fruits); $i++) {
    $fruit = $fruits[$i];
    echo "this is true : $i<br>";
}


?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
    <select name="">
        <?php //echo $options; ?>
    </select> 


</body>
</html> -->