<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .recovery-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        .recovery-container h2 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group .error {
            color: red;
            font-size: 0.9em;
        }
        .form-group a {
            color: #007bff;
            text-decoration: none;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="recovery-container">
        <h2>Password Recovery</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter your registered email">
            <div id="email-error" class="error"></div>
        </div>
        <button class="submit-button" onclick="submitEmail()">Submit</button>
        <div class="form-group">
            <a href="reset password.html">Reset password</a>
        </div>
        <div class="form-group">
            <a href="login.php">Back to Login</a>
            
        </div>
    </div>

    <script>
        function submitEmail() {
            // Clear previous error messages
            document.getElementById('email-error').textContent = '';

            // Get email input value
            const email = document.getElementById('email').value.trim();

            let isValid = true;

            // Validate email
            if (!email) {
                document.getElementById('email-error').textContent = 'Email is required.';
                isValid = false;
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                document.getElementById('email-error').textContent = 'Invalid email format.';
                isValid = false;
            }

            // If validation passes, simulate email submission
            if (isValid) {
                // In a real application, you would send the email to the server for processing here
                // For example:
                // fetch('/password-recovery', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify({ email })
                // }).then(response => response.json()).then(data => {
                //     if (data.success) {
                //         alert('Password recovery email sent!');
                //     } else {
                //         document.getElementById('email-error').textContent = data.message;
                //     }
                // });

                // For this demo, assume success and provide feedback
                alert('Password recovery email sent!');
                // Optionally, redirect to another page or keep the user on the same page
            }
        }
    </script>
</body>
</html>