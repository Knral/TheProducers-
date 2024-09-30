<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = 'kumarz@stpaulsschool.org.uk'; // Replace with your email address
    $subject = 'New Contact Message from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Sending the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Message could not be sent. Please try again later.';
    }
} else {
    echo 'Invalid request.';
}
?>
