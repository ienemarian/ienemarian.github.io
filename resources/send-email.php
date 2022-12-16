<?php

// Get the form data
$firstName = $_POST['First_Name'];
$lastName = $_POST['Last_Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// Set up the email
$to = "ienemarian80@gmail.com";
$subject = "Contact Form Submission";
$body = "Name: $firstName $lastName\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    // Email was sent successfully
    echo "Your message was sent successfully!";
} else {
    // There was an error sending the email
    echo "There was an error sending your message. Please try again later.";
}

?>