<?php
$cookie = $_COOKIE['LoggedIn'];
$salt = "HJGgcéè!'TDU($64µ8L.0";
$frags = explode(",", $cookie);

if($frags[1] !== md5($frags[0].$salt)) {
    header('Location: login.php');
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
   <p>Welkom, je bent ingelogd</p> 
   <a href="login.php">log out</a>
</body>
</html>