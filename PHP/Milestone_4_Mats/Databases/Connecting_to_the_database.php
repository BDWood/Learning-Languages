<?php

    $db = new PDO('mysql:host=localhost;dbname=junk;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // $statement = $db->prepare('SELECT * FROM dolphin');

    // $statement->execute();
    // $results = $statement->fetchAll();

    //print_r($results);
    $id = 1;
    //$statement = $db->prepare('SELECT * FROM dolphin WHERE id = 1' );
    //The same as:
    //$statement = $db->prepare('SELECT * FROM dolphin WHERE id =' . $id);
    //But this is more modular. It is also vulnerable to sql injection. Which can funk your shiz up.
    //This is the most modular.

    function doesIdExist($id) {
        $db = new PDO('mysql:host=localhost;dbname=junk;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $db->prepare('SELECT * FROM dolphin WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $results = $statement->fetchAll();
        print_r($results);
    }

    doesIdExist(4);

    // $statement = $db->prepare('SELECT * FROM dolphin WHERE id = :id');
    // $statement->bindValue(':id', $id);
    // // Always Bind Values!!!!!
    // $statement->execute();
    // $results = $statement->fetchAll();
    // print_r($results);
    
/***************************************************************************************************
    Deletes (for clean up)
***************************************************************************************************/

    $sql = "DELETE from dolphin where id=:id";
    $statement = $db->prepare($sql);
    $sql_values = [
        ':id' => 3
    ];
    $statement->execute($sql_values);

    $sql = "DELETE from dolphin where id=:id";
    $statement = $db->prepare($sql);
    $sql_values = [
        ':id' => 4
    ];
    $statement->execute($sql_values);

/***************************************************************************************************
    Insert Dolphins
***************************************************************************************************/

    if (!doesIdExist(3)) {
        $sql = "INSERT into dolphin (id, type, name) values (:id, :type, :name)";
        $statement = $db->prepare($sql);
        $sql_values = [
            ':id' => 3,
            ':type' => 'Ancient Murder Squid',
            ':name' => 'Cthulhu'
        ];
        $statement->execute($sql_values);
    } else {
        return "Already Exists"; 
    }

    if (!doesIdExist(4)) {
        $sql = "INSERT into dolphin (id, type, name) values (:id, :type, :name)";
        $statement = $db->prepare($sql);
        $sql_values = [
            ':id' => 4,
            ':type' => 'Ancient',
            ':name' => 'Abraxas'
        ];
        $statement->execute($sql_values);
    } else {
        return "Already Exists";
    }
        

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Connection</title>
</head>
<body>
        <h1>Dolphin DB</h1>

</body>
</html>

