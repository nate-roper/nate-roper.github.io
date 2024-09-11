<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email destination (your email)
    $to = "nateroper@proton.me"; // Replace with your email address

    // Email subject and body
    $email_subject = "New message from: $name - $subject";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
      // Redirect to a thank you page or show success message
      echo "Message sent successfully!";
    } else {
      // Show an error message
      echo "There was a problem sending your message.";
    }
  }
?>