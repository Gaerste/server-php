<?php
session_start();
$dbEmail = "gaerste@gmail.com";
$dbPass = "12345678";
$dbPassEnc = password_hash($dbPass, PASSWORD_DEFAULT);

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

if ($dbEmail === $userEmail && password_verify($userPassword, $dbPassEnc)) {
    session_start();
    $_SESSION["email"] = $userEmail;
    header("Location:panel.php");
} else {
    header("Location:index.php");
}
