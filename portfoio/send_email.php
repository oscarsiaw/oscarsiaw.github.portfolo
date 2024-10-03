<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "annimoscar@gmail.com"; // Your email address
    $headers = "From: $name <$email>";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your message has been sent.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
    }
}

