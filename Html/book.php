<?php
  include "../Php/booking.php";
  session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header('Location: login.php'); // Redirect to login page
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking Form</title>
  <link rel="stylesheet" type="text/css" href="../Css/book.css">
</head>
<body>
<header>
    <h1>Tour and Travel Company - Nepal</h1>
    <nav>
      <ul>
        <li><a href="http://localhost/cw1-stranger-hk/html/main.php">Home</a></li>
        <li><a href="http://localhost/cw1-stranger-hk/html/book.php">Booking</a></li>
        <li><a href="http://localhost/cw1-stranger-hk/Php/logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <h1>Booking Form</h1>
  <form id="bookingForm" action="../Php/booking.php" method="POST">
    <div class="form-group">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
    </div>
    <div class="form-group">
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="destination">Destination:</label>
      <select id="destination" name="destination" required>
        <option value="">Select Destination</option>
        <option value="Everest Base Camp">Everest Base Camp</option>
        <option value="Annapurna Circuit">Annapurna Circuit</option>
        <option value="Langtang Valley">Langtang Valley</option>
        <option value="Upper Mustang">Upper Mustang</option>
        <option value="Kathmandu">Kathmandu</option>
        <option value="Pokhara">Pokhara</option>
        <option value="Chitwan">Chitwan</option>
        <option value="Lumbini">Lumbini</option>
        <option value="Nagarkot">Nagarkot</option>
        <option value="Manaslu Circuit">Manaslu Circuit</option>
        
      </select>
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
