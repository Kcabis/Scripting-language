<?php
// Check if data is sent via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $age = isset($_POST['age']) ? (int)$_POST['age'] : 0;

    if (!empty($name) && $age > 0) {
        // Simulate saving to a database or processing
        echo "Data received successfully! Name: $name, Age: $age.";
    } else {
        echo "Invalid data received.";
    }
} else {
    echo "No data received.";
}
