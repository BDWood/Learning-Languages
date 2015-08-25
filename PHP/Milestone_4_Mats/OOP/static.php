<?php
require_once 'DB.php';
// class User {
//     public static $foo = 'this is a static member';
//     public $name = 'Fred Green';


// }


// echo User::$foo, "\n";

// $user = new User;

// print_r($user);


$db = DB::getDBConnection();
$statement = $db->prepare('SELECT * FROM junk');
$statement->execute();