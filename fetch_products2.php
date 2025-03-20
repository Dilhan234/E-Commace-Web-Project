<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "e-commace web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$sql = "SELECT * FROM products2";
$result = $conn->query($sql);

$products2 = [];

while ($row = $result->fetch_assoc()) {
    $products2[] = $row;
}

echo json_encode($products2);
$conn->close();
?>
