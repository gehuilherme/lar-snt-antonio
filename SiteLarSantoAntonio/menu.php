<?php include($_SERVER['DOCUMENT_ROOT']. "/SiteLarSantoAntonio/pagExtras/DatabaseConnection.php"); ?>
<!DOCTYPE html>
	<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<script src="/SiteLarSantoAntonio/js/jquery-3.3.1.min.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    	<link href="/SiteLarSantoAntonio/css/bootstrap.css" rel="stylesheet">
		<link href="/SiteLarSantoAntonio/css/datatables.min.css" rel="stylesheet">
    	<script src="/SiteLarSantoAntonio/js/bootstrap.min.js"></script>
    	<script src="/SiteLarSantoAntonio/js/bootstrap.bundle.min.js"></script> 
		<script src="/SiteLarSantoAntonio/js/datatables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css"/>
		<script type="text/javascript" src="js/dataTables.buttons.min.js"></script> 

	</head>
		<body><!------------------------------------------Menu------------------------------------------->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
			<a class="navbar-brand" href="/SiteLarSantoAntonio/index.php">Lar Santo Antônio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"> <a class="nav-link" href="/SiteLarSantoAntonio/index.php">Início</a> </li>
					<!------------------------------------------Cadastros------------------------------------------->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cadastros
						</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/cadPaciente/index.php">Cadastro de Pacientes</a>
							<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/cadResponsavel/index.php">Cadastro de Responsavel</a>
          					<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/cadMedicamentos/index.php">Cadastro de Medicamentos</a>
							<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/cadReligiao/index.php">Cadastro de Religião</a>
							<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/Agenda/index.php">Cadastro de Evento</a>
							<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/Anotacoes/index.php">Adicionar Anotação</a>
							<!--<a class="dropdown-item" href="cadDoe.php">Cadastro de Doenças</a>-->
							<!--<a class="dropdown-item" href="cadastroDoencaPaciente.php">Idoso Doente</a>-->
							<!--<a class="dropdown-item" href="amedicamentos1.1.php">Idoso Medicamento</a>-->
							<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/cadAgendaMed/index.php">Agenda de Medicamento</a>
        				</div>
      				</li>
					<!------------------------------------------Cadastros------------------------------------------->
					<!------------------------------------------Prontuarios------------------------------------------->
					<li class="nav-item active"> <a class="nav-link" href="/SiteLarSantoAntonio/paginas/prontuario/index.php">Prontuario</a> </li>

					<!--<li class="nav-item dropdown">
       					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Prontuario
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="selectShow.php">Prontuario</a>
          					<a class="dropdown-item" href="trabson.php">Agenda de Medicamentos</a>
          				</div>
      				</li>-->
					<!------------------------------------------Prontuarios------------------------------------------->
					<!------------------------------------------Agenda------------------------------------------->
					<li class="nav-item dropdown">
       					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Agenda
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="/SiteLarSantoAntonio/index.php">Agenda de Compromisso</a>
							<a class="dropdown-item" href="/SiteLarSantoAntonio/paginas/agendaMed/index.php">Agenda de Medicamentos</a>
          				</div>
      				</li>
					<!------------------------------------------Agenda------------------------------------------->
					<li class="nav-item non-active"> <a class="nav-link" href="#">Ajuda</a> </li>
				</ul>
			</div>
		</nav>
		<!------------------------------------------Menu------------------------------------------->
