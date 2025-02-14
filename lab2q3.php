<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Box</title>
</head>
<body>
    <script>
        function confirmBox() {
            let response = confirm("Do you want to proceed?");
            if (response) {
                document.write("You clicked OK. Proceeding...");
            } else {
                document.write("You clicked Cancel. Action aborted.");
            }
        }

        confirmBox();
    </script>
</body>
</html>
