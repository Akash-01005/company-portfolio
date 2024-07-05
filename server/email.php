<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$b=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"], $_POST["email"], $_POST["msg"])) {
        $un = $_POST["name"];
        $em = $_POST["email"];
        $m = $_POST['msg'];

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'webdevepak@gmail.com';
            $mail->Password = 'kmkw fyoz dgqp eglh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            //Recipients
            $mail->setFrom('webdevepak@gmail.com', $un); // Use your company's email for authentication
            $mail->addAddress('akashhp202107@gmail.com'); // Company's email address
            $mail->addReplyTo($em, $un);// Add a recipient email

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Registration Form Submission';
            $mail->Body = $m;
            echo $em;
            //Send email
            $mail->send();
            echo 'Message has been sent';
            $b=1;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "One or more required fields are missing.";
    }
} else {
    echo "Invalid request method.";
}
if($b==1){
    header('location: ../contact.php');
}
?>
