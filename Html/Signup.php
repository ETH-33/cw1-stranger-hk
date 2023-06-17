<?php
  include "../Php/Data.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Form</title>
  <link rel="stylesheet" href="../CSS/Signup.css">
</head>
<body>
  <div class="container">
    <h2>Signup Form</h2>
    <form id="loginForm" onsubmit="submitForm(event)">
      <input type="text" id="firstName" placeholder="First Name" name="firstName" required>
      <input type="text" id="lastName" placeholder="Last Name" name="lastName" required>
      <input type="email" id="email" placeholder="Email" name="email" required>
      <input type="password" id="password" placeholder="Password" name="password" required>
      <input type="password" id="confirmPassword" placeholder="Confirm Password" name="cpassword" required>
      <button type="submit" name="submit">Signup</button>
    </form>
  </div>
  <script src="../JS/Signup.js"></script>
</body>
</html>
