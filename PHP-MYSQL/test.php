<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "First_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO persons (firstname, lastname, adress)
VALUES ('John', 'Doe', 'Bocholt')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>