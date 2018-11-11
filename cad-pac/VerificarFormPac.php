<?php
	include "DatabaseConnection.php";

	if(isset($_POST['pacienteRG']))
		$RG = $_POST['pacienteRG'];
	else 
		$RG = null;

	if(isset($_POST['pacienteCPF']))
		$CPF = $_POST['pacienteCPF'];
	else 
		$CPF = null;
	   
	if(isset($_POST['pacienteNome']))
		if(isset($_POST['pacienteSobrenome']))
			if(isset($_POST['pacienteDtNasc']))
				if(isset($_POST['pacienteDtEnt']))
					if(isset($_POST['pacienteEstCiv']))
						if(isset($_POST['pacienteReligiao']))
							if(isset($_POST['pacienteSexo']))
								if(isset($_POST['pacientePeso']))
									if(isset($_POST['pacienteAltura']))
										if(isset($_POST['pacienteEstado']))
											if(isset($_POST['pacienteEtnia']))
	{
		$query = "Insert into paciente(pac_nome, pac_sobrenome, pac_dt_nasc, pac_dt_entrada, pac_est_civil, pac_religiao, pac_sexo, pac_peso, pac_alt, pac_status, pac_etnia, pac_rg, pac_CPF) values ('".$_POST['pacienteNome']."','".$_POST['pacienteSobrenome']."','".$_POST['pacienteDtNasc']."','".$_POST['pacienteDtEnt']."','".$_POST['pacienteEstCiv']."','".$_POST['pacienteReligiao']."','".$_POST['pacienteSexo']."','".$_POST['pacientePeso']."','".$_POST['pacienteAltura']."', 'Ativo','".$_POST['pacienteEtnia']."','".$RG."','".$CPF."')";
		mysqli_query($con, $query);
	}
?>