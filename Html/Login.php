<?php
session_start();

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
        header('Location: http://localhost/cw1-stranger-hk/html/main.php'); // Redirect to authorized page
        exit;
    }
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = md5($password);
    // Prepare and execute SQL query
    $sql = "SELECT * FROM cred WHERE email = '$email' AND password = '$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    // Check if a matching record is found
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['loggedIn'] = true;
        // Redirect to a new page upon successful login
        header("Location: http://localhost/cw1-stranger-hk/html/main.php");
        exit();
    } else {
        $errorMessage = "Invalid email or password. Please try again.";
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="../CSS/Login.css">
</head>
<body>
    <nav>
        <div class="navbar-container">
        <h1 class="logo">Tour and Travel Company</h1>
        <ul class="nav-links">
            <li><a href="Home.html">Home</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="http://localhost/cw1-stranger-hk/html/Signup.php">Signup</a></li>
            <li><a href="http://localhost/cw1-stranger-hk/html/Login.php">Login</a></li>
        </ul>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </nav>
    <div class="container">
        <h2>Login Form</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($errorMessage)) { ?>
            <p><?php echo $errorMessage; ?></p>
        <?php } ?>
    </div>
</body>
</html>
