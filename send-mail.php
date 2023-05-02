<?php
// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get the form fields and trim whitespace
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);
  
  // Set the recipient email address
  $to = "onyedikachionwuchekwa@yahoo.com";
  
  // Set the email subject
  $subject = "New message from $name";
  
  // Set the email message body
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  
  // Set the email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully, redirect back to the contact page with a success message
    header("Location: contact.php?status=success");
  } else {
    // Email failed to send, redirect back to the contact page with an error message
    header("Location: contact.php?status=error");
  }
  
}
?>
