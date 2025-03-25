<?php
// Allow cross-origin requests if needed
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo "Method not allowed. Please use POST request.";
    exit();
}

// Get the JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Check if input is valid JSON
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo "Invalid JSON data.";
    exit();
}

// Validate required fields
$required_fields = ['name', 'email', 'phone', 'message', 'subject'];
foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        http_response_code(400);
        echo "Missing required field: $field";
        exit();
    }
}

// Validate email
if (!filter_var($input["email"], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Invalid email format.";
    exit();
}

// Sanitize inputs
$name = htmlspecialchars(trim($input["name"]));
$email = htmlspecialchars(trim($input["email"]));
$company = isset($input["company"]) ? htmlspecialchars(trim($input["company"])) : "Not provided";
$title = isset($input["title"]) ? htmlspecialchars(trim($input["title"])) : "Not provided";
$phone = htmlspecialchars(trim($input["phone"]));
$subject = htmlspecialchars(trim($input["subject"]));
$message = htmlspecialchars(trim($input["message"]));

// Set recipient email
$to = "jessegauthier2@gmail.com";

// Set email subject
$email_subject = "Contact Form: $subject from $name";

// Build email body
$email_body = "
<html>
<head>
  <title>New Contact Form Submission</title>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
    h1 { color: #2b3d4f; border-bottom: 2px solid #e98307; padding-bottom: 10px; }
    .info { margin-bottom: 20px; }
    .label { font-weight: bold; }
    .message { background-color: #f8f8f8; padding: 15px; border-left: 4px solid #2b3d4f; margin-top: 20px; }
  </style>
</head>
<body>
  <div class='container'>
    <h1>New Contact Form Submission</h1>
    <div class='info'>
      <p><span class='label'>Name:</span> $name</p>
      <p><span class='label'>Email:</span> $email</p>
      <p><span class='label'>Phone:</span> $phone</p>
      <p><span class='label'>Company:</span> $company</p>
      <p><span class='label'>Title:</span> $title</p>
      <p><span class='label'>Subject:</span> $subject</p>
    </div>
    <div class='message'>
      <p><span class='label'>Message:</span></p>
      <p>" . nl2br($message) . "</p>
    </div>
  </div>
</body>
</html>
";

// Set plain text alternative for email clients that don't support HTML
$plain_text = "
New Contact Form Submission

Name: $name
Email: $email
Phone: $phone
Company: $company
Title: $title
Subject: $subject

Message:
$message
";

// Set email headers
$headers = [
    "From: $email",
    "Reply-To: $email",
    "MIME-Version: 1.0",
    "Content-Type: text/html; charset=UTF-8"
];

// Try to send the email
try {
    // Log attempt (optional)
    error_log("Sending email to $to from $email");

    // Send email
    $mail_sent = mail($to, $email_subject, $email_body, implode("\r\n", $headers));

    if ($mail_sent) {
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "Thank you for your message! I'll get back to you soon."]);
    } else {
        // Log error (optional)
        error_log("Failed to send email from contact form");
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to send message. Please try again later."]);
    }
} catch (Exception $e) {
    // Log exception (optional)
    error_log("Exception when sending email: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "An error occurred while sending your message."]);
}