<?php 
	include("menu.php");
	date_default_timezone_set('America/Sao_Paulo');
	$data = date("Y/m/d");
	$result = mysqli_query($con,"select pac_nome, pac_sobrenome, age_camp, age_hora, age_dt, age_rua, age_num from agenda JOIN paciente where age_pac_id = pac_id order by age_dt,age_hora");
	$contador = mysqli_query($con, "SELECT COUNT(*) FROM agenda");
	$dataatual = date('d/m/y H:i');
?>

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
		<center><div id="mostrarEvento" class="container">
			<?php if (mysqli_fetch_array($result) != 0){ echo 
			"<table class='table'> 
				<thead class='thead-dark'>
					<tr>
						<th scope='col'>Nome</th>
						<th scope='col'>Compromisso</th>
						<th scope='col'>Hora</th>
						<th scope='col'>Data</th>
						<th scope='col'>Rua</th>
						<th scope='col'>Numero</th>
					</tr>
				</thead>";}
					else
					{
						echo "<center><h3>Não há eventos a serem mostrados!</h3></center>";
					}?>
				
				<?php while($dado = mysqli_fetch_array($result)){
						//if($dado['age_dt'] > $date ){
				?>
				<tbody>
					<tr>
						<td><?php echo $dado['pac_nome']." ".$dado['pac_sobrenome']; ?></td>
						<td><?php echo $dado['age_camp']; ?></td>
						<td><?php echo $dado['age_hora']; ?></td>
						<td><?php echo date('d/m/Y', strtotime($dado['age_dt']));    ?></td>
						<td><?php echo $dado['age_rua'];  ?></td>
						<td><?php echo $dado['age_num'];  ?></td>
					</tr>"
					<?php } ?>
				</tbody>
			</table>
		</div>
		</center>
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