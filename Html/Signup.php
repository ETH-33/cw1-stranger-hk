<?php
  include "../Php/Data.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Form</title>
  <link rel="stylesheet" href="../CSS/Signup.css">
  <script src="../JS/Signup.js"></script>
</head>
<body>
  <nav>
    <div class="navbar-container">
      <h1 class="logo">Tour and Travel Company</h1>
      <ul class="nav-links">
        <li><a href="Home.html">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="Signup.html">Signup</a></li>
        <li><a href="#">Login</a></li>
      </ul>
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>
<div class="container">
    <h2>Signup Form</h2>
    <form id="signupForm" action="../Php/Data.php" onsubmit="submitForm(event)" method="POST" novalidate>
  <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
  <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
  <input type="email" name="email" id="email" placeholder="Email" required>
  <input type="password" name="password" id="password" placeholder="Password" required>
  <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
  <button type="submit">Signup</button>
</form>

<div id="flashMessage" class="flash-message"></div>



  </div>
</body>
</html>
