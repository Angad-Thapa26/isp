<?php
$servername = "localhost";
$username = "correct_username"; // replace with your MySQL username
$password = "correct_password"; // replace with your MySQL password
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

$isp = $_POST['isp'];
$rating = $_POST['rating'];

$sql = "INSERT INTO ratings (isp, rating) VALUES ('$isp', '$rating')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>