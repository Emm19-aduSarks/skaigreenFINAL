<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "dbcredentials.php";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//POST
if (isset($_POST["submit"])){
$hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$name = $_POST["name"];
$email = $_POST["email"];

// Prepare and bind the statement
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashed_password);

// Set the parameters and execute

$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect the user to the dashboard page
header("Location: ../view/signUp.php");
// exit();
}

?>