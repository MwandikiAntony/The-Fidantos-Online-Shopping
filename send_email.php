<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Your email address where the message will be sent
    $to = "your-email@example.com";  // Change this to your email address
    $subject = "New message from contact form";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: contact-form.php?success=true"); // Redirect to form with success
    } else {
        echo "There was an error sending the message.";
    }
}
?>
