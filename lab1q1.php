<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let x = parseInt(prompt("Please enter a number"));
        let y = parseInt(prompt("Please enter a second number"));

        if (x > y) {
            document.write(x + " is the greatest");
        } 
        else if (x === y) {
            document.write("Both are equal");
        } 
        else {
            document.write(y + " is the greatest");
        }
    </script>
</body>
</html>
