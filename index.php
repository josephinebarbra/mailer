<?php
// Recipient
$to = 'adamsbekky9@gmail.com'

// subject
$subject = 'this is our test email';

//message
$message = '<h1>Hi there</h1><p>Thanks for testing!</p>';

// Headers
$headers = "From: The sender Name <sender@johnmorrisonline.com>\r\n";
$headers .= "Reply-to: nicoleanderson863@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
mail($to, $subject, $message, $headers);