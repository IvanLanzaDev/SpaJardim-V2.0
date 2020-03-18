<?php
//NEW SESSION
session_start();
$email_session = $_SESSION["email_users"];
$password_session = $_SESSION["password_users"];
if(!isset($email_session) || !isset($password_session)){
    header("Location: login.php");
    exit;
    session_destroy();
}
?>