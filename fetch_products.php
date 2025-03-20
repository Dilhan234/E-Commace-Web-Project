<?php
include 'config1.php';

$sql = "SELECT * FROM products1";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products1[] = $row;
    }
}

echo json_encode($products1);
$conn->close();
?>
