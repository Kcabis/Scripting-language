<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Greatest Number</title>
</head>
<body>
    <h1>Find the Greatest Number Among 10 Numbers</h1>
    <form method="post">
        <label for="numbers">Enter 10 numbers (separated by commas):</label>
        <input type="text" id="numbers" name="numbers" required>
        <button type="submit">Find Greatest</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST['numbers'];
        $numbers = array_map('trim', explode(',', $input)); // Split input into an array and trim spaces

        // Validate input
        $valid = true;
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                $valid = false;
                break;
            }
        }

        if ($valid && count($numbers) === 10) {
            $greatest = max($numbers);
            echo "<p>The greatest number among the entered numbers is: $greatest</p>";
        } else {
            echo "<p>Invalid input. Please enter exactly 10 valid numbers separated by commas.</p>";
        }
    }
    ?>
</body>
</html>
