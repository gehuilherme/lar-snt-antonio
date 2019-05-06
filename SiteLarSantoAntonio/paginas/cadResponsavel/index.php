
		<!------------------------------------------Menu--------------------------------------------->
		<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php')?>
		<header> 
			<div class="jumbotron">
				<div class="container">
					<div class="row"> <!-- Cria uma linha -->
						<div class="col-12"> <!-- Espaçamento de colunas -->
							<h1 class="text-center">Cadastro de Responsáveis</h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
		<!------------------------------------------Menu--------------------------------------------->
		<!------------------------------------------Cadastro----------------------------------------->
		<div class="container">
		<form method="post" name="frmResp" action="" onchange="this.form.submit();">
			<!------------------------------------------Paciente------------------------------------->
			<div class="form-row">
				<div class="col">
				<select name="paciente" class="form-control">
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
			<!------------------------------------------Paciente------------------------------------->
			<br>
			<div class="form-row">
			<!------------------------------------------Nome do responsavel-------------------------->
				<div class="col">
					<p>Nome responsavel:</p>
					<input class="form-control" type="text" name="resNome" value="<?php if(isset($_POST['resNome'])) echo $_POST['resNome']; ?>" placeholder="Digite o nome do responsavel"/>
				</div>	
			
				<div class="col">
					<p>Sobrenome:</p>
					<input class="form-control" type="text" name="resSobrenome" value="<?php if(isset($_POST['resSobrenome'])) echo $_POST['resSobrenome']; ?>" placeholder="Digite o sobrenome do responsavel"/>
				</div>
			
			</div>
			<!------------------------------------------Nome do responsavel-------------------------->
			<!------------------------------------------Dados do responsavel------------------------->
			<div class="form-row">
					<div class="col">
						<p>CPF responsavel:</p>
						<input class="form-control" placeholder="Digite o CPF do responsável" maxlength="11" name="resCPF" value="<?php if(isset($_POST['resCPF'])) echo $_POST['resCPF']; ?>" placeholder="Digite o CPF do responsavel"/>
					</div>
			
					<div class="col">
						<p>Data de nascimento</p>
						<input class="form-control" type="date" name="resDate" value="">
					</div>
			</div>
			<!------------------------------------------Dados do responsavel------------------------->
			<!------------------------------------------Endereço do responsavel---------------------->
			<div class="form-row">
			
				<div class="col">
					<p>Estado(UF):</p>
        			<select name="resUF" class="form-control">
        				<option value="AC">Acre</option>
        				<option value="AL">Alagoas</option>
        				<option value="AP">Amapá</option>
        				<option value="AM">Amazonas</option>
        				<option value="BA">Bahia</option>
        				<option value="CE">Ceará</option>
        				<option value="DF">Distrito Federal</option>
        				<option value="ES">Espírito Santo</option>
        				<option value="GO">Goiás</option>
        				<option value="MA">Maranhão</option>
        				<option value="MT">Mato Grosso</option>
        				<option value="MS">Mato Grosso do Sul</option>
        				<option value="MG">Minas Gerais</option>
        				<option value="PA">Pará</option>
        				<option value="PB">Paraíba</option>
        				<option value="PR">Paraná</option>
        				<option value="PE">Pernambuco</option>
        				<option value="PI">Piauí</option>
        				<option value="RJ">Rio de Janeiro</option>
        				<option value="RN">Rio Grande do Norte</option>
        				<option value="RS">Rio Grande do Sul</option>
        				<option value="RO">Rondônia</option>
        				<option value="RR">Roraima</option>
        				<option value="SC">Santa Catarina</option>
        				<option value="SP">São Paulo</option>
        				<option value="SE">Sergipe</option>
        				<option value="TO">Tocantins</option>
        			</select>
				</div>
				<div class="col-3">
					<p>Cidade:</p>
					<input class="form-control" type="text" name="resCidade" value="<?php if(isset($_POST['resCidade'])) echo $_POST['resCidade']; ?>" placeholder="(Ex: Curitiba)"/>
				</div>
				
				<div class="col-3">
					<p>Rua:</p>
					<input class="form-control" type="text"  name="resRua" value="<?php if(isset($_POST['resRua'])) echo $_POST['resRua']; ?>" placeholder="(Ex: Rua das Flores)"/>
				</div>
				<div class="col-3">
					<p>Número da rua:</p>
					<input class="form-control" type="text" maxlength="10" name="resNum" value="<?php if(isset($_POST['resNum'])) echo $_POST['resNum']; ?>" placeholder="(Ex: 314)"/>
				</div>
				<div class="col-4">
					<p>DDD:</p>
					<input class="form-control" type="text" maxlength="2" name="res_telDDD" value="<?php if(isset($_POST['res_telDDD'])) echo $_POST['res_telDDD']; ?>" placeholder="(Ex: 43)"/>
				</div>
				<div class="col-8">
					<p>Número do telefone:</p>
					<input class="form-control" type="text" maxlength="9" name="restelNum" value="<?php if(isset($_POST['restelNum'])) echo $_POST['restelNum']; ?>" placeholder="(Ex: 314423123)"/>
				</div>
			</div>
			
			<!------------------------------------------Endereço do responsavel---------------------->
			<!------------------------------------------Botão---------------------------------------->
			<div class="form-row">
				<div class="col-4">
				
				</div>
				<div class="col-4">
					<hr></hr>
					<center>
					<input class="btn btn-dark" type="submit" name="frmSubmit" value="Cadastrar"/>
					</center>
				</div>
				<div class="col-4">
				
				</div>
			</div>
				
		</div>
			<!------------------------------------------Botão---------------------------------------->
		</form>
		
		</div>
		<!------------------------------------------Cadastro----------------------------------------->
    </body>
</html>