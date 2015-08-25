<?php

$heading = "My blog";
$body = "This is the body";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic</title>
</head>
<body>
    
    <h1><?php echo $heading; ?></h1>


    <article>
        <p>
           <?php echo $body; ?>
        </p>
    </article>
</body>
</html>