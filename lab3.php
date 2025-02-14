<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Arithmetic Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .calculator {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input, select, button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="calculator">
        <h2>Arithmetic Calculator</h2>
        <form id="calcForm">
            <input type="number" id="num1" placeholder="Enter first number" required>
            <select id="operation">
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
            <input type="number" id="num2" placeholder="Enter second number" required>
            <br>
            <button type="button" onclick="calculate()">Calculate</button>
            <br>
            <input type="text" id="result" placeholder="Result" readonly>
        </form>
    </div>

    <script>
        function calculate() {
            let num1 = parseFloat(document.getElementById('num1').value);
            let num2 = parseFloat(document.getElementById('num2').value);
            let operation = document.getElementById('operation').value;
            let result;

            if (isNaN(num1) || isNaN(num2)) {
                alert("Please enter valid numbers");
                return;
            }

            switch (operation) {
                case "add":
                    result = num1 + num2;
                    break;
                case "subtract":
                    result = num1 - num2;
                    break;
                case "multiply":
                    result = num1 * num2;
                    break;
                case "divide":
                    if (num2 === 0) {
                        alert("Cannot divide by zero");
                        return;
                    }
                    result = num1 / num2;
                    break;
                default:
                    result = "Invalid Operation";
            }

            document.getElementById('result').value = result;
        }
    </script>

</body>
</html>
