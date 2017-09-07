<?php

$para = "guilhermerebelo@live.com";
$assunto = "contato dona eliete";
$fnome = $_POST['fnome'];
$ftelefone = $_POST['ftelefone'];
$femail = $_POST['femail'];
$fmensagem = $_POST['fmensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$corpo = "
Nome: $fnome
Telefone: $ftelefone
Email: $femail
Dia: $data_envio
Hora: $hora_envio

Mensagem:

$fmensagem

";

$header .= "Content-type: text/html; charset = utf-8\n";
$header = "From: $email Reply-to: $email\n";

@mail($para,$assunto,$corpo,$header);
?>