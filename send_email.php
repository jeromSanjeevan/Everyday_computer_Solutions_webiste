<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up email parameters
  $to = 'jerom@ecsolutionsltd.co.uk'; // Replace with the recipient's email address
  $subject = 'New Email from Your Website';
  $headers = "inquery@ecsolutionsltd.co.uk";;

  // Send the email
  if (mail($to, $subject,$email, $message)) {
    echo 'Email sent successfully.';
  } else {
    echo 'Failed to send email.';
  }
}

?>