<?php
require 'phpmailer/PHPMailerAutoload.php';

$Mailer = new phpmailer();

//Define que será usado SMTP
$Mailer->IsSMTP();

//Enviar e-mail em HTML
$Mailer->isHTML(true);

//Aceitar caracteres especiais
$Mailer->Charset = 'UTF-8';

//Configurações
$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'ssl';

//nome do servidor
$Mailer->Host = 'smtp.gmail.com';

//Porta de saida de e-mail 
$Mailer->Port = 465;

//Dados do e-mail de saida - autenticação
$Mailer->Username = 'projeto.rogerio@gmail.com';
$Mailer->Password = 'C3df32ea!';

//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
$Mailer->From = 'projeto.rogerio@gmail.com';

//Nome do Remetente
$Mailer->FromName = 'Interessado(a) em contato';

//Assunto da mensagem
$Mailer->Subject = \utf8_decode("Contato pelo Site");

//Corpo da Mensagem
$Mailer->Body = utf8_decode("Conteúdo do Email");

//Corpo da mensagem em texto
$Mailer->AltBody = $Mailer->AltBody = 'Conteúdo do email em texto';

//Destinatario 
$Mailer->AddAddress('rogerc.pessoal@gmail.com');

//Destinatario 
$Mailer->AddAddress('rcmtecnologia.rs@gmail.com');

if ($Mailer->Send()) {
    echo "E-mail enviado com sucesso";
} else {
    echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
}
	


?>