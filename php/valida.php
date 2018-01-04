<?php 
	session_start();
	
	include 'CRUD.php';
	$crud = new CRUD;
	$conn = $crud->getLink();	


	if( (isset($_POST['usuario'])) && (isset($_POST['senha'])))   {
		$usuario = mysqli_real_escape_string($conn, $_POST['usuario']); // proteje contra sql inject
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha); // senha cliptografada
		
		$result = $crud->get("SELECT * FROM usuario LIMIT 1");
		$resultado = mysqli_fetch_assoc($result);

		if (empty($resultado)){
			$_SESSION['loginErro'] = "Falhou, tente novamente";
			header('location: ../login.php');
		} elseif (isset($resultado)){
			if (($resultado['login'] == $usuario)  &&  ($resultado['senha'] == $senha)) {
				$_SESSION['nome'] = $resultado['nome'];
				header('location: administracao.php');
			} else{
				$_SESSION['loginErro'] = "Usuário ou senha inválido - 1";
				header('location: ../login.php');
			}	
		} else {
			$_SESSION['loginErro'] = "Usuário ou senha inválido - 2";
			header('location: ../login.php');
		}

	} else{
		$_SESSION['loginErro'] = "Preencha login e senha";
		header('location: ../login.php');
	}




 ?>