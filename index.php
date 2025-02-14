<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Synchronization Example</title>
    <script>
        // Function to send data to the server
        function syncData() {
            const name = document.getElementById('name').value;
            const age = document.getElementById('age').value;

            // Validate input
            if (!name || !age) {
                alert('Please fill in all fields.');
                return;
            }

            // Create an AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'sync.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Define what happens on successful data submission
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById('response').innerHTML = xhr.responseText;
                } else {
                    document.getElementById('response').innerHTML = 'Error synchronizing data.';
                }
            };

            // Send data to the server
            const data = `name=${encodeURIComponent(name)}&age=${encodeURIComponent(age)}`;
            xhr.send(data);
        }
    </script>
</head>
<body>
    <h1>Synchronize Data Between JS and PHP</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" required><br><br>

    <button onclick="syncData()">Submit</button>

    <h2>Response from Server:</h2>
    <div id="response" style="color: green; font-weight: bold;"></div>
</body>
</html>
