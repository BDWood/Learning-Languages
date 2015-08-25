<?php

if (isset($_GET['email'])) {

    $regex = '/^[a-z]+@[a-z]+\.[a-z]{2,}$/';

    if (preg_match($regex, $_GET['email'])){
        header('Location: login.php');
        exit();
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recursive Forms</title>
</head>
<body>

    <form action="login.php">
        <input type="email">
        <button>Login</button>
    </form>
    
</body>
</html>