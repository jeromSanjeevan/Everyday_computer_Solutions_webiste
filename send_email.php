<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set up the email headers
  $to = 'jerom6301@gmail.com.com'; // Replace with your email address
  $subject = 'New contact form submission';
  $headers = "From: $name <$email>" . "\r\n";
  
  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you! Your message has been sent.';
  } else {
    echo 'Oops! Something went wrong. Please try again.';
  }
}
?>
