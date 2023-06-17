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
  $cpassword = $_POST['cpassword'];

  // Perform any necessary data validation here...

  // Prepare the SQL statement
  $sql = "INSERT INTO contact (First_Name, Last_Name, Email, Password, Cpassword) VALUES (?, ?, ?, ?, ?)";
  
  // Create a prepared statement
  $stmt = mysqli_prepare($conn, $sql);
  
  // Bind the parameters to the statement
  mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $password, $cpassword);

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