<?php

$servername = "3.208.161.114";
$username = "root";
$password = "Vince9061!";
$db = "store_db";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>