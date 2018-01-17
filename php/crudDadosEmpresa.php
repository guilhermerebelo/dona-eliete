<?php 

	include_once "CRUD.php";
	$CRUD = new CRUD;

	$historia = $_POST["historiaEmpresa"];
	$missao = $_POST["missaoEmpresa"];
	$urlFacebook = $_POST["facebookEmpresa"];
	$urlInstagram = $_POST["instagramEmpresa"];
	$whatsapp = $_POST["whatsappEmpresa"];
	$cidade = $_POST["cidadeEmpresa"];
	$estado = $_POST["estadoEmpresa"];
	$endereço = $_POST["enderecoEmpresa"];

	$CRUD->put(" UPDATE `empresa` SET `historia` = '$historia', `missao` = '$missao', `urlFacebook` = '$urlFacebook', `urlInstagram` = '$urlInstagram', `whatsapp` = '$whatsapp', `cidade` = '$cidade', `estado` = '$estado', `endereco` = '$endereço' WHERE `empresa`.`id` = 1 ");

	header('location: administracao.php');

?>