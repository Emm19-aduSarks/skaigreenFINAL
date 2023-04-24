<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../config.php";


// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the entered username and password
  $name = $_POST["name"];
  $password = $_POST["password"];

 
  // Query the skaiDBMS database for a matching username and hashed password
  $sql = "SELECT * FROM users WHERE name='$name'";
  $result = $conn->query($sql);

  // If a match is found, verify the hashed password and redirect to the dashboard page
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      $_SESSION['loggedin'] = true;
      header("Location: dashboardskaï.php");
      exit;
    } else {
      echo '<script>showAlert("Invalid username or password.");</script>';

    }
  } else {
    // If not, display an error message
    echo '<script>showAlert("Invalid username or password.");</script>';
  }
}



// Close the database connection
$conn->close();
?>

<!-- // Close the database connection
$conn->close();
?>
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="./view_css/loginstyle.css">
  <script>
    function validateForm() {
      var name = document.forms["loginForm"]["name"].value;
      var email = document.forms["loginForm"]["email"].value;
      var password = document.forms["loginForm"]["password"].value;

      // Validate name
      if (name == "") {
        alert("Please enter your name.");
        return false;
      }

      // Validate email
      if (email == "") {
        alert("Please enter your email.");
        return false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      // Validate password
      if (password == "") {
        alert("Please enter your password.");
        return false;
      } else if (}$/.test(password)) {
        alert("Password must contain at least 8 characters including at least 1 uppercase letter, 1 lowercase letter, and 1 number.");
        return false;
      }
    }

  function showAlert(message) {
  var modal = document.createElement('div');
  modal.classList.add('modal');
  modal.innerHTML = '<div class="modal-content"><p>' + message + '</p></div>';
  document.body.appendChild(modal);
}

  </script>
</head>
<body>
  <div class="login-box">
    <img src="./view_css/images/logomain.png" class="logoligi">
    <h2>Login</h2>
    <form name="loginForm" onsubmit="return validateForm()" method="POST" action="">
      <div class="user-box">
        <input type="text" name="name" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button class="SUB" type="submit">Submit</button>
        <a href="login.php"><p class="signup" id="signUp-link">Don't have an account? sign up here</p></a>
      </a>
    </form>
  </div>
</body>
</html>
