<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST["send"])){
    //Create an instance; passing true enables exceptions
    $mail = new PHPMailer(true);

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'avishkaranarase111@gmail.com';                     //SMTP username
    $mail->Password   = 'kdsjvsqogiztwqat';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465; 

    $mail->setFrom('avishkaranarase111@gmail.com', 'Contact Form');
    $mail->addAddress('avi.work.111@gmail.com', 'Hamari website');     //Add a recipient
   
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test Contact Forms';
    $mail->Body    = 'We have a new complaint on portale';
   
    $mail->send();

    echo "Mail Sent";
    // "
    // <script>
    // alert('Complaint Registered successfully');
    // document.location.href = 'register-complaint.php';
    // </script>
    // "

}
?>