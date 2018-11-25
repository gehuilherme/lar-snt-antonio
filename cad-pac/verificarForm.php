<?php 
	$con=mysqli_connect("localhost","root","","pjenfermagem");
	if (mysqli_connect_errno())
	    {
	    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	    }

	if(isset($_POST['pacRG']))
		$RG = $_POST['pacRG'];
	else 
		$RG = null;

	if(isset($_POST['pacCPF']))
		$CPF = $_POST['pacCPF'];
	else 
		$CPF = null;

	/*if(isset($_POST['pacReligiao']))
		$Religiao = $_POST['pacReligiao'];
	else 
		$CPF = null;*/

	$confirmar = null;

	if(isset($_POST['pacNome']))
		if(isset($_POST['pacSobrenome']))
			if(isset($_POST['pacDate']))
				if(isset($_POST['pacEstCiv']))
					if(isset($_POST['pacDateEnt']))
						if(isset($_POST['pacSexo']))
							if(isset($_POST['pacEtnia']))
								if(isset($_POST['pacPeso']))
									if(isset($_POST['pacAltura']))
										if(isset($_POST['pacEncaminhado']))
											if(isset($_POST['pacCondChegada']))
												if(isset($_POST['pacGrauDep']))
													if(isset($_POST['pacVicio']))
														if(isset($_POST['pacHipertenso']))
															if(isset($_POST['pacDiabetico']))
																if(isset($_POST['pacCirurgia']))
																	if(isset($_POST['pacUlcera']))
																		if(isset($_POST['pacCriseConv']))
																			if(isset($_POST['pacMedUsoCont']))
																				if(isset($_POST['pacMedAlergico']))
																				{
																					$confirmar = "NotNull";
	                                                                               	$query = "INSERT INTO `paciente`(
	                                                                               	`pac_nome`,             
	                                                                               	`pac_sobrenome`, 	
	                                                                               	`pac_rg`, 
	                                                                               	`pac_CPF`, 
	                                                                               	`pac_dt_nasc`, 
	                                                                               	`pac_est_civil`, 
	                                                                               	`pac_religiao`, 
	                                                                               	`pac_dt_entrada`, 
	                                                                               	`pac_sexo`, 
	                                                                               	`pac_etnia`, 
	                                                                               	`pac_peso`, 
	                                                                               	`pac_alt`, 
	                                                                               	`pac_status`,
	                                                                               	`pac_enc`,
	                                                                               	`pac_chegada`, 
	                                                                               	`pac_dep`, 
	                                                                               	`pac_vicio`, 
	                                                                               	`pac_hipertenso`, 
	                                                                               	`pac_diabete`, 
	                                                                               	`pac_cirurgia`, 
	                                                                               	`pac_ulcera`, 
	                                                                               	`pac_ulceraEst`, 
	                                                                               	`pac_crise_con`, 
	                                                                               	`pac_medicamento`, 
	                                                                               	`pac_alergia_med`) VALUES (
                                                                                   	'".$_POST["pacNome"]."',
	                                                                               	'".$_POST['pacSobrenome']."',
	                                                                               	'".$RG."',
	                                                                               	'".$CPF."',
	                                                                               	'".$_POST['pacDate']."',
	                                                                               	'".$_POST['pacEstCiv']."',
	                                                                               	'".$_POST['pacReligiao']."',
	                                                                               	'".$_POST['pacDateEnt']."',
	                                                                               	'".$_POST['pacSexo']."',
	                                                                               	'".$_POST['pacEtnia']."',
	                                                                               	'".$_POST['pacPeso']."',
	                                                                               	'".$_POST['pacAltura']."','Ativo',
	                                                                               	'".$_POST['pacEncaminhado']."',
	                                                                               	'".$_POST['pacCondChegada']."',
	                                                                               	'".$_POST['pacGrauDep']."',
	                                                                               	'".$_POST['pacVicio']."',
	                                                                               	'".$_POST['pacHipertenso']."',
	                                                                               	'".$_POST['pacDiabetico']."',
	                                                                               	'".$_POST['pacCirurgia']."',
	                                                                               	'".$_POST['pacUlcera']."',
	                                                                               	'".$_POST['pacUlceraEstag']."',
	                                                                               	'".$_POST['pacCriseConv']."',
	                                                                               	'".$_POST['pacMedUsoCont']."',
	                                                                               	'".$_POST['pacMedAlergico']."')";
																					mysqli_query($con, $query);
																				}
?>