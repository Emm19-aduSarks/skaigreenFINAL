<?php
$hostname = "us-cdbr-east-06.cleardb.net"; 
$username = "b47e55b8393005"; 
$password = "e822552f"; 
$dbname = "heroku_6b72be806250988"; 

$connect = mysqli_connect($hostname, $username, $password, $dbname) or die("Database Connection error");
  
?>
