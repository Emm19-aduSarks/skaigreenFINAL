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

  </script>
</head>
<body>
  <div class="login-box">
    <img src="./view_css/images/logomain.png" class="logoligi">
    <h2>Login</h2>
    <form name="loginForm" onsubmit="return validateForm()" action="dashboardskaï.php">
      <div class="user-box">
        <input type="text" name="name" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="email" name="email" required="">
        <label>Email</label>
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
      </a>
    </form>
  </div>
</body>
</html>
