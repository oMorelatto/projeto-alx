<?php

/* Valores recebidos do formulário  */

$nome = addslashes($_POST['Nome']);
$email = addslashes($_POST['Email']);
$empresa = addslashes($_POST['Empresa']);
$telefone = addslashes($_POST['Telefone']);
$assunto = addslashes($_POST['Assunto']);
$mensagem = addslashes($_POST['Mensagem']);
$anexo = addslashes($_POST['Anexo']);

/* Destinatário e remetente */

$to = "morelattotech@gmail.com";

/* Corpo do e-mail */

$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Empresa: "$empresa. "\r\n".
        "Telefone: "$telefone. "\r\n".
        "Assunto: "$assunto. "\r\n".
        "Mensagem: "$mensagem. "\r\n".
        "Anexo: "$anexo;

/* Cabeçalho */    

$header = "From:alxrecursoshumanos@gmail.com"."\r\n".
            ."Reply-To:".$email. "\r\n".
            ."X=Mailer:PHP/".phpversion();



else // Caso não tenha anexo


/* Função que envia a mensagem  */

if(mail($to,$body,$header)) {
  echo("Email enviado com sucesso!");
}else{
  echo("O Email não foi enviado!");
}


?>