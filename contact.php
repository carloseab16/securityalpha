<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'Security Alpha formulario contactanos';
    $email_subject = "Asunto: $subject.\n";
    $email_body = "Nombre: $name.\n".
                  "email: $email.\n".
                  "Mensaje: $message.\n";

    $to= "contacto@securityalpha.pe";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $email \r\n";    

    mail($to, $email_subject, $email_body, $headers );
    header("location: success.html");
?>