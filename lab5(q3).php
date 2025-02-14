<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a Number</title>
</head>
<body>
    <h1>Reverse a Number</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Reverse</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST['number'];

        // Validate input
        if (is_numeric($input)) {
            // Reverse the number
            $reversed = strrev($input);

            // Maintain the negative sign if present
            if ($input < 0) {
                $reversed = '-' . ltrim($reversed, '-');
            }

            echo "<p>The reversed number is: $reversed</p>";
        } else {
            echo "<p>Invalid input. Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
