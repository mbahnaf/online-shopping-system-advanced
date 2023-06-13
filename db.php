<?php

$servername = "ecommerce-db-instance.crkfp60kehfn.ap-northeast-2.rds.amazonaws.com";
$username = "root";
$password = "qwerty12";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
