<?php 

	session_start();
	
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/icon.ico" >
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min">
</head>
<body>
	
    <section class="container">
    	<br><br><br><br>
		<div class="col-md-offset-4 col-md-4 col-md-offset-4">
			<div class="jumbotron">
				<div class="text-center">
					<figure>
						<img width="80" src="images/logo.png">
						<br>
						<figcaption>
							<h4>Sabores Dona Eliete</h4>
						</figcaption>
					</figure>
				</div>
				<hr>
				<form method="POST" action="php/valida.php">
					<div class="form-group row">				      
				      <div class="col-sm-12">
				        <input type="text" name="usuario" class="form-control" placeholder="Usuário" maxlength="80">
				      </div>
				    </div>
				    <div class="form-group row">				      
				      <div class="col-sm-12">
				        <input type="password" name="senha" class="form-control" placeholder="Senha" maxlength="80">
				      </div>
				    </div>
				    <button type="submit" class="btn btn-block btn-success">Entrar</button>
				</form>
				
				<p class="alert alert-danger text-center">
					<?php 
						if (isset($_SESSION['loginErro'])) {
							echo $_SESSION['loginErro'];
							unset($_SESSION['loginErro']);
						}

					 ?>
				</p>
			</div>
		</div>		
	</section>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>