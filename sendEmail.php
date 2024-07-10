<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate and sanitize data (for production use, implement proper validation and sanitation)

// Set up email parameters
$to = 'faithnjoroge234@yahoo.com';
$subject = 'RSVP Form Submission';
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

// Set headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mailSent = mail($to, $subject, $body, $headers);

// Send JSON response to front-end
if ($mailSent) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>