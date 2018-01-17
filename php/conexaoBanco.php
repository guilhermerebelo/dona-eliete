<?php
	class ConexaoBanco
	{	

		private $usuario = 'localhost';
		private $login = 'root';
		private $senha = '';
		private $db = 'dona_eliete';
		private $link;

		public function conectar()
		{	
			
			$link = mysqli_connect($this->usuario, $this->login, $this->senha, $this->db);
			mysqli_query($link, 'SET NAMES utf8');
			$this->link = $link;
			return $this->link;
		}

		/*public function desconectar($link)
		{
			mysqli_close($link);
		}*/
		
	}	
?>