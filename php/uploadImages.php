<?php 

	include_once('CRUD.php');
	$crud = new CRUD;

	for ($i=1; $i < 9; $i++) { 		

		if (isset($_FILES['imagemUpload'.$i]) ) {
			
			$extensao = strtolower(substr($_FILES['imagemUpload'.$i]['name'], -4)); //extrai a extensao do arquivo
			$novoNome = 'imagem'.$i; //define o nome do arquivo
			$diretorio = '../images/bannerPrincipal/'; //define o diretorio de upload

			move_uploaded_file($_FILES['imagemUpload'.$i]['tmp_name'], $diretorio.$novoNome.$extensao); //efetua o upload

			$query = "INSERT INTO `imagens`(`id`, `caminhoImagem`) VALUES ('$i','$novoNome$extensao')";

			$crud->post($query);
		
		}		
	}

	header('location: administracao.php');


?>