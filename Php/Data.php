<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost","root","","data");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  // Perform any necessary data validation here...
  if ($password !== $confirmPassword) {
    die("Password and Confirm Password do not match!");
  }
  // Prepare the SQL statement
  $sql = "INSERT INTO Cred (First_Name, Last_Name, Email, Password) VALUES (?, ?, ?, ?)";
  
  // Create a prepared statement
  $stmt = mysqli_prepare($conn, $sql);
  
  // Bind the parameters to the statement
  mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $password);

  // Execute the statement
  if (mysqli_stmt_execute($stmt)) {
      echo "Data inserted successfully.";
  } else {
      echo "Error: " . mysqli_stmt_error($stmt);
  }

  // Close the statement
  mysqli_stmt_close($stmt);

  // Close the database connection
  mysqli_close($conn);
}
?>