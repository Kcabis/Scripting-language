<!-- Wap to find a greatest number among 3 numbers -->
<!DOCTYPE html>
<html>
<head>
    <title>Find Greatest Number</title>
</head>
<body>
    <form method="post" action="">
        <label>Enter first number:</label>
        <input type="number" name="num1" required><br><br>
        
        <label>Enter second number:</label>
        <input type="number" name="num2" required><br><br>
        
        <label>Enter third number:</label>
        <input type="number" name="num3" required><br><br>
        
        <input type="submit" name="submit" value="Find Greatest">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Determine the greatest number
        if ($num1 >= $num2 && $num1 >= $num3) {
            echo "<h3>The greatest number is: $num1</h3>";
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo "<h3>The greatest number is: $num2</h3>";
        } else {
            echo "<h3>The greatest number is: $num3</h3>";
        }
    }
    ?>
</body>
</html>
