<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "data";

// Create connection
$conn = mysqli_connect("localhost","root","","data");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $destination = $_POST["destination"];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO booking (first_name, last_name, email, phone, destination)
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$destination')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/cw1-stranger-hk/html/main.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
