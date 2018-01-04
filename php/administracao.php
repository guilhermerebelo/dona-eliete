<?php 
	session_start();
	if (!$_SESSION["nome"]) header("Location: ../login.php");
 ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administração | Sabores Dona Eliete</title>
  <link rel="shortcut icon" href="../images/icon.ico" >
  <!-- Bootstrap core CSS-->
  <link href="../plugin-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../plugin-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../plugin-admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../plugin-admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand text-white">
    		&nbsp <img height="40" src="../images/logo.png">
    		Sabores Dona Eliete 		
	</a>		
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
            <i class="fa fa-fw fa-birthday-cake"></i>
            <span class="nav-link-text">Produtos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Salgados</a>
            </li>
            <li>
              <a href="cards.html">Tortas & Bolos</a>
            </li>
            <li>
              <a href="navbar.html">Trufas</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Kits</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link">
            <i class="fa fa-fw fa-file-image-o"></i>
            <span class="nav-link-text">Imagens</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Empresa</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      	<li class="nav-item">
			<a class="nav-link">
            	Bem vindo, Administrador
        	</a>
        </li>
        &nbsp
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

		   <div class="row">
		    <div class="col-xl-3 col-sm-6 mb-3">
		      <div class="card text-white bg-primary o-hidden h-100">
		        <div class="card-body">
		          <div class="card-body-icon">
		            <i class="fa fa-fw fa-comments"></i>
		          </div>
		          <div class="mr-5">10 Produtos</div>
		        </div>
		      </div>
		    </div>
		    <div class="col-xl-3 col-sm-6 mb-3">
		      <div class="card text-white bg-warning o-hidden h-100">
		        <div class="card-body">
		          <div class="card-body-icon">
		            <i class="fa fa-fw fa-list"></i>
		          </div>
		          <div class="mr-5">0 Visitas na página</div>
		        </div>
		      </div>
		    </div>
		    <div class="col-xl-3 col-sm-6 mb-3">
		      <div class="card text-white bg-success o-hidden h-100">
		        <div class="card-body">
		          <div class="card-body-icon">
		            <i class="fa fa-fw fa-shopping-cart"></i>
		          </div>
		          <div class="mr-5">0 Cliques em enviar mensagem</div>
		        </div>
		      </div>
		    </div>
		    <div class="col-xl-3 col-sm-6 mb-3">
		      <div class="card text-white bg-danger o-hidden h-100">
		        <div class="card-body">
		          <div class="card-body-icon">
		            <i class="fa fa-fw fa-support"></i>
		          </div>
		          <div class="mr-5">Produto mais visto</div>
		        </div>
		      </div>
		    </div>
		  </div>
      
      <!-- Icon Cards-->

      	<div class="card mb-3">
	        <div class="card-header">
	         	 <i class="fa fa-birthday-cake"></i> Produtos</div>
	        <div class="card-body">

	        	<div class="card mb-3">
			        <div class="card-header">
			         	 <i class="fa fa-birthday-cake"></i> Salgados</div>
			        <div class="card-body">

			        	<div class="col-md-12 d-flex flex-nowrap flex-row">
			        		<div class="col-md-2">
			        			<button class="btn btn-success"> <i class="fa fa-plus"></i> Novo Produto</button>
			        		</div>
			        		<div class="col-md-10">
			        			<div class="form-group">
			        				<input type="text" class="form-control" placeholder="Pesquise seu produto">
			        			</div>
			        		</div>
			        	</div>


			        	<div style="border: 1px solid #efefef; border-radius: 3px; padding: 15px 15px 15px 0; background-color: #F7F7F7; margin-bottom: 30px;" class="d-flex flex-wrap flex-row justify-content-between align-items-center">
			        		<div class="col-md-3 text-center d-flex flex-row align-items-center">
			        			<h3>#1</h3>&nbsp&nbsp&nbsp&nbsp
			        			<img  height="90" src="../images/gallery-bolos.jpg">
			        		</div>
			        		<div class="col-md-3 text-left">
			        			<p> <strong>Nome:</strong> Torta Sabor</p>			        			
			        			<p> <strong>Valor (Kg):</strong> 24.9 o kilo</p>	
			        		</div>
			        		<div class="col-md-4" style="overflow: hidden;">
			        			<p> <strong>Ingredientes:</strong> Sabor Sabor Sabor Sabor Sabor  </p>
			        		</div>
			        		<div class="col-md-2 text-left">			        			
			        			<p>
			        				<button data-toggle="modal" data-target="#produtosModal" class="btn btn-warning"> <i class="fa fa-cog"></i> Editar Dados</button>
			        			</p>
			        			<p>
			        				<button class="btn btn-danger"> <i class="fa fa-trash"></i> Excluir Produto</button>
			        			</p>
			        		</div>
			        	</div>	

			        </div>
		      	</div>

		      	<div class="card mb-3">
			        <div class="card-header">
			         	 <i class="fa fa-birthday-cake"></i> Tortas & Bolos</div>
			        <div class="card-body">

			        	<div class="col-md-12 d-flex flex-nowrap flex-row">
			        		<div class="col-md-2">
			        			<button class="btn btn-success"> <i class="fa fa-plus"></i> Novo Produto</button>
			        		</div>
			        		<div class="col-md-10">
			        			<div class="form-group">
			        				<input type="text" class="form-control" placeholder="Pesquise seu produto">
			        			</div>
			        		</div>
			        	</div>

			        	<div style="border: 1px solid #efefef; border-radius: 3px; padding: 15px 15px 15px 0; background-color: #F7F7F7; margin-bottom: 30px;" class="d-flex flex-wrap flex-row justify-content-between align-items-center">
			        		<div class="col-md-3 text-center d-flex flex-row align-items-center">
			        			<h3>#1</h3>&nbsp&nbsp&nbsp&nbsp
			        			<img  height="90" src="../images/gallery-bolos.jpg">
			        		</div>
			        		<div class="col-md-3 text-left">
			        			<p> <strong>Nome:</strong> Torta Sabor</p>			        			
			        			<p> <strong>Valor (Kg):</strong> 24.9 o kilo</p>	
			        		</div>
			        		<div class="col-md-4" style="overflow: hidden;">
			        			<p> <strong>Ingredientes:</strong> Sabor Sabor Sabor Sabor Sabor  </p>
			        		</div>
			        		<div class="col-md-2 text-left">			        			
			        			<p>
			        				<button data-toggle="modal" data-target="#produtosModal" class="btn btn-warning"> <i class="fa fa-cog"></i> Editar Dados</button>
			        			</p>
			        			<p>
			        				<button class="btn btn-danger"> <i class="fa fa-trash"></i> Excluir Produto</button>
			        			</p>
			        		</div>
			        	</div>	

			        	        	
			        </div>
		      	</div>

		      	<div class="card mb-3">
			        <div class="card-header">
			         	 <i class="fa fa-birthday-cake"></i> Trufas</div>
			        <div class="card-body">


			        	<div class="col-md-12 d-flex flex-nowrap flex-row">
			        		<div class="col-md-2">
			        			<button class="btn btn-success"> <i class="fa fa-plus"></i> Novo Produto</button>
			        		</div>
			        		<div class="col-md-10">
			        			<div class="form-group">
			        				<input type="text" class="form-control" placeholder="Pesquise seu produto">
			        			</div>
			        		</div>
			        	</div>

			        	<div style="border: 1px solid #efefef; border-radius: 3px; padding: 15px 15px 15px 0; background-color: #F7F7F7; margin-bottom: 30px;" class="d-flex flex-wrap flex-row justify-content-between align-items-center">
			        		<div class="col-md-3 text-center d-flex flex-row align-items-center">
			        			<h3>#1</h3>&nbsp&nbsp&nbsp&nbsp
			        			<img  height="90" src="../images/gallery-bolos.jpg">
			        		</div>
			        		<div class="col-md-3 text-left">
			        			<p> <strong>Nome:</strong> Torta Sabor</p>			        			
			        			<p> <strong>Valor (Kg):</strong> 24.9 o kilo</p>	
			        		</div>
			        		<div class="col-md-4" style="overflow: hidden;">
			        			<p> <strong>Ingredientes:</strong> Sabor Sabor Sabor Sabor Sabor  </p>
			        		</div>
			        		<div class="col-md-2 text-left">			        			
			        			<p>
			        				<button data-toggle="modal" data-target="#produtosModal" class="btn btn-warning"> <i class="fa fa-cog"></i> Editar Dados</button>
			        			</p>
			        			<p>
			        				<button class="btn btn-danger"> <i class="fa fa-trash"></i> Excluir Produto</button>
			        			</p>
			        		</div>
			        	</div>	

			        	        	
			        </div>
		      	</div>
	        	        	
	        </div>
      	</div>
      
      	

      	<div class="card mb-3">
	        <div class="card-header">
	         	 <i class="fa fa-list"></i> Kits</div>
	        <div class="card-body">

        	<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kit 1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kit 2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Kit 3</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  	<br>
		  			<form>
			  			<div class="d-flex flex-wrap flex-row">
				  			<div class="form-group col-md-4">
							    <label>Qntd Pessoas</label>
							    <input type="text" class="form-control" maxlength="4">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Valor Evento (R$)</label>
							    <input type="text" class="form-control" maxlength="20">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Doces (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Coxinhas (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Pasteis (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Risoles (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Refrigerantes (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Tortas (KG)</label>
							    <input type="text" class="form-control" maxlength="10">
						  	</div>
						  	<div class="col-md-4">						  		
						  		<button style="margin-top: 32px;" class="btn btn-success"> <i class="fa fa-check"></i> Salvar Kit 1</button>
						  	</div>
					  	</div>  				
			  		</form>
			  </div>
			  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			  	<br>
			  			<form>
			  			<div class="d-flex flex-wrap flex-row">
				  			<div class="form-group col-md-4">
							    <label>Qntd Pessoas</label>
							    <input type="text" class="form-control" maxlength="4">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Valor Evento (R$)</label>
							    <input type="text" class="form-control" maxlength="20">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Doces (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Coxinhas (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Pasteis (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Risoles (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Refrigerantes (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Tortas (KG)</label>
							    <input type="text" class="form-control" maxlength="10">
						  	</div>
						  	<div class="col-md-4">						  		
						  		<button style="margin-top: 32px;" class="btn btn-success"> <i class="fa fa-check"></i> Salvar Kit 2</button>
						  	</div>
					  	</div>  				
			  		</form>
			  	
			  </div>
			  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			  	<br>
			  		<form>
			  			<div class="d-flex flex-wrap flex-row">
				  			<div class="form-group col-md-4">
							    <label>Qntd Pessoas</label>
							    <input type="text" class="form-control" maxlength="4">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Valor Evento (R$)</label>
							    <input type="text" class="form-control" maxlength="20">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Doces (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Coxinhas (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Pasteis (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Risoles (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Refrigerantes (UN)</label>
							    <input type="text" class="form-control" maxlength="6">
						  	</div>
						  	<div class="form-group col-md-4">
							    <label>Tortas (KG)</label>
							    <input type="text" class="form-control" maxlength="10">
						  	</div>
						  	<div class="col-md-4">						  		
						  		<button style="margin-top: 32px;" class="btn btn-success"> <i class="fa fa-check"></i> Salvar kit 3</button>
						  	</div>
					  	</div>  				
			  		</form>
			  	
			  </div>
			</div>
	        	      	
	        </div>
      	</div>

      	<div class="card mb-3">
	        <div class="card-header">
	         	 <i class="fa fa-file-image-o"></i> Imagens</div>
	        <div class="card-body">
	        	<p> <strong> Imagens do banner principal </strong> </p>
	        	<div class="d-flex flex-row flex-wrap justify-content-around text-center">
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 1º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 2º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 3º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 4º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3 ">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 5º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 6º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 7º Imagem
		        			</p>
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<img width="200" src="../images/home.png">
	        			<br>
	        			<div>
		        			<p class="text-left">
		        				<input class="form-control" style="font-size: 16px" type="file"> Alterar 8º Imagem
		        			</p>
	        			</div>
	        		</div>
	        	</div>

	        </div>
      	</div>

      	<div class="card mb-3">
	        <div class="card-header">
	         	 <i class="fa fa-cog"></i> Empresa</div>
	        <div class="card-body d-flex flex-row flex-wrap">
	        	<div class="col-md-8">
		        	<table class="table table-responsive">
		        		<tbody>	        		
			        		<tr>
			        			<th>História</th>
			        			<td>História História história História História História História História história História História História História História história História História História História História história História História História História História história História História História História História história História História História História História história História História História História História história História História História História História história História História História</td>
			        		</tr>
			        		<tr>
			        			<th>Missão</th>
			        			<td>História História história História História História História História história História História História História História história História História História </td>
			        		</tr>
			        		<tr>
			        			<th>Facebook</th>
			        			<td>História História história História História História </td>
			        		</tr>
			        		<tr>
			        			<th>Instagram</th>
			        			<td>História História história História História História </td>
			        		</tr>		        		
		        		</tbody>  
		        	</table>
	        	</div>
	        	<div class="col-md-4">
		        	<table class="table table-responsive">
		        		<tbody>
			        		<tr>
			        			<th>WhatsApp</th>
			        			<td>(48) 998060375</td>
			        		</tr>
			        		<tr>
			        			<th>Endereço</th>
			        			<td>rua 1349, numero 43</td>
			        		</tr>
			        		<tr>
			        			<th>Cidade</th>
			        			<td>Criciúma</td>
			        		</tr>
			        		<tr>
			        			<th>Estado</th>
			        			<td>SC</td>
			        		</tr>      		
		        	</table>
	        	</div>
	        	

	        	<div>
	        		<button data-toggle="modal" data-target="#empresaDadosModal" class="btn btn-warning"><i class="fa fa-cog"></i> Alterar Dados</button>
	        	</div>


	        	      	
	        </div>
      	</div>

      	



      	
      
  	</div>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>SBadmin | Sabores Done Eliete</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Selecione a opção</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>          
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="sair.php">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
	  
	  <!-- Modal -->
	  <div class="modal fade" id="empresaDadosModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header">
	        	<h4><i class="fa fa-cog"></i> Editar dados da Empresa</h4>
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body">
	        	<form>
	        		<div class="form-group">
				    	<label >História</label>
				    	<textarea class="form-control" maxlength="700"></textarea>
				  	</div>
				  	<div class="form-group">
				    	<label >Missão</label>
				    	<input type="text" class="form-control" maxlength="300">
				  	</div>
				  	<hr>
				  	<div class=" form-group d-flex flex-wrap flex-row">
					  	<div class="form-group col-md-6">
					    	<label >Facebook(url)</label>
					    	<input type="text" class="form-control" maxlength="200">
					  	</div>
					  	<div class="form-group col-md-6">
					    	<label >Instagram(url)</label>
					    	<input type="text" class="form-control" maxlength="200">
					  	</div>
				  	</div>		
				  	<hr>	  	
				  	<div class="d-flex flex-row flex-wrap">
				  		<div class="form-group col-md-5">
					    	<label >WhatsApp</label>
					    	<input type="text" class="form-control" maxlength="30">
					  	</div>
				  		<div class="form-group col-md-5">
					    	<label >Cidade</label>
					    	<input type="text" class="form-control" maxlength="70">
					  	</div>
					  	<div class="form-group col-md-2">
					    	<label >Estado</label>
					    	<input type="text" class="form-control text-uppercase" maxlength="2">
					  	</div>
					  	<div class="form-group col-md-12">
					    	<label >Endereço</label>
					    	<input type="text" class="form-control" maxlength="300">
					  	</div>
				  	</div>
				  	<div class="form-group">
				  		<button class="btn btn-success"> <i class="fa fa-check"></i> Salvar Alterações</button>
				  		<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times"></i> Fechar</button>
				  	</div>
			  	</form>
	        </div>
	        <div class="modal-footer">
	          
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="container">
	  
	  <!-- Modal -->
	  <div class="modal fade" id="produtosModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header">
	        	<h4><i class="fa fa-cog"></i> Editar dados do Produto</h4>
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body">
	        	<form>
	        		<div class="d-flex flex-row flex-wrap">
	        			<div class="col-md-5 d-flex flex-colunm flex-wrap">
	        				<div class="form-group col-md-12">
						    	<label >Id</label>
						    	<input type="text" class="form-control" maxlength="3" disabled>
						  	</div>
						  	<div class="form-group col-md-12">
						    	<label >Nova Imagem</label>
						    	<input type="file" class="form-control" maxlength="300">
						  	</div>
	        			</div>
	        			<div class="col-md-7 text-center">
	        				<img height="200" src="../images/gallery-bolos.jpg">
	        			</div>		
				  	</div>
				  	<hr>
				  	<div class=" form-group d-flex flex-wrap flex-row">
					  	<div class="form-group col-md-8">
					    	<label >Nome/Sabor</label>
					    	<input type="text" class="form-control" maxlength="200">
					  	</div>
					  	<div class="form-group col-md-4">
					    	<label >Valor do Kg</label>
					    	<input type="text" class="form-control" maxlength="200">
					  	</div>
				  	</div>		
				  	<hr>	  	
				  	<div class="form-group">
				    	<label>Ingredientes</label>
				    	<input type="text" class="form-control" maxlength="200">
				  	</div>
				  	<div class="form-group">
				  		<button class="btn btn-success"> <i class="fa fa-check"></i> Salvar Alterações</button>
				  		<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times"></i> Fechar</button>
				  	</div>
			  	</form>
	        </div>
	        <div class="modal-footer">
	          
	        </div>
	      </div>
	    </div>
	  </div>
	</div>







    <!-- Bootstrap core JavaScript-->
    <script src="../plugin-admin/vendor/jquery/jquery.min.js"></script>
    <script src="../plugin-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../plugin-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../plugin-admin/vendor/chart.js/Chart.min.js"></script>
    <script src="../plugin-admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../plugin-admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../plugin-admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../plugin-admin/js/sb-admin-datatables.min.js"></script>
    <script src="../plugin-admin/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

