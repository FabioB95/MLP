<?php
require("vendor/autoload.php"); //--->> TENER SIEMPRE EN CUENTA QUE DEBE TENER LA EXTENSIÓN DEL ARCHIVO .PHP

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false) {

    try{ //SE IMPLEMENTA TRY PARA HACERLE SEGUIMIENTO AL PROCESO DE ENVÍO
        $senderemail = "buffoli.fabio@gmail.com";  //--->>>> ESTE CORREO ES EL QUE ENVÍA Y EL QUE RECIBE
        $sendername  = "Fabio Buffoli";
    
       // Configuración inicial de nuestro servidor de correos
        $phpmailer = new PHPMailer;
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'buffoli.fabio@gmail.com';  //--->>>CREDENCIALES PARA EL SENDER
        $phpmailer->Password = 'nlysmccwxacosrvu';   //--->>>CONTRASEÑA DEL SENDER
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $phpmailer->Port = 465;

        //  Añadiendo destinatarios
        $phpmailer->setFrom($senderemail, $sendername);
        $phpmailer->addAddress($senderemail, $sendername); 
        $phpmailer->addReplyTo($email, $name);
    
        // Definiendo el contenido de mi email
        $phpmailer->isHTML($html); // -->> ENVÍA CORREO EN FORMATO HTML
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $body;
    
        $phpmailer->send();  //METODO QUE ENVÍA EL CORREO

        echo 'Message has been sent'; // SI SE ENVÍA CORRECTAMENTE SUELTA MENSAJE 
    }catch(Exception $e){
        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}"; // SI NO SE ENVÍA CORRECTAMENTE SUELTA MENSAJE 
    }    
}
?>