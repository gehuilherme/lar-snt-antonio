<meta charset="utf-8">
<?php	
	/*--------------------------------------------------Inserir dados agenda -------------------------------------*/
	/*--------------------------------------------------Erros ----------------------------------------------------*/
	if(!empty($_POST["InsertAgenda"]))
	{
		foreach($_POST as $key=>$value)
		{
			if(empty($_POST[$key]))
				$error_message = "É necessário preencher todos os campos!";
			break;
		}
	}
	if(!isset($error_message))
	{
		if(!isset($_POST["paciente"]))
			if(!isset($_POST["evento"]))
				if(!isset($_POST["dateEvento"]))
					if(!isset($_POST["horaEvento"]))
					{
						$error_message = " É necessário preencher todos os campos!";
					}
	}
	/*--------------------------------------------------Erros ----------------------------------------------------*/
	if(!isset($error_message))
	{
		$queryInsert = "Insert into agenda(`age_pac_id`, `age_camp`, `age_dt`, `age_hora`, `age_rua`, `age_num`, `age_status`) values ('".$_POST["paciente"]."','". $_POST["evento"]."','".$_POST["dateEvento"]."','".$_POST["horaEvento"]."','".$_POST["endereco"]."','".$_POST["numero"]."','PENDENTE')";
			$enviarAgenda = mysqli_query($con,$queryInsert);
			unset($_POST);
	}
	/*--------------------------------------------------Inserir dados agenda -------------------------------------*/
	/*else
	{
		echo "<p class='message'>".$error_message."</p>";
	}*/
?>
