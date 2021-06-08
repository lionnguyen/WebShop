<?php

if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header('location:../login-page.php?error=emptyinput');
        exit();
    }

    loginUser($con, $username, $pwd);
}
else{
    header('location: index.php');
    exit();
}

?>