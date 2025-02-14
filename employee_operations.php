<?php
//lab9
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company"; // Use the database name you created earlier

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (first_name, last_name, age, salary) 
            VALUES ('$first_name', '$last_name', $age, $salary)";

    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch and display data from the database
$sql = "SELECT id, first_name, last_name, age, salary FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Employee Records:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['salary']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Operations</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required><br><br>

        <button type="submit">Add Employee</button>
    </form>
</body>
</html>
