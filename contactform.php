<?php

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Send email
$to = 'adwaithkannanpkda@gmail.com';
$subject = 'Contact form submission';
$message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
$headers = 'From: test@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Error sending email.';
}
