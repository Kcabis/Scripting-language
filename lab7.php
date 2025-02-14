<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-Side Form Validation</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>Student Details Form</h1>
    <form id="studentForm">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name">
        <span class="error" id="firstNameError"></span><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name">
        <span class="error" id="lastNameError"></span><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <span class="error" id="addressError"></span><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span class="error" id="emailError"></span><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <span class="error" id="genderError"></span><br><br>

        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('studentForm').addEventListener('submit', function(event) {
            let isValid = true;

            // Clear previous error messages
            document.querySelectorAll('.error').forEach(error => error.textContent = '');

            // Validate first name
            const firstName = document.getElementById('first_name').value.trim();
            if (firstName === '') {
                document.getElementById('firstNameError').textContent = 'First name is required.';
                isValid = false;
            }

            // Validate last name
            const lastName = document.getElementById('last_name').value.trim();
            if (lastName === '') {
                document.getElementById('lastNameError').textContent = 'Last name is required.';
                isValid = false;
            }

            // Validate address
            const address = document.getElementById('address').value.trim();
            if (address === '') {
                document.getElementById('addressError').textContent = 'Address is required.';
                isValid = false;
            }

            // Validate email
            const email = document.getElementById('email').value.trim();
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (email === '') {
                document.getElementById('emailError').textContent = 'Email is required.';
                isValid = false;
            } else if (!emailPattern.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address.';
                isValid = false;
            }

            // Validate gender
            const gender = document.getElementById('gender').value.trim();
            if (gender === '') {
                document.getElementById('genderError').textContent = 'Gender is required.';
                isValid = false;
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
            else{
                alert('Form submitted sucessfuly');
            }
        });
    </script>
</body>
</html>
