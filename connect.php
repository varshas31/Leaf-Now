<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain-text password, not recommended
    $number = $_POST['number'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    }

    // Check if email already exists in the database
    $emailCheckQuery = "SELECT email FROM registration WHERE email='$email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);
    
    if (mysqli_num_rows($emailCheckResult) > 0) {
        echo '<script>alert("Email already exists. Please use a different email.")</script>';
    } else {
        // Insert user data into the database (password stored in plain text)
        $query = "INSERT INTO registration (firstName, lastName, gender, email, password, number) VALUES ('$firstName', '$lastName','$gender','$email', '$password','$number')";
        if (mysqli_query($conn, $query)) {
            // Registration successful
            echo '<script>alert("Registration successful!")</script>';
            
            // Send a confirmation email
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'leafnowofficial@gmail.com'; // Replace with your SMTP username
            $mail->Password = 'dsksqgvzcdhzyknq'; // Replace with your SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('leafnowofficial@gmail.com', 'LeafNow');
            $mail->addAddress($email, $firstName . ' ' . $lastName);
            $mail->isHTML(true);
            $mail->Subject = 'Registration Confirmation';
            $mail->Body = 'Hello ' . $firstName . '! Thank you for registering with us. Your registration was successful.';
            
            // Enable SMTP debugging
            $mail->SMTPDebug = 2; // Enable verbose debugging
            $mail->Debugoutput = 'html'; // Display debug output as HTML

            if ($mail->send()) {
                echo '<script>alert("Registration successful! Confirmation email sent.")</script>';
            } else {
                echo '<script>alert("Registration successful! Confirmation email could not be sent. Error: ' . $mail->ErrorInfo . '")</script>';
            }
            
            header("Location: login.html"); // Redirect to the login.html page
            exit; // Terminate the current script to ensure the redirection takes effect
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}

?>