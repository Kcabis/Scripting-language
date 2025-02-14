<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
</head>
<body>
    <h1>Check if a Number is Positive, Negative, or Zero</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST['number'];

        // Validate input
        if (is_numeric($input)) {
            $number = (float)$input;

            // Check the number
            if ($number > 0) {
                echo "<p>$number is a positive number.</p>";
            } elseif ($number < 0) {
                echo "<p>$number is a negative number.</p>";
            } else {
                echo "<p>$number is zero.</p>";
            }
        } else {
            echo "<p>Invalid input. Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
