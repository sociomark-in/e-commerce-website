<?php

class Mailer
{
    public function __construct()
    {
        require_once APPPATH . 'vendor/autoload.php';
    }

    public function load()
    {
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        // Set the mail properties
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'hemantkarekar.0.0.0.0@gmail.com';
        $mail->Password = 'klocyytubqhtyngv';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = TRUE;

        // Set the email recipient
        $mail->setFrom('hemantkarekar.0.0.0.0@gmail.com', 'Developer Test Mail Service');
        $mail->addAddress('hemant@sociomark.in', 'Hemant Karekar');

        // Set the email subject and body
        $mail->Subject = 'This is a test email';
        $mail->Body = 'This is the body of the email.';

        // Send the email
        if ($mail->send()) {
            echo 'Email sent successfully!';
        } else {
            echo 'An error occurred while sending the email.' . $mail->ErrorInfo;
        }
    }
}