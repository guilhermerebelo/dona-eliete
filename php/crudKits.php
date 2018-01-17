<?php 
	
	include_once "CRUD.php";
	$crud = new CRUD;
	
	$kit1 = $_POST['dadosKit1'];	
	$kit2 = $_POST['dadosKit2'];	
	$kit3 = $_POST['dadosKit3'];
	
	$crud->put(" UPDATE `kits` SET `qntd_pessoas`='$kit1[0]',`valor_evento`='$kit1[1]',`qntd_doces`='$kit1[2]',`qntd_coxinhas`='$kit1[3]',`qntd_pasteis`='$kit1[4]',`qntd_risoles`='$kit1[5]',`qntd_refri`='$kit1[6]',`kg_tortas`='$kit1[7]' WHERE `kits`.`id` = 1 ");

	$crud->put(" UPDATE `kits` SET `qntd_pessoas`='$kit2[0]',`valor_evento`='$kit2[1]',`qntd_doces`='$kit2[2]',`qntd_coxinhas`='$kit2[3]',`qntd_pasteis`='$kit2[4]',`qntd_risoles`='$kit2[5]',`qntd_refri`='$kit2[6]',`kg_tortas`='$kit2[7]' WHERE `kits`.`id` = 2 ");

	$crud->put(" UPDATE `kits` SET `qntd_pessoas`='$kit3[0]',`valor_evento`='$kit3[1]',`qntd_doces`='$kit3[2]',`qntd_coxinhas`='$kit3[3]',`qntd_pasteis`='$kit3[4]',`qntd_risoles`='$kit3[5]',`qntd_refri`='$kit3[6]',`kg_tortas`='$kit3[7]' WHERE `kits`.`id` = 3 ");

	header('location: administracao.php');

?>