<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    // Prepare SQL query to insert data
    $sql = "INSERT INTO employees (first_name, last_name, address, salary, gender, age) 
            VALUES ('$first_name', '$last_name', '$address', $salary, '$gender', $age)";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Employee details added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
