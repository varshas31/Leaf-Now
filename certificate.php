<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Include mPDF library
require 'vendor/autoload.php'; // Replace with the actual path to the mPDF autoload.php.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST['name']; // Change 'firstName' to 'name'
    $email = $_POST['email'];
    $address = $_POST['address'];
    $plantDescription = $_POST['plantDescription'];

    // Generate a PDF certificate from HTML using mPDF
    $mpdf = new \Mpdf\Mpdf();

    // Load your HTML certificate template (certificate.html)
    $html = file_get_contents('C:\xampp\htdocs\leafnow-main\certificate.html');

    // Replace placeholders in HTML with form data
    $html = str_replace('{{UserFirstName}}', $firstName, $html);
    $html = str_replace('{{UserLastName}}', '', $html); // Add last name if needed
    $html = str_replace('{{PlantDescription}}', $plantDescription, $html);

    // Add more replacements as needed

    // Write HTML to mPDF
    $mpdf->WriteHTML($html);

    // Output PDF as a variable
    $pdfData = $mpdf->Output('certificate.pdf', 'S');

    // Send the certificate as an email attachment using PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'leafnowofficial@gmail.com'; // Replace with your SMTP username
    $mail->Password = 'dsksqgvzcdhzyknq'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('leafnowofficial@gmail.com', 'LeafNow');
    $mail->addAddress($email, $firstName);
    $mail->isHTML(true);
    $mail->Subject = 'Donation Certificate';

    // Body of the email (you can customize this)
    $mail->Body = 'Hello ' . $firstName . ', Thank you for your donation. Please find your certificate attached.';

    // Attach the PDF to the email
    $mail->addStringAttachment($pdfData, 'certificate.pdf');

    // Enable SMTP debugging
    $mail->SMTPDebug = 2; // Enable verbose debugging
    $mail->Debugoutput = 'html'; // Display debug output as HTML
    if ($mail->send()) {
        echo '<script>alert("Donation successful! Certificate sent via email.")</script>';
        echo '<meta http-equiv="refresh" content="0;url=dplant.html">';
    } else {
        echo '<script>alert("Donation successful! Certificate email could not be sent. Error: ' . $mail->ErrorInfo . '")</script>';
        echo '<meta http-equiv="refresh" content="0;url=dplant.html">';
    }
}
?>
