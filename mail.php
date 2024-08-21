<?php

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    echo $name."<br>";
    echo $email."<br>";
    echo $subject."<br>";
    echo $message."<br>";
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (if you installed PHPMailer via Composer)
// require 'vendor/autoload.php';

// Alternatively, include these files manually if you downloaded PHPMailer manually
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]); 
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validate the form fields
    if (empty($name) || empty($email) ||  empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'mkofficial1998@gmail.com';                 // SMTP username
        $mail->Password   = 'kwfvumvopesowwso';                    // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('mkofficial1998@gmail.com', 'Manish Kumar');     // Add your email address

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);                           // Convert newlines to <br> tags
        $mail->AltBody = $message;                                  // Plain text for non-HTML mail clients

        // Send the email
        $mail->send();
        echo 'Message has been sent. Thank you for contacting us!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}



?>