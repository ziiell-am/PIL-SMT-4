<?php

$user = $_COOKIE['user'];
$pass = $_COOKIE['pass'];

setcookie("user", "", time()-3600);
setcookie("pass", "", time()-3600);

header("location:login.php");
 
?>