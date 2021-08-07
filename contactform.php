<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=UTF-8\n";
$headers .= "From: contato@dannydesign.net\n"; // remetente
$headers .= "Return-Path: contato@dannydesign.net\n"; // return-path
$envio = mail("email", "nome", "mensagem", $headers);
 
// if(!mail($mail, $name, $message, $headers ,"-r".$emailsender)){ // Se for Postfix
//     $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
//     mail($mail, $name, $message, $headers );
// }


if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
 
?>