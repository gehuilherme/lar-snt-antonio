		<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php');
			  include("modalReligiao.php");?>
		<script src="jsCadPac.js"></script>
		<!------------------------------------------Menu--------------------------------------------->
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
		<!------------------------------------------Menu--------------------------------------------->
			<!------------------------------------------Cadastro----------------------------------------->		
			<div class="container">
			<form id="frmPaciente" method="post" name="frmPac" action="verificarFormPaciente.php">
			<!------------------------------------------Nome do Idoso------------------------------------>
			<div id="parte1">
				<div class="form-row">
					<div class="col">
							<label>Nome do idoso:</label>
							<input type="text" class="form-control" name="pacNome" value="<?php if(isset($_POST['pacNome'])) echo $_POST['pacNome'] ?>" placeholder="Digite o nome do paciente"/>
					</div>
					
					<div class="col">
						<label>Sobrenome do idoso:</label>
						<input type="text" name="pacSobrenome" class="form-control" value="<?php if(isset($_POST['pacSobrenome'])) echo $_POST['pacSobrenome'] ?>" placeholder="Digite o sobrenome do paciente"/>
					</div>
				</div>
			<!------------------------------------------Nome do Idoso------------------------------------>
			<!------------------------------------------Dados do Idoso----------------------------------->
			<div class="form-row">
				<div class="col-3">
					<label>RG:</label>
					<input type="text" class="form-control" placeholder="Digite o RG do paciente" maxlength="9" name="pacRG" value="<?php if(isset($_POST['pacRG'])) echo $_POST['pacRG'] ?>"/>
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
			</div></br>
				<div class="form-row">
					<div class="col-10"></div>
					<div class="col-2">
					<button id="butaoParte1" class="btn btn-dark" type="button">Proxima</button>
					</div>
				</div>
			</div>
			<!------------------------------------------Religião------------------------------------------>	
			<div id="parte2">
			<div class="form-row">
				<div class="col-4">
					<label>Religião:</label>
		 			<select onchange="//javascript:window.open ('registroRel.php', 'popup') ;return false" class="form-control" name="pacReligiao">
						<option>Selecione:</option>
						<option value="0">Não Possui</option>
							<?php
							$result = mysqli_query($con,"SELECT rel_id, rel_nome FROM religiao order by rel_nome;");
							while($row = mysqli_fetch_array($result))
							{
								echo "<option value=". $row['rel_id'] .">". $row['rel_nome'] ."</option>";
							}
							?>
		 			</select>
				</div>
			<!------------------------------------------Religião------------------------------------------>
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
			</div></br>
				<div class="form-row">
					<div class="col-5"></div>
					<div class="col-2">
					<button class="btn btn-dark" type="button" data-toggle="modal" data-target="#myModal">Nova Religiao</button>
					</div>
					<div class="col-3"></div>
					<div class="col-2">
					<button id="butaoParte2" class="btn btn-dark" type="button">Proxima</button>
					</div>
				</div>			
			</div>
			<!------------------------------------------Dados do Idoso------------------------------------>
			<!------------------------------------------Chegada Asilo------------------------------------->
			<div id="parte3">
			<div class="form-row">
				<div class="col-4">
					<label>Encaminhado:</label>
					<input class="form-control" placeholder="O paciente foi encaminhado por quem?" type="text" name="pacEncaminhado" value=""/>
				</div>
				<div class="col-4">
					<label>Condição de Chegada:</label>
					<select class="form-control" name="pacCondChegada" onchange="document.getElementById('descChegIdo').disabled = false;">
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
						<option value="0">0 - Sem Auxilio</option>
						<option value="I">1 - Muletas</option>
						<option value="II">2 - Cadeirantes</option>
						<option value="III">3 - Acamado</option>
					</select>
				</div>
			</div>
			<!------------------------------------------Chegada Asilo------------------------------------->
			<!------------------------------------------Doenças------------------------------------------->
			<div class="form-row">
				<div class="col-2">
					<label>Possui algum vicio:</label>
					<select class="form-control" name="pacVicio" id="vicioID">
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
					<select class="form-control" onBlur="liberar(this)" name="pacDiabetico">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-4">
					<label>Fez alguma cirurgia:</label>
					<select id="cirurgiaID" class="form-control" name="pacCirurgia">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>	
			</div></br>
				<div class="form-row">
					<div class="col-10"></div>
					<div class="col-2">
					<button id="butaoParte3" class="btn btn-dark" type="button">Proxima</button>
					</div>
				</div>
			</div>
			<div id="parte4">
			<div class="form-row">
				<div class="col-3">
					<label>Possui Ulcera de Pressão:</label>
					<select id="ulceraEstagio" class="form-control" name="pacUlcera">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-3">
					<label>Qual estágio da ulcera(Caso Tiver):</label>
					<select id="pacUlceraEsta" class="form-control" name="pacUlceraEstag">
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
					<select id="medicamentoUsoID" class="form-control" name="pacMedUsoCont">
						<option>Selecione:</option>
			 	 	  	<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
					<label>Alérgico a algum medicamento</label>
					<select id="alergiaMediID" class="form-control" name="pacMedAlergico">
						<option>Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
			</div></br>
				<div class="form-row">
					<div class="col-10"></div>
					<div class="col-2">
					<button id="butaoParte4" class="btn btn-dark" type="button">Proxima</button>
					</div>
				</div>
			</div>
			<!-------------------------------------------------------------------------------------------->
			<div id="parte5">
			<div class="form-row">
				<div class="col-3">
					<label>Descrição da Chegada do idoso:</label>
					<input id="descChegIdo" type="text" class="form-control" placeholder="EX: o idoso foi encontrado na rua e encaminhado ao lar santo antônio..." name="pacChegadaDesc" value="<?php if(isset($_POST['pacChegadaDesc'])) echo $_POST['pacChegadaDesc'] ?>"/>
				</div>
				<div class="col-3">
					<label>Descrição do vicio do Idoso:</label>
					<input id="descVicIdo" type="text" class="form-control" placeholder="EX: o idoso era viciado em cervaja, isso trouxe-lhe os seguintes problemas:..." name="pacVicioDesc" value="<?php if(isset($_POST['pacVicioDesc'])) echo $_POST['pacVicioDesc'] ?>"/>
				</div>
				<div class="col-3">
					<label>Descrição da cirurgia do Idoso:</label>
					<input id="descCirIdo" type="text" class="form-control" placeholder="EX: o idoso teve problemas com seu rim, devido a isso ele foi obrigado a fazer a remoção..." name="pacCiruDesc" value="<?php if(isset($_POST['pacCiruDesc'])) echo $_POST['pacCiruDesc'] ?>"/>
				</div>
				<div class="col-3">
					<label>Descrição do medicamento do Idoso:</label>
					<input id="descMedIdo" type="text" class="form-control" placeholder="EX: o idoso faz uso dos seguintes medicamentos:..." name="pacMediDesc" value="<?php if(isset($_POST['pacMediDesc'])) echo $_POST['pacMediDesc'] ?>"/>
				</div>
			</div>
			<div class="form-row">
					<label>Descrição da alergia do Idoso:</label>
					<input id="descAleIdo" type="text" class="form-control" placeholder="EX: o idoso tem alergia a gatos." name="pacAlerDesc" value="<?php if(isset($_POST['pacAlerDesc'])) echo $_POST['pacAlerDesc'] ?>"/>
				<div class="col-12">
				</div>
			</div>
			
			<!------------------------------------------Doenças------------------------------------------->
			<!------------------------------------------Botão--------------------------------------------->
			<div class="form-row">
				<div class="col-4">
				
				</div>
				<div class="col-4">
					<hr></hr>
					<center>
						<input type="submit" class="btn btn-dark" onclick="submeterNovoRegistro('frmPaciente')" value="Cadastrar"/>
					</center>
				</div>
				<div class="col-4">
				
				</div>
			</div>
			</div>
			<!------------------------------------------Botão--------------------------------------------->				
			<div class="form-row">
				<div class="col">
					
				</div>
			</div>		
			
			</form>
		</div>
		<!------------------------------------------Cadastro----------------------------------------->		
	</body>
</html>