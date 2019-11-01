<?php

if (isset($_POST["enviar"])) {
    
    if (isset($_POST["name"])) {
        $name = $_POST["name"]; // Resgata o nome digitado no form
    }
    if (isset($_POST["email"])) {
        $email = $_POST["email"]; // Resgata o email digitado no form
    }
    
    if (isset($_POST["subject"])) {
        $subject = $_POST["subject"]; // Resgata o assunto digitado no form
    }
    
    if (isset($_POST["message"])) {
        $message = $_POST["message"]; // Resgata o mensagem digitado no form
    }

    // CORPO DA MENSAGEM
    $texto = "Formulario \n";
    $texto .= "Name: $name \n";
    $texto .= "Name: $email \n";
    $texto .= "Name: $subject \n";
    $texto .= "Name: $message \n";

    // EMAIL DE DESTINO
    $emailDestino = "cicero.jalmeida@hotmail.com";
    $emailRemetente = "maarcospaaulo@live.com";

    $headers = "From:" .$emailRemetente. "\n";
    $headers .= "Reply-To:" .$email. "\n"; 
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:" .$emailRemetente. "\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";

    if (mail($emailDestino, $subject, $texto, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha no envio do E-Mail!"
    }
}
?>