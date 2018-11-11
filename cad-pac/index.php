<?php include "DatabaseConnection.php"?>
<?php include "VerificarFormPac.php"?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Pacientes - Lar Santo Antônio</title>
    <!-- Bootstrap -->
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--Navegação -->
			<a class="navbar-brand" href="#">Lar Santo Antônio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"> <a class="nav-link" href="#">Início</a> </li>
					<li class="nav-item active"> <a class="nav-link" href="#">Cadastro de Pacientes</a> </li>
					<li class="nav-item active"> <a class="nav-link" href="#">Ajuda</a> </li>
				</ul>
			
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
					<button class="btn btn-outline my-2 my-sm-0" type="submit">Pesquisa</button>
				</form>
			</div>
		</nav>
	  
		<header> <!-- Deixa o fundo cinza -->
			<div class="jumbotron">
				<div class="container">
					<div class="row"> <!-- Cria uma linha -->
						<div class="col-12"> <!-- Espaçamento de colunas -->
							<h1 class="text-center">Cadastro de Pacientes</h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
	  
		<section> <!-- Deixa o fundo branco -->
			<div class="container"><!-- Centraliza a tela -->
				<form name="frmCadPaciente" method="post" action="" onchange="this.form.submit();">
					<div class="form-row"><!-- Inicia uma nova linha no formulário-->
						<div class="col"> <!--Cria uma coluna -->
							<label for="nome">Nome:</label>
							<input type="text" class="form-control red" placeholder="Digite o nome do paciente" name="pacienteNome" value="<?php if(isset($_POST['pacienteNome'])) echo $_POST['pacienteNome']; ?>"/>
					  	</div>
						
					  	<div class="col">
							<label for="sobrenome">Sobrenome:</label> <!-- Texto para campos do fomulário -->
							<input type="text" class="form-control" placeholder="Digite o sobrenome do paciente" name="pacienteSobrenome" value="<?php 	if(isset($_POST['pacienteSobrenome'])) echo $_POST['pacienteSobrenome']; ?>"/>
					  	</div>
					</div>
					
				    <div class="form-row"><!-- Inicia uma nova linha no formulário-->
				    	<div class="col">
							<label for="dt-nasc">Data de Nascimento:</label>
							<input type="date" class="form-control" name="pacienteDtNasc" value="">
						</div>
						
						<div class="col">
							<label for="dt-entr">Data de Entrada:</label>
							<input type="date" class="form-control" name="pacienteDtEnt" value="">
						</div>
				    </div>
					<div class="form-row"><!-- Inicia uma nova linha no formulário-->
						<div class="col">
							<label for="rg">(O Campo não é obrigatório) RG:</label>
							<input type="text" class="form-control" placeholder="Digite o RG do paciente" maxlength="10" name="pacienteRG" value="<?php if(isset($_POST['pacienteRG'])) echo $_POST['pacienteRG']; ?>"/>
						</div>
						
						<div class="col">
							<label for="cpf">(O Campo não é obrigatório) CPF:</label>
							<input type="text" class="form-control" placeholder="Digite o CPF do paciente" maxlength="11" name="pacienteCPF" value="<?php 	if(isset($_POST['pacienteCPF'])) echo $_POST['pacienteCPF']; ?>"/>
						</div>
				  	</div>
					
				    <div class="form-row"><!-- Inicia uma nova linha no formulário-->
						<div class="col">
							<label for="est-civ">Estado Civil: </label>
							
							<div class="form-check"> <!-- Mostra pro css que é um campo de seleção -->
								<div class="container">
									<div class="row">
										<div class="col-3">
											<input type="radio" class="form-check-input" name="pacienteEstCiv" value="Solteiro" <?php if(isset($_POST['pacienteEstCiv']) && $_POST['pacienteEstCiv']=="S") { ?>checked<?php  } ?>> <label class="form-check-label" for="solteiro"> Solteiro </label>
										</div>
										<div class="col-3">
											<input type="radio" class="form-check-input" name="pacienteEstCiv" value="Casado" <?php if(isset($_POST['pacienteEstCiv']) && $_POST['pacienteEstCiv']=="C") { ?>checked<?php  } ?>> <label class="form-check-label" for="casado"> Casado </label>
										</div>
										<div class="col-3">
   											<input type="radio"  class="form-check-input" name="pacienteEstCiv" value="Viuvo" <?php if(isset($_POST['pacienteEstCiv']) && $_POST['pacienteEstCiv']=="V") { ?>checked<?php  } ?>> <label class="form-check-label" for="viuvo">Viuvo</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col">
							<label for="religiao">Religião:</label>
							
							<div class="form-check">
								<div class="container">
									<div class="row">
										<div class="col-3">
											<input type="radio" name="pacienteReligiao" value="Catolico" id="1" <?php if(isset($_POST['pacienteReligiao']) && $_POST['pacienteReligiao']=="Catolico") { ?>checked<?php  } ?> > <label for="religiao1"> Católico </label>
										</div>
										<div class="col-3">
    										<input type="radio" name="pacienteReligiao" value="Evangelico" id="2" <?php if(isset($_POST['pacienteReligiao']) && $_POST['pacienteReligiao']=="Evangelico") { ?>checked<?php  } ?> ><label for="religiao2"> Evangélico </label>
										</div>
										<div class="col-3">
											<input type="radio" name="pacienteReligiao" value="Outros" id="3" <?php if(isset($_POST['pacienteReligiao']) && $_POST['pacienteReligiao']=="Outros") { ?>checked<?php  } ?> > <label for="religiao3"> Outros </label>
										</div>
				    				</div>
				 				</div>
							</div>
						</div>
					</div>
						
					<div class="form-row"><!-- Inicia uma nova linha no formulário-->
						<div class="col">
							<label for="sexo">Sexo:</label>
							
							<div class="form-check">
								<div class="container">
									<div class="row">
										<div class="col-3">
											<input type="radio" name="pacienteSexo" value="Homem" <?php if(isset($_POST['pacienteSexo']) && $_POST['pacienteSexo']=="Homem") { ?>checked<?php  } ?>><label for="sexo1"> Homem </label>
										</div>
										<div class="col-3">
											<input type="radio" name="pacienteSexo" value="Mulher" <?php if(isset($_POST['pacienteSexo']) && $_POST['pacienteSexo']=="Mulher") { ?>checked<?php  } ?>> <label for="sexo2"> Mulher</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col">
							<label for="peso">Peso(EX - 98.45):</label>
							<input type="text" class="form-control" placeholder="Digite o peso do paciente" name="pacientePeso" value="">
						</div>
					</div>
				  
					<div class="form-row"><!-- Inicia uma nova linha no formulário-->
						<div class="col">
							<label for="altura">Altura(EX - 1.80): </label>
							<input type="text" class="form-control" placeholder="Digite a altura do paciente" name="pacienteAltura" value="">
						</div>
						
						<div class="col">
							<label for="estado">Estado:</label>
							<div class="form-check">
							
								<div class="container">
									<div class="row">
										<div class="col-3">
											<input type="radio" name="pacienteEstado" value="Ativo" <?php if(isset($_POST['pacienteEstado']) && $_POST['pacienteEstado']=="A") { ?>checked<?php  } ?>> <label for="Ativo">Ativo</label>
										</div>
										<div class="col-3">
											<input type="radio" name="pacienteEstado" value="Inativo" <?php if(isset($_POST['pacienteEstado']) && $_POST['pacienteEstado']=="I") { ?>checked<?php  } ?>>  <label for="inativo">Inativo</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				  
					<div class="form-row"> <!-- Inicia uma nova linha no formulário-->
						<div class="col-5">
							<label for="etnia">Etnia: </label>
							<div class="form-check">
								<div class="container">
									<div class="row">
										<div class="col-3">
											<input type="radio" name="pacienteEtnia" value="Branco" id="1" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Branco") { ?>checked<?php  } ?>> <label for="branco">Branco</label>
										</div>
										<div class="col-3">
											<input type="radio" name="pacienteEtnia" value="Pardo" id="2" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Pardo") { ?>checked<?php  } ?>><label for="pardo">Pardo</label>
										</div>
										<div class="col-3">
											<input type="radio" name="pacienteEtnia" value="Negro" id="3" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Negro") { ?>checked<?php  } ?>><label for="negro">Negro</label>
										</div>
										<div class="col-3">
											<input type="radio" name="pacienteEtnia" value="Indio" id="4" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Indio") { ?>checked<?php  } ?>><label for="indio">Índio</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				  
					<div class="form-row">
						<input type="submit" class="btn btn-dark" name="pacienteRegistro" value="Cadastrar" class="btnRegister">
					</div>

				</form>
			  
			</div>

		</section>
		
		<br>
		<br>
		
		<footer class="text-center"> <!-- Rodapé da página -->
			<div class="container">
				<p class="mb-0">Lar Santo Antônio</p>
				<div class="row">
					<div class="col-12 blockquote-footer">
						<p>Copyright © Unopar.</p>
					</div>
				</div>
			</div>
		</footer>
	  
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/bootstrap.bundle.min.js"></script> 
		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/bootstrap.js"></script>
	</body>
</html>