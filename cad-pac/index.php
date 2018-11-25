<?php include"verificarForm.php";?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Pacientes - Lar Santo Antônio</title>
		<link href="../css/bootstrap.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="../js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>

	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--Navegação -->
			<a class="navbar-brand" href="#">Lar Santo Antônio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"> <a class="nav-link" href="#">Início</a> </li>
					
					 <li class="nav-item dropdown">
       					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Cadastros
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Cadastro de Pacientes</a>
          					<a class="dropdown-item" href="#">Cadastro de Medicamentos</a>
        				</div>
      				</li>
					
					<li class="nav-item dropdown">
       					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Agenda
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Cadastrar evento</a>
          					<a class="dropdown-item" href="#">Modificar evento</a>
        				</div>
      				</li>
					
					<li class="nav-item non-active"> <a class="nav-link" href="#">Ajuda</a> </li>
				</ul>
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
	  
		<section>
			<div class="container">
		
				<div class="form-row">
					<div class="col">
						<form method="post" name="frmPac" action="" onchange="this.form.submit();">
							<label>Nome do idoso:</label>
							<input type="text" class="form-control" name="pacNome" value="<?php if(isset($_POST['pacNome'])) echo $_POST['pacNome'] ?>" placeholder="Digite o nome do paciente"/>
					</div>
					
					<div class="col">
						<label>Sobrenome do idoso:</label>
						<input type="text" name="pacSobrenome" class="form-control" value="<?php if(isset($_POST['pacSobrenome'])) echo $_POST['pacSobrenome'] ?>" placeholder="Digite o sobrenome do paciente"/>
					</div>
				</div>
				
			<div class="form-row">
				<div class="col-3">
					<label>RG:</label>
					<input type="text" class="form-control" placeholder="Digite o RG do paciente" maxlength="10" name="pacRG" value="<?php if(isset($_POST['pacRG'])) echo $_POST['pacRG'] ?>"/>
				</div>
				<div class="col-3">
					<label>CPF:</label>
					<input type="text" class="form-control" placeholder="Digite o CPF do paciente" maxlength="11" name="pacCPF" value="<?php if(isset($_POST['pacCPF'])) echo $_POST['pacCPF'] ?>"/>
				</div>
				<div class="col-3">
					<label>Data de nascimento</label>
					<input type="date" class="form-control" name="pacDate" value="" />
				</div>
				<div class="col-3">
					<label>Estado Civil:</label>
					<select class="form-control" name="pacEstCiv">
						<option>Selecione:</option>
		 				<option value="Solteiro">Solteiro</option>
						<option value="Casado">Casado</option>
						<option value="Viuvo">Viuvo</option>
					</select>
				</div>
			</div>
					
			<div class="form-row">
				<div class="col-4">
					<label>Religião:</label>
		 			<select class="form-control" name="pacReligiao">
						<option>Selecione:</option>
							<?php
							$result = mysqli_query($con,"SELECT rel_id, rel_nome FROM religiao order by rel_nome;");
							while($row = mysqli_fetch_array($result))
							{
								echo "<option value=". $row['rel_id'] .">". $row['rel_nome'] ."</option>";
							}
							?>
		 			</select>
				</div>
				<div class="col-4">
					<label>Data de entrada</label>
					<input type="date" name="pacDateEnt" class="form-control" value=""/>
				</div>
				<div class="col-4">
					<label>Sexo:</label>
					<select class="form-control" name="pacSexo">
						<option>Selecione:</option>
				 		<option value="Homem">Homem</option>
						<option value="Mulher">Mulher</option>
					</select>
				</div>
			</div>
					
			<div class="form-row">
				<div class="col-4">
					<label>Etnia</label>
					<select class="form-control" name="pacEtnia">
						<option>Selecione:</option>
				 		<option value="Branco">Branco</option>
						<option value="Pardo">Pardo</option>
						<option value="Negro">Negro</option>
						<option value="Indio">Indio</option>
					</select>
				</div>
				<div class="col-4">
					<label>Peso:</label>
					<input class="form-control" placeholder="Digite o peso do paciente" type="text" name="pacPeso" value=""/>
				</div>
				<div class="col-4">
					<label>Altura:</label>
					<input class="form-control" placeholder="Digite a altura do paciente" type="text" name="pacAltura" value=""/>
				</div>
			</div>
				
			<div class="form-row">
				<div class="col-4">
					<label>Encaminhado:</label>
					<input class="form-control" placeholder="O paciente foi encaminhado por quem?" type="text" name="pacEncaminhado" value=""/>
				</div>
				<div class="col-4">
					<label>Condição de Chegada:</label>
					<select class="form-control" name="pacCondChegada">
						<option>Selecione:</option>
						<option value="Consciente">Consciente</option>
						<option value="Comunicativo">Comunicativo</option>
						<option value="Orientado">Orientado</option>
						<option value="Confuso">Confuso</option>
					</select>
				</div>
				<div class="col-4">
					<label>Grau de Dependencia:</label>
					<select class="form-control" name="pacGrauDep">
						<option>Selecione:</option>
						<option value="0">0</option>
						<option value="I">1</option>
						<option value="II">2</option>
						<option value="III">3</option>
					</select>
				</div>
			</div>

			<div class="form-row">
				<div class="col-2">
					<label>Possui algum vicio:</label>
					<select class="form-control" name="pacVicio">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">
					<label>Possui algum vicio:</label>
					<select class="form-control" name="pacVicio">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">
					 <label>Hipertenso:</label>
					<select class="form-control" name="pacHipertenso">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">
					 <label>Diabetico:</label>
					<select class="form-control" name="pacDiabetico">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-4">
					<label>Fez alguma cirurgia:</label>
					<select class="form-control" name="pacCirurgia">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>	
			</div>
			
			<div class="form-row">
				<div class="col-3">
					<label>Possui Ulcera de Pressão:</label>
					<select class="form-control" name="pacUlcera">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-3">
					<label>Qual estágio da ulcera(Caso Tiver):</label>
					<select class="form-control" name="pacUlceraEstag">
						<option>Selecione:</option>
						<option value="0">0</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
					</select>
				</div>
				<div class="col-3">
					<label>Crise Convulsiva:</label>
					<select class="form-control" name="pacCriseConv">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-3">
					<label>Faz uso de medicamento contínuo</label>
					<select class="form-control" name="pacMedUsoCont">
						<option>Selecione:</option>
			 	 	  	<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
					<label>Alérgico a algum medicamento</label>
					<select class="form-control" name="pacMedAlergico">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
			</div>
			
			<div class="form-row">
				<div class="col-4">
				
				</div>
				<div class="col-4">
					<hr></hr>
					<center>
						<input class="btn btn-dark" type="submit" name="pacienteRegistro" value="Cadastrar" class="btnRegister">
					</center>
				</div>
				<div class="col-4">
				
				</div>
			</div>
			
				
			<div class="form-row">
				<div class="col">
					
				</div>
			</div>		
			
		</form>
		</div>
	</body>
</html>