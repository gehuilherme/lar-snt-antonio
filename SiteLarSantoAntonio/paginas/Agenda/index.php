	<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php');
 	include 'verificarForminsert.php'; ?>
	  
		<header> 
			<div class="jumbotron">
				<div class="container">
					<div class="row"> 
						<div class="col-12"> 
							<h1 class="text-center">Cadastro de Compromissos</h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
	<!------------------------------------------Menu--------------------------------------------->
	<!----------------------------------------Agenda--------------------------------------------->
		<div class="container">
			<form name="formAgenda" method="post" action="" onchange="this.form.submit();">
				<!-----------------------------------Selecão de paciente--------------------------------------------->
				<div class="form-row">
					<div class="col">
						<label>Selecione o paciente</label>
						<select class="form-control" name="paciente">
						<option>Selecione:</option>
							<?php
								$result = mysqli_query($con,"SELECT pac_id, pac_nome, pac_sobrenome FROM paciente order by pac_nome;");
								while($row = mysqli_fetch_array($result))
								{
									echo "<option value=". $row['pac_id'] .">". $row['pac_nome'] ." ". $row['pac_sobrenome']."</option>";
								}
							?>
						</select>
					</div>
				</div>
				<!-----------------------------------Selecão de paciente--------------------------------------------->
				<!--------------------------------------Compromisso-------------------------------------------------->
				<div class="form-row">
					<div class="col">
						<label>Digite o Compromisso:</label>
						<input class="form-control" type="text" name="evento" value="<?php if(isset($_POST['evento'])) echo $_POST['evento'];?>" placeholder="Digite o compromisso"> 
					</div>
				</div>
				<!--------------------------------------Compromisso-------------------------------------------------->
				<!--------------------------------------Data do Compromisso------------------------------------------>
				<div class="form-row">
					<div class="col">
						<label>Informe a Data:</label>
						<input class="form-control" type="date" name="dateEvento" value="">
					</div>
				<!--------------------------------------Data do Compromisso------------------------------------------>
				<!--------------------------------------Horario do Compromisso--------------------------------------->
					<div class="col">
						<label>Informe o horario</label>
						<input class="form-control" type="time" name="horaEvento" value="">
					</div>
				</div>
				<!--------------------------------------Horario do Compromisso--------------------------------------->
				<!--------------------------------------Endereço do Compromisso-------------------------------------->	
				<div class="form-row">
					<div class="col">
						<label>Digite o Endereço</label>
						<input class="form-control" type="text" class="boxEvento" name="endereco" value="<?php if(isset($_POST['endereco'])) echo $_POST['endereco'];?>" placeholder="Digite o endereço">
					</div>
					
					<div class="col">
						<label>Digite o Número</label>
						<input class="form-control" type="text" class="boxEvento" name="numero" value="<?php if(isset($_POST['numero'])) echo $_POST['numero'];?>" placeholder="Digite o número">
					</div>
				</div>		
				<!--------------------------------------Endereço do Compromisso-------------------------------------->
				<!--------------------------------------Botão-------------------------------------------------------->
				<div class="form-row">
					<div class="col-4">
				
					</div>
					<div class="col-4">
						<hr></hr>
						<center>
							<input class="btn btn-dark" type="submit" class="btn btn-dark" name="InsertAgenda" value="Cadastro">
						</center>
					</div>
					<div class="col-4">
				
					</div>
				</div>
				<!--------------------------------------Botão-------------------------------------------------------->
			</form>	
		</div>
	<!----------------------------------------Agenda--------------------------------------------->	
		<br>
		<br>
		<!--------------------------------------Rodapé-------------------------------------------------------->
		<footer class="text-center"> 
			<div class="container">
				<p class="mb-0">Lar Santo Antônio</p>
				<div class="row">
					<div class="col-12 blockquote-footer">
						<p>Copyright © Unopar.</p>
					</div>
				</div>
			</div>
		</footer>
		<!--------------------------------------Rodapé-------------------------------------------------------->
	  
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/bootstrap.bundle.min.js"></script> 
		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/bootstrap.js"></script>
	</body>
</html>