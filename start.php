<?php
session_start();
$servername = "localhost";
$username = "test";
$password = "test1234";
$dbname = "raspi";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>