<?php include($_SERVER['DOCUMENT_ROOT']. '/SiteLarSantoAntonio/menu.php')?>
	<?php 
		$query = null;
		if(isset($_POST['paciente']))
		$query = "Select * from paciente where pac_id = ".$_POST['paciente'];
	?>
	<!------------------------------------------Menu----------------------------------->
		<header> <!-- Deixa o fundo cinza -->
		<div class="jumbotron">
			<div class="container">
				<div class="row"> <!-- Cria uma linha -->
					<div class="col-12"> <!-- Espaçamento de colunas -->
						<h1 class="text-center">Prontuário</h1>
					</div>
				</div>  
			</div>
		</div>
	<!------------------------------------------Menu-----------------------------------> 
			<div class="container">
			<!--div class="form-group"-->
            <!--div class="form-control"-->
			<!------------------------------------------Mostrar Idoso----------------------------------->
				<form name="formShow" method="post" action="" onchange="this.form.submit();">
				<!------------------------------------------Seleção Idoso----------------------------------->
						<select class="form-control " name="paciente">
							<option value="">Selecione o paciente:</option>
							<?php
								$result = mysqli_query($con,"SELECT pac_id, pac_nome, pac_sobrenome FROM paciente order by pac_nome;");
								while($row = mysqli_fetch_array($result))
								{
									echo "<option value=". $row['pac_id'] .">". $row['pac_nome'] ." ". $row['pac_sobrenome']."</option>";
								}
							?>
						</select>
				<!------------------------------------------Seleção Idoso----------------------------------->
					</br>
					<center>
						<input type="submit" name="showRefresh" class="btn btn-dark" value="Selecionar"/>
					</center>
				</form>
				<?php 
					if($query != null)
						{
							$resultado = mysqli_query($con, $query);
							while($row = mysqli_fetch_array($resultado))
							{
								
				?>
				<!------------------------------------------Dados Idoso----------------------------------->
				<center>
					<h1>Dados Do Paciente</h1>
					</br>
				</center>
				
				<div class="container">
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Nome: </b><?php echo $row['pac_nome'].' '.$row['pac_sobrenome'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>RG: </b><?php echo $row['pac_rg'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>CPF: </b><?php echo $row['pac_CPF'] ?>
							</div>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Data de Nascimento: </b><?php echo date("d/m/y", strtotime($row['pac_dt_nasc'])); ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Estado Civil: </b><?php echo $row['pac_est_civil'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Data de Entrada: </b><?php echo date("d/m/y", strtotime($row['pac_dt_entrada'])); ?>
							</div>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Sexo: </b><?php echo $row['pac_sexo'] ?> 
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Etnia: </b><?php echo $row['pac_etnia'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Peso: </b><?php echo $row['pac_peso'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Altura: </b><?php echo $row['pac_alt'] ?> 
							</div>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
							 <b>Encaminhado de Forma: </b><?php echo $row['pac_enc'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Dependencia: </b><?php echo $row['pac_dep'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Condição de chegada: </b><?php echo $row['pac_chegada'] ?>
							</div>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Possui vicio: </b><?php echo $row['pac_vicio'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Hipertenso: </b><?php echo $row['pac_hipertenso'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Diabete: </b><?php echo $row['pac_diabete'] ?>
							</div>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Cirurgia: </b><?php echo $row['pac_cirurgia'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Possui ulcera: </b><?php echo $row['pac_ulcera'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Se sim, qual estágio: </b><?php echo $row['pac_ulceraEst'] ?>
							</div>
						</div>
					</div>
					
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Crise Convulsiva: </b><?php echo $row['pac_crise_con'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Faz uso de medicamento: </b><?php echo $row['pac_medicamento'] ?>
							</div>
						</div>
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Alergico a medicamento: </b><?php echo $row['pac_alergia_med'] ?>
							</div>
						</div>
					</div>
					<!---------------------------------------Descrição do paciente------------------------------------------->
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Descrições:</b>
								<div class="form-row">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Descrição de vicio:</b> <?php echo $row['pac_vicioDesc']?>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Descrição de Cirurgia:</b> <?php echo $row['pac_cirurgiaDesc']?>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Descrição de Chagada:</b> <?php echo $row['pac_chegadaDesc']?>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Descrição do Medicamento:</b> <?php echo $row['pac_medicamentoDesc']?>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Descrição da Alergia</b> <?php echo $row['pac_alergiaDesc']?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!---------------------------------------Descrição do paciente------------------------------------------->
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded">
								<b>Dados do responsável:</b><br></br>
								<?php
									$responsa = mysqli_query($con,"SELECT res_nome, res_dt_nasc, res_sobrenome, res_end_rua,res_estado,res_cidade, res_end_num, res_telDDD, res_telNum1 FROM responsaveis JOIN paciente on res_pac_id = pac_id where res_pac_id = ".$_POST['paciente']);
									while($row = mysqli_fetch_array($responsa)){ ?>
								
								<div class="form-row">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Nome: </b><?php echo $row['res_nome'] ." ". $row['res_sobrenome'] ?> 
										</div>
									</div>
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Data de Nascimento: </b><?php echo date("d/m/y", strtotime($row['res_dt_nasc']))?> 
										</div>
									</div>
								</div>
								
								<div class="form-row ">
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Estado: </b><?php echo $row['res_estado'] ?> 
										</div>
									</div>
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Cidade: </b><?php echo $row['res_cidade']?> 
										</div>
									</div>
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Endereço: </b><?php echo $row['res_end_rua']?> 
										</div>
									</div>
									<div class="col">
										<div class="shadow-lg p-3 mb-5 bg-white rounded">
											<b>Número: </b><?php echo $row['res_end_num']; }?> 
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>	
					<div class="form-row">
						<div class="col">
							<div class="shadow-lg p-3 mb-5 bg-white rounded ">
								<b>Anotações: </b><br/>
								<?php 
									$result = mysqli_query($con, "SELECT anotacoesprontuario.ano_camp, anotacoesprontuario.ano_dt FROM anotacoesprontuario JOIN paciente ON ano_pac_id = pac_id WHERE ano_pac_id =".$_POST['paciente']);
										
										while ($row = mysqli_fetch_array($result))
										{ 
								?>
										<?php echo "<ul class='list-group'>"?>
										<?php echo "<li class='list-group-item active'>" ?>
										<?php echo date("<b>d/m/y</b>", strtotime($row['ano_dt']))?>
										<?php echo "</li>"?>
										<?php echo "<li class='list-group-item'>"?> 
										<?php echo $row["ano_camp"]?>
										<?php echo "</li><br/>";}?>
									</ul>
									
							</div>
						</div>
					</div>	
				
				
					
				<?php
							}
						} 
				?>
				</br>
				<!------------------------------------------Dados Idoso----------------------------------->

	<footer class="text-center"> <!-- Rodapé da página -->
       <div class="container">
			<p class="mb-0">Lar Santo Antônio</p>
        <div class="row">
			<div class="col-12 blockquote-footer">
				<p>Copyright © ADS.</p>
			</div>
        </div>
      </div>
    </footer>
</body>
</html>