<?php
// phpinfo();
try {

    $link = new PDO('mysql:host=localhost;
                    dbname=junk;
                    charset=utf8', 'root', ''); 
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $link->prepare('SELECT * FROM dolphin;');
    $statement->execute();

    $results = $statement->fetchAll();

    foreach($results as $row) {
        echo $row['name'] . "<br>";
    }

    //print_r($results);

} catch (PDOException $e) {
    
    die($e->getMessage());

}