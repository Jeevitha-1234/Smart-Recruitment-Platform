<?php
session_start();
include "connection.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];  // Fixed variable name
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpass'];
    $role = $_POST['role'];

    // Check if the email is already in use
    $check = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($check);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        echo "<div class='message'><p>This email is used, Try another One Please!</p></div><br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
    } else {
        if ($pass === $cpass) {
            // Hash the password
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            // Insert the new user into the database
            $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $username, $email, $hashed_password, $role); // Use hashed password variable
            $result = $stmt->execute();

            if ($result) {
                echo "<div class='message'><p>You are registered successfully!</p></div><br>";
                echo "<a href='login.php'><button class='btn'>Login Now</button></a>";
            } else {
                echo "<div class='message'><p>Registration failed, please try again.</p></div><br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
            }
        } else {
            echo "<div class='message'><p>Passwords do not match.</p></div><br>";
            echo "<a href='signup.php'><button class='btn'>Go Back</button></a>";
        }
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="form-box box">
            <header>Sign Up</header>
            <hr>

            <form action="#" method="POST">
                <div class="form-box">

                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username" name="username" required>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="email" placeholder="Email Address" name="email" required>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-lock icon"></i>
                        <input class="input-field password" type="password" placeholder="Password" name="password" required>
                        <i class="fa fa-eye icon toggle"></i>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-lock icon"></i>
                        <input class="input-field" type="password" placeholder="Confirm Password" name="cpass" required>
                        <i class="fa fa-eye icon"></i>
                    </div>

                    <!-- Role Selection Dropdown -->
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <select class="input-field" name="role" required>
                            <option value="" disabled selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="candidate">Candidate</option>
                        </select>
                    </div>

                    <input type="submit" name="register" id="submit" value="Signup" class="btn">
                        Already have an account? <a href="login.php">Signin Now</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const toggle = document.querySelector(".toggle"),
            input = document.querySelector(".password");

        toggle.addEventListener("click", () => {
            if (input.type === "password") {
                input.type = "text";
                toggle.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                input.type = "password";
                toggle.classList.replace("fa-eye", "fa-eye-slash");
            }
        });
    </script>
</body>

</html>
<?php
}
?>
