<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let x=parseInt(prompt("Enter first number"));
        let y=parseInt(prompt("enter second number"));
        let z= parseInt(prompt("Enter a third number"));
        if(x>y && x> z){
            document.write(x+"is the greatest");
        }
        else if(y>x && y>z){
            document.write(y+"is the greatest");
        }
        else{
            document.write(z+"is the greatest");
        }
    </script>
</body>
</html>
