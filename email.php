<?php 
header("Access-Control-Allow-Origin: *");

$nome		= $_POST["nome"]
$email 		= $_POST["email"];
$assunto 	= "Contato do site recuperando vidas 24h";
$mensagem	= $_POST["mensagem"];

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: pinnapp@superlerin.com.br';
//$headers .= "Bcc: $EmailPadrao\r\n";
$conteudo = utf8_encode($conteudo);
$enviaremail = mail($ultimoemail, $assunto, $conteudo, $headers);

?>