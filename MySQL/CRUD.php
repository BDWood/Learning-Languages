<?php

try {
    $link = new PDO('mysql:host=localhost;dbname=junk;charset=utf8', 'root', '');
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}

try {
    $statement = $link->prepare('SELECT * FROM user WHERE user_id = :id');
    $statement->bindValue(':id', $_GET['user_id']);
    $statement->execute();

} catch (PDOException $e) {
    die($e->getMessage());
}
   



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <h1>This is about Dolphins</h1>
    
    <p>I like dolphins and this is a lost of my dolphins in the database.</p>

    <ul>
        <?php
            foreach($results as $dolphin) {
                echo "<li>" . $dolphin['name'] . 'who is a ' . $dolphin['type'] . "<br>";
            }

        ?>

    </ul>
    
</body>
</html>