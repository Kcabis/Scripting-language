<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number Check</title>
</head>
<body>
    <h1>Check if a Number is a Palindrome</h1>
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
            // Remove any negative sign for palindrome check
            $original = strval(abs($input));
            $reversed = strrev($original);

            if ($original === $reversed) {
                echo "<p>$input is a palindrome number.</p>";
            } else {
                echo "<p>$input is not a palindrome number.</p>";
            }
        } else {
            echo "<p>Invalid input. Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
