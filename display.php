<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <p><strong>First Name:</strong> <?php echo htmlspecialchars($_POST['first_name']); ?></p>
    <p><strong>Last Name:</strong> <?php echo htmlspecialchars($_POST['last_name']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($_POST['address']); ?></p>
    <p><strong>Age:</strong> <?php echo htmlspecialchars($_POST['age']); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
    <p><strong>Roll Number:</strong> <?php echo htmlspecialchars($_POST['roll_number']); ?></p>
</body>
</html>
