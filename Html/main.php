<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header('Location: login.php'); // Redirect to login page
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travel Company - Nepal</title>
    <link rel="stylesheet" href="../CSS/main.css">
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

  <section id="home">
    <h2>Welcome to Nepal</h2>
    <p>Discover the beauty of the Himalayas</p>
  </section>

  <section id="tours" class="tour-details">
    <h2>Popular Tours</h2>
    <div class="tour-info">
      <h3>Everest Base Camp Trek</h3>
      <p>Duration: 15 days</p>
      <p>Difficulty: Moderate</p>
      <p>Price: $2000</p>
      <p>Highlights:</p>
      <ul class="non">
        <li>Breathtaking views of the Himalayas</li>
        <li>Explore Sherpa culture and traditions</li>
        <li>Experience the thrill of reaching Everest Base Camp</li>
      </ul>
    </div>

    <div class="tour-info">
      <h3>Annapurna Base Camp Trek</h3>
      <p>Duration: 12 days</p>
      <p>Difficulty: Moderate</p>
      <p>Price: $1800</p>
      <p>Highlights:</p>
      <ul class="non">
        <li>Panoramic views of the Annapurna mountain range</li>
        <li>Experience diverse landscapes and local culture</li>
        <li>Visit traditional Nepalese villages</li>
      </ul>
    </div>

  </section>

  <section id="destinations">
    <h2>Popular Destinations</h2>
    <div class="destination">
      <img src="../images/kathmandu.jpg" alt="Kathmandu">
      <div>
        <h3>Kathmandu</h3>
        <p>Explore the capital city and its ancient temples</p>
      </div>
    </div>
    <div class="destination">
      <img src="../images/pokhara.jpg" alt="Pokhara">
      <div>
        <h3>Pokhara</h3>
        <p>Relax by the beautiful lakes and enjoy stunning mountain views</p>
      </div>
    </div>
    <div class="destination">
      <img src="../images/chitwan.jpg" alt="Chitwan">
      <div>
        <h3>Chitwan</h3>
        <p>Discover the wildlife in Chitwan National Park</p>
      </div>
    </div>
    <div class="destination">
      <img src="../images/lumbini.jpg" alt="Lumbini">
      <h3>Lumbini</h3>
      <p>Visit the birthplace of Lord Buddha</p>
    </div>
    <div class="destination">
      <img src="../images/nagarkot.jpg" alt="Nagarkot">
      <h3>Nagarkot</h3>
      <p>Witness breathtaking sunrise and sunset views over the Himalayas</p>
    </div>
    <div class="destination">
      <img src="../images/bhaktapur.jpg" alt="Bhaktapur">
      <h3>Bhaktapur</h3>
      <p>Experience the medieval city with its rich culture and heritage</p>
    </div>
    <div class="destination">
      <img src="../images/everest.jpg" alt="Everest">
      <h3>Everest Base Camp</h3>
      <p>Trek to the base camp of the world's highest peak, Mount Everest</p>
    </div>
    <div class="destination">
      <img src="../images/manaslu.jpg" alt="Manaslu">
      <h3>Manaslu Circuit</h3>
      <p>Embark on a challenging trek around Mount Manaslu in the remote Himalayas</p>
    </div>
    <div class="destination">
      <img src="../images/langtang.jpg" alt="Langtang">
      <h3>Langtang Valley</h3>
      <p>Explore the beautiful Langtang region with its diverse landscapes and cultures</p>
    </div>
    <div class="destination">
      <img src="../images/annapurna.jpg" alt="Annapurna">
      <h3>Annapurna Circuit</h3>
      <p>Trek around the stunning Annapurna massif and experience breathtaking views</p>
    </div>
    <div class="destination">
      <img src="../images/mustang.jpg" alt="Mustang">
      <h3>Upper Mustang</h3>
      <p>Discover the ancient kingdom of Mustang and its unique Tibetan culture</p>
    </div>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p>Learn about our company and our commitment to provide memorable travel experiences.</p>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <p>Get in touch with us for inquiries and bookings.</p>
    <p>Name: Srijan Dhakal</p>
    <p>Phone: +977 9818999207</p>
    <p>Email: dhakalsrijan59@gmail.com</p>
    <p>Facebook: <a href="https://www.facebook.com/Amrish059">facebook.com/Amrish059</a></p>
  </section>
</body>
</html>
