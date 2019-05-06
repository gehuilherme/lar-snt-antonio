	<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php');
 		  include "agendaMedVerific.php";?>
		
	<header> <!-- Deixa o fundo cinza -->
			<div class="jumbotron">
				<div class="container">
					<div class="row"> <!-- Cria uma linha -->
						<div class="col-12"> <!-- Espaçamento de colunas -->
							<h1 class="text-center">Agendar medicação</h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
	<div class="container">
		<form method="post" action="<?php //cadastrarAgenda()?>" onchange="this.form.submit()" name="frmAgeMed">
			<div class="form-row">
				<div class="col-6">
					<p>Selecione o paciente:</p>
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
				<div class="col-6">
					<p>Selecione o Medicamento:</p>
					<select class="form-control" name="medicamento">
						<option>Selecione:</option>
						<?php
							$result = mysqli_query($con,"SELECT med_id, med_nome FROM medicamentos order by med_nome;");
							while($row = mysqli_fetch_array($result))
							{
								echo "<option value=". $row['med_id'] .">". $row['med_nome'] ."</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="col-4">
					<label>Dosagem do medicamento:</label>
					<input class="form-control" type="text" name="pacmedDosagem" placeholder="Ex: 15mg" value=""/>
				</div>
				<div class="col-4">
					<label>Inicio da medicação dia:</label>
					<input class="form-control" type="date" name="pacmedDatin" value=""/>
				</div>
				<div class="col-4">
					<label>Fim da medicação dia:</label>
					<input class="form-control" type="date" name="pacmedDaten" value=""/>
				</div>
			</div>
				   <div id="horaEve1" class="form-row">
						<div class="col">
							<label>Informe o horário</label>
							<input class="form-control" type="time" name="horaEvento" value="">
						</div>
					</div>
					<div id="horaEve2" class="form-row">
						<div class="col">
							<label>Informe o horário</label>
							<input class="form-control" type="time" name="horaEvento2" value="">
						</div>
					</div>
					<div id="horaEve3" class="form-row">
						<div class="col">
							<label>Informe o horário</label>
							<input class="form-control" type="time" name="horaEvento3" value="">
						</div>
					</div>
					</br>
					<div class="form-row">
						<div class="col">
						<input class="btn btn-dark" type="button" id="btn11" onclick="addHoras('Sim')" value="Adicionar um horario"/>
						<input class="btn btn-dark" type="button" id="btn22" onclick="addHoras('Sim2')" value="Adicionar um horario"/>
						</div>
					</div>
			<div class="form-row">
				<div class="col-5">
				<label>O Paciente tem algum dia especifico para tomar a medicação?</label>
				</div>
				<div class="col-1"> 
				<input type="radio" class="form-check-input" onchange="verifiDias(this)" name="verDia" id="diasTomar" value="Sim"/><label class="form-check-label">Sim</label>
				</div>
				<div class="col-1">
				<input type="radio" class="form-check-input" onchange="verifiDias(this)" name="verDia" id="diasTomar" value="Nao"/><label class="form-check-label">Não</label>
				</div>
			</div>
			<div id="DiasSemana" class="form-row">
				<div class="col-2">
					<label for="">Domingo:</label>
					<select class="form-control" name="domMed">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>		
				</div>
				<div class="col-2">
					<label for="">Segunda:</label>
					<select class="form-control" name="segMed">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">	
					<label for="">Terça:</label>
					<select name="terMed" class="form-control">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">	
					<label for="">Quarta:</label>
					<select name="quaMed" class="form-control">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">	
					<label for="">Quinta:</label>
					<select name="quiMed" class="form-control">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">	
					<label for="">Sexta:</label>
					<select name="sexMed" class="form-control">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Nao">Não</option>
					</select>
				</div>
				<div class="col-2">	
					<label for="">Sábado:</label>
					<select name="sabMed" class="form-control">
						<option value="">Selecione:</option>
						<option value="Sim">Sim</option>
						<option value="Sim">Não</option>
					</select>
				</div>		
			</div> 
			<div class="form-row">
				<div class="col-4">
				</div>
				<div class="col-4">
					<center>
					<input class="btn btn-dark" type="submit" name="frmSend" value="Cadastrar"/>
					</center>
				</div>
				<div class="col-4">
				</div>
			</div>
	</form>
	</div>
	<script src="agendamed.js"></script>
</body>
</html>