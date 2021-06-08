<?php

if (isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $username= $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emtyInputSignup($firstName,$lastName, $email, $username, $pwd, $pwdRepeat) !== false){
        header("Location: ../register-page.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false){
        header("Location: ../register-page.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("Location: ../register-page.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("Location: ../register-page.php?error=passworddontmatch");
        exit();
    }
    if (uidExists($con, $username, $email) !== false){
        header("Location: ../register-page.php?error=usernametaken");
        exit();
    }

    createUser($con, $firstName, $lastName, $email, $username,$pwd);
}else{
    header("Location: register-page.php");
}

