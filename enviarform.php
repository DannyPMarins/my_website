<?php

$name = utf8_decode($_POST['name']);
$mail = utf8_decode($_POST['mail']);
$message = utf8_decode($_POST['message']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

// Config Servidor do email

$mail->Host = "smtp.gmail.com";
$mail->Post = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "contato@dannydesign.net";
$mail->Password = "Sexonthebeach00!";

// Config Mensagem

$mail->setFrom($mail->Username,"Daniel"); //Remetente
$mail->addAddress('contato@dannydesign.net'); //Destinatario
$mail->Subject = "Assunto"; // Assunto

$conteudo_email = "
Você recebeu uma mensagem de $name ($email):
<br><br>

Mensagem:<br>
$message
";
$mail->IsHTML(true);
$mail->Body =   $conteudo_email;

if ( $mail->send()){
    echo "E-mail enviado com sucesso!";
}
else {
    echo "Falha ao enviar o email: " . $mail->Erroinfo;
}