<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php')?>
<?php
	if(isset($_POST["ano_camp"]))
		{
			$query = "Insert into `anotacoesprontuario`(`ano_pac_id`, `ano_camp`,`ano_tipoAnotacao`, `ano_dt`) values ('".$_POST["paciente"]."','".$_POST["ano_camp"]."','Texto','".$_POST["ano_dt"]."')";
			mysqli_query($con, $query);
			unset($_POST);
		}
?>
		<header> 
			<div class="jumbotron">
				<div class="container">
					<div class="row"> <!-- Cria uma linha -->
						<div class="col-12"> <!-- Espaçamento de colunas -->
							<h1 class="text-center"> Cadastro de Anotaçoes </h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
		<!------------------------------------------anotacações-------------------------------------->
		<div class="container">
		   <form method="post" name="frmResp" action="" onchange="this.form.submit();">
		   		<div class="form-row">
				  <div class="col-2">
				    <p>Paciente</p>
				    <select name="paciente" class="form-control">
				    <option>Selecione:</option>
					    <?php $result = mysqli_query($con,"SELECT pac_id, pac_nome, pac_sobrenome FROM paciente order by pac_nome;");
					        while($row = mysqli_fetch_array($result)){
							    echo "<option value=". $row['pac_id'] .">". $row['pac_nome'] ." ". $row['pac_sobrenome']."</option>"; } ?>
				    </select>
				   	<p>Data</p>
					<input class="form-control" type="date" name="ano_dt" value="<?php if(isset($_POST["ano_dt"])) echo $_POST["ano_dt"]?>">
				  </div>
					<div class="form-group col">
					<p>Anotações</p>
					<input class="form-control" type="text" name="ano_camp" value="<?php if(isset($_POST["'ano_camp"])) echo $_POST["ano_camp"]?>" placeholder="Digite a anotação">
			        </div>
				</div>
				</br>

				<!-----------------------------------botão------------------------------------------>

				<div class="form-row">
					<div class="col-4">
				
					</div>
					<div class="col-4">
						<hr></hr>
						<center>
							<input class="btn btn-dark" type="submit" class="btn btn-dark" name="frmSubmit" value="Cadastrar">
						</center>
					</div>
					<div class="col-4">
				
					</div>
				</div>
				
				<!--BOTÃO ANTIGO CASO PRECISE-->
				<!--<input class="form-control" type="submit" name="frmSubmit" value="Cadastrar">-->

				<!-----------------------------------botão------------------------------------------>

		   </form>
		</div>
		<!------------------------------------------Rodapé------------------------------------------->
    </body>
</html>