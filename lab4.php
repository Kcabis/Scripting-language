<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Division</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #myDiv {
            width: 300px;
            height: 150px;
            background-color: lightblue;
            text-align: center;
            line-height: 150px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <button id="toggleBtn">Show/Hide Division</button>
    <div id="myDiv">Hello there Abiskar here
    </div>
    
    <script>
        $(document).ready(function() {
            $("#toggleBtn").click(function() {
                $("#myDiv").toggle();
            });
        });
    </script>
</body>
</html>
