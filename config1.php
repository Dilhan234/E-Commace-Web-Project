<?php
$host = "localhost";  // Change as needed
$user = "root";       // Database username
$password = "";       // Database password
$database = "e-commace web";   // Your database name

$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
