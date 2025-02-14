<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Window Control</title>
</head>
<body>
    <p><button onclick="openWin()">Open Window</button></p>
    <p><button onclick="closeWin()">Close Window</button></p>
    <div id="demo"></div>

    <script>
        let myWindow;

        function openWin() {
            myWindow = window.open("", "myWindow", "width=400,height=300");
        }

        function closeWin() {
            if (myWindow) {
                myWindow.close();
                myWindow = null; // Reset variable after closing
            }
        }
    </script>
</body>
</html>
