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
    <form id="loginForm" action="../Php/Data.php" method="POST">
      <input type="text" name="firstName" placeholder="First Name" required>
      <input type="text" name="lastName" placeholder="Last Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
      <button type="submit">Signup</button>
    </form>
  </div>
  <script src="../JS/Signup.js"></script>
</body>
</html>
