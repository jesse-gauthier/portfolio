<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the JSON input
    $input = json_decode(file_get_contents('php://input'), true);

    // Sanitize and validate input fields
    $name = htmlspecialchars(trim($input["name"]));
    $email = htmlspecialchars(trim($input["email"]));
    $message = htmlspecialchars(trim($input["message"]));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Set email parameters
    $to = "jessegauthier2@gmail.com";  // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
