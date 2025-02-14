<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greatest Number Finder</title>
</head>
<body>
    <script>
        function myFunction(x, y, z) {
            if (x === y && y === z) {
                document.write("All numbers are equal.");
            } 
            else if (x >= y && x >= z) {
                document.write(x + " is the greatest.");
            } 
            else if (y >= z && y >= x) {
                document.write(y + " is the greatest.");
            } 
            else {
                document.write(z + " is the greatest.");
            }
        }

        let x = parseInt(prompt("Enter the first number"));
        let y = parseInt(prompt("Enter the second number"));
        let z = parseInt(prompt("Enter the third number")); // Fixed the incorrect `let z-=` issue

        myFunction(x, y, z);
    </script>
</body>
</html>
