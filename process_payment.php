<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Payment Successful!</h2>";
    echo "<p>Thank you for your purchase.</p>";
} else {
    header("Location: index.php");
}
?>
