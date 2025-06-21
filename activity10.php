<?php
// Email details
$to = "recipient@example.com";
$subject = "Test Email from Server";
$message = "This is a test email sent from the server.";
$headers = "From: sender@example.com";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>