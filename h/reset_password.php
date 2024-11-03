<?php
if (isset($_POST['submit'])) {
    require 'config.php'; // Include database and SMTP configurations

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique reset token and expiration time
        $token = bin2hex(random_bytes(32));
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); // 1 hour expiry

        // Store the token and expiry in the database
        $update_stmt = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $update_stmt->bind_param("sss", $token, $expiry, $email);
        $update_stmt->execute();

        // Send the password reset email
        $reset_link = "https://yourdomain.com/reset_password.php?token=" . $token;
        $subject = "Password Recovery";
        $message = "Click the following link to reset your password: " . $reset_link;
        $headers = "From: no-reply@yourdomain.com\r\n";

        if (mail($email, $subject, $message, $headers)) {
            echo "A password recovery email has been sent.";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        echo "No account found with that email.";
    }
}
?>
