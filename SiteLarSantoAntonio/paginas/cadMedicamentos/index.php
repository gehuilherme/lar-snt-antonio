	<!------------------------------------------Menu--------------------------------------------->
	<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php');
		      include("verificarFormMedicamento.php");
		?>
		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row"> 
						<div class="col-12">
							<h1 class="text-center">Cadastro de Medicamentos</h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
	<!------------------------------------------Menu--------------------------------------------->
	<!------------------------------------------Cadastro----------------------------------------->
		<div class="container">
			<form method="post" name="frmMedicamento" action="" onchange="this.form.submit();">
				<!-----------------------------------Medicamento Nome e Dosagem-------------------------------------->
				<div class="form-row">
					<div class="col">
						<p>Nome do medicamento:</p>
						<input class="form-control" type="text" name="medNome" value="<?php if(isset($_POST['medNome'])) echo $_POST['medNome']?>" placeholder="Digite o nome do medicamento"/>
					</div>					
				<!-----------------------------------Medicamento Nome e Dosagem-------------------------------------->
					<div class="col">
						<p>Informe a Dosagem:</p>
						<input class="form-control" type="text" name="medDos" value="<?php if(isset($_POST["medDos"])) echo $_POST["medDos"]?>"placeholder="Digite a Dosagem">
					</div>
				<!-----------------------------------Princípio Ativo------------------------------------------>
					<div class="col">
						<p>Princípio Ativo:</p>
						<input class="form-control" type="text" name="medInf" value="<?php if(isset($_POST["medInf"])) echo $_POST["medInf"]?>"placeholder="Digite o Princípio Ativo">
					</div>
				<!-----------------------------------Princípio Ativo------------------------------------------>
				</div>
				
				<!-----------------------------------Botão-------------------------------------------------------->
				<div class="form-row">
					<div class="col-4">
					
					</div>
					<div class="col-4">
						<hr></hr>
						<center>
							<input class="btn btn-dark" type="submit" name="medEnviar" value="Cadastrar Medicamento"/>
						</center>
					</div>
					<div class="col-4">
				
					</div>
				</div>
			</form>	
				<!-----------------------------------Botão-------------------------------------------------------->
		</div>
		</br>
	<!------------------------------------------Cadastro----------------------------------------->
</body>
</html>