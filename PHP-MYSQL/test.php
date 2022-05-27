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

$sql = "INSERT INTO persons (firstname, lastname, city)
VALUES ('Ferre', 'Creemers', 'Bocholt')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT firstname, lastname, city FROM persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo " - firstname: " . $row["firstname"]. " - lastname: " . $row["lastname"]. " - city" . $row["city"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close(); 
?>