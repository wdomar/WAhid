<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create the email message
$to = 'support@tradinsights.buzz';
$subject = 'New message from ' . $name;
$body = "Name: $name\nEmail: $email\nMessage:\n$message";

// Send the email
$headers = 'From: ' . $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $body, $headers);

// Redirect the user back to the contact page with a success message
header('Location: /contact.php?success=1');
exit;
?>
