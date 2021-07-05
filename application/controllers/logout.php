<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['login']);
session_destroy();
header("Location: login.php");

$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
//menghilangkan cookies yang telah didaftar
setcookie("username", "", time()-3600);
setcookie("password", "", time()-3600);
header("location: login.php");
?>