<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_email_duraluxe_contact_form(
    $name,
    $email,
    $company,
    $phone,
    $message,
    $wants_samples,
    $config
){


    require_once('phpmailer/PHPMailer.php');
    require_once('phpmailer/SMTP.php');

    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Host = $config['smtp_host'];
    $mail->Port = $config['smtp_port'];
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];

    try {
        $mail->SetFrom( $config['from'], 'NCM-Projects | Duraluxe' );
        $mail->AddAddress( $config['to'], 'NCM-Projects | Duraluxe' );
        $mail->Subject = 'Formulario de contacto, duraluxe';

        $cos = file_get_contents('../../../ui/emails/duraluxe_contact_form.html');

        $cos = str_replace('%NAME%', $name, $cos);
        $cos = str_replace('%COMPANY%', $company, $cos);
        $cos = str_replace('%EMAIL%', $email, $cos);
        $cos = str_replace('%PHONE%', $phone, $cos);
        $cos = str_replace('%MESSAGE%', $message, $cos);
        $cos = str_replace('%WANTS_SAMPLES%', $wants_samples ? 'Sí' : 'No', $cos);

        $mail->MsgHTML( $cos );
        $mail->CharSet="UTF-8";
        $sendEmail = $mail->Send();

        if($sendEmail){
            //echo '<center><h3>Mail sent successfully</h3></center>';
        } else{
            //echo '<center><h3>Mail error: </h3></center>'.$mail->ErrorInfo.'';
        }
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); // Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); // Boring error messages from anything else!
    }
}