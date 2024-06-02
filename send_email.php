<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient
    $to = "sabrina.arreola17@gmail.com";

    // Email subject
    $subject = "New Message from Contact Form";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>


