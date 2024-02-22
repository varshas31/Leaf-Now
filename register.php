<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];

    // Your database code to save user information here

    // Send email
    $to = $email;
    $subject = "Registration Successful";
    $message = "Hello $firstname,\n\nThank you for registering on our website!";
    $headers = "From: abc509137.com"; // Replace with your email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Registration successful. An email has been sent to $email.";
    } else {
        echo "Registration successful, but email could not be sent.";
    }
}
?>
