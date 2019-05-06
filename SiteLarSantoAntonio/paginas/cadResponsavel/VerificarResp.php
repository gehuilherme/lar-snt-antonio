
<?php 
	/*--------------------------------------------------Inserir dados Responsavel -------------------------------------*/

	if(isset($_POST["resCPF"]))
		if(isset($_POST["resNome"]))
			if(isset($_POST["resSobrenome"]))
				if(isset($_POST["resDate"]))
					if(isset($_POST["resUF"]))
						if(isset($_POST["resCidade"]))
							if(isset($_POST["resRua"]))
								if(isset($_POST["resNum"]))
								{
									$query = "INSERT INTO `responsaveis` 
									(`res_cpf`, 
									`res_nome`, 
									`res_sobrenome`, 
									`res_dt_nasc`, 
									`res_estado`, 
									`res_cidade`, 
									`res_end_rua`, 
									`res_end_num`,
									`res_pac_id`,
									`res_telDDD`,
									`res_telNum1`) VALUES (
									'".$_POST["resCPF"]."',
									'".$_POST["resNome"]."',
									'".$_POST["resSobrenome"]."',
									'".$_POST["resDate"]."',
									'".$_POST["resUF"]."',
									'".$_POST["resCidade"]."',
									'".$_POST["resRua"]."',
									'".$_POST["resNum"]."',
									'".$_POST["paciente"]."',
									'".$_POST["res_telDDD"]."',
									'".$_POST["restelNum"]."')";
									$queryupdate = "Update 'paciente' set 'pac_responsavel' = ".$_POST["resCPF"] ."where pac_id =".$_POST['paciente'];
									mysqli_query($con, $query);
    								mysqli_query($con, $queryupdate);
								}
	/*--------------------------------------------------Inserir dados Responsavel -------------------------------------*/

?>