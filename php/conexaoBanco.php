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
			$this->link = mysqli_connect($this->usuario, $this->login, $this->senha, $this->db);			
			return $this->link;
		}

		public function desconectar($link)
		{
			mysqli_close($link);
			echo "$link";
		}
		
	}	
?>