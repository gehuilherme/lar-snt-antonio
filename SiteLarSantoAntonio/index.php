<?php 
	require_once("menu.php");
	require_once("extrasIndex/modalEditar.php")
?>

		<script src="extrasIndex/jsIndex.js"></script>
		<!------------------------------------------Menu--------------------------------------------->
		<header> 
			<div class="jumbotron">
				<div class="container">
					<div class="row"> <!-- Cria uma linha -->
						<div class="col-12"> <!-- Espaçamento de colunas -->
							<h1 class="text-center"> Início </h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
		<!------------------------------------------Menu--------------------------------------------->
		<!------------------------------------------Agenda------------------------------------------->
		<div id="mostrarEvento" class="container">
			<table id='dataTabela' class='display table'> 
				<thead class='thead'>
					<tr>
						<th scope='col'>Nome</th>
						<th scope='col'>Compromisso</th>
						<th scope='col'>Hora</th>
						<th scope='col'>Data</th>
						<th scope='col'>Rua</th>
						<th scope='col'>Numero</th>
					</tr>
				</thead>
			</table>
			<div class="form-row">
				<form id="UpdateTable" action="extrasIndex/update.php" method="post">
					<input class="btn btn-dark" type="submit" id="alterarCampos" value="Atualizar"/>
				</form>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<button data-toggle="modal" data-target="#myModal" id="modalIndexbtn" class="btn btn-dark">Editar</button>
			</div>
		</div>
		<!------------------------------------------Agenda------------------------------------------->
		<!------------------------------------------Rodapé------------------------------------------->
		<footer class="text-center">
			<div class="container">
				<p class="mb-0">Lar Santo Antônio</p>
			<div class="row">
			<div class="col-12 blockquote-footer">
            <p>Copyright © ADS.</p>
			</div>
			</div>
			</div>
		</footer>
		<!------------------------------------------Rodapé------------------------------------------->
</body>
</html>