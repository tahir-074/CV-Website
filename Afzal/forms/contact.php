<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'afzalmmohamedd@gmail.com';

    // Set the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Build the email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Display success message
    echo "success";
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: ../index.html");
    exit;
}
?>
