<?php

function emtyInputSignup($firstName,$lastName, $email, $username, $pwd, $pwdRepeat)
{
    $result;
    if (empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        $result =true;
    }
    else {
        $result =false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $result =true;
    }
    else {
        $result =false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result =true;
    }
    else {
        $result =false;
    }
    return $result;
}

function uidExists($con, $username, $email) {
    $sql = "SELECT * FROM `user` WHERE userName = ? OR email = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../register-page.php?error=uidExists");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result =false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($con, $firstName, $lastName, $email, $username,$pwd){
    $sql = "INSERT INTO `user` (firstName, lastName, email, userName, `password`)  VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../register-page.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName, $email, $username,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register-page.php?error=none");
    exit();
}

function emptyInputLogin($username,$pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    else {
        $result =false;
    }
    return $result;
}

function loginUser($con,$username,$pwd){
    $uidExists = uidExists($con, $username, $username);

    if ($uidExists === false){
        header("Location: ../login-page.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("Location: ../login-page.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true){} {
        session_start();
        $_SESSION["user_id"] = $uidExists["user_id"];
        $_SESSION["userName"] = $uidExists["userName"];
        header("Location: ../index.php");
        exit();
    }
}

function get_user_info($con, $userid){
    $sql = "SELECT firstName, lastName, email, userName FROM `user` WHERE user_id =?";
    $stmt = mysqli_stmt_init($con);

    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt,'i',$userid);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);
    return empty($row)? false:$row;

}