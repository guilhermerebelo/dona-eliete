<?php 	

	include 'conexaoBanco.php';	

	class CRUD
	{		
		private $link;

		public function conexaoBanco()
		{			
			$conexaoBanco = new ConexaoBanco;
			$this->link = $conexaoBanco->conectar();
		}

		public function desconectarBanco()
		{			
			$conexaoBanco = new ConexaoBanco;
			$conexaoBanco->desconectar($this->link);
		}

		public function getLink(){
			$this->conexaoBanco(); //conetar banco de dados
			return $this->link;
		}



		public function get($query)
		{			
			$this->conexaoBanco(); //conetar banco de dados

			return $result = mysqli_query($this->link, $query);		

		}

		public function post($query)
		{
			$this->conexaoBanco(); //conetar banco de dados

			mysqli_query($this->link, $query);

		}

		public function put($query)
		{
			$this->conexaoBanco(); //conetar banco de dados

			mysqli_query($this->link, $query);

		}

		public function delete($query)
		{
			$this->conexaoBanco(); //conetar banco de dados

			mysqli_query($this->link, $query);

		}

	}
	
?>