<?php 
	/*--------------------------------------------------Inserir dados Medicamentos -------------------------------------*/

		if(isset($_POST['medNome']))
			{
				$query = "INSERT INTO `medicamentos`(`med_nome`, `med_info`, `med_Dosagem`) VALUES ('".$_POST["medNome"]."','".$_POST["medInf"]."','".$_POST["medDos"]."')";
				mysqli_query($con, $query);
			}
	/*--------------------------------------------------Inserir dados Medicamentos -------------------------------------*/
?>