<?php 
	//function cadastrarAgenda()
	//try{
	if(isset($_POST['paciente']))
	{$query = "INSERT INTO `pacmedicamentos`(
		`pacMed_pac_id`, 
		`pacMed_med_id`, 
		`pacMed_info`, 
		`pacMed_Dosagem`, 
		`pacMed_Inicio`, 
		`pacMed_Fim`, 
		`pacMed_hora`,
		`pacMed_Hora2`,
		`pacMed_Hora3`,
		`pacMed_Dom`,
		`pacMed_Seg`,
		`pacMed_Ter`,
		`pacMed_Qua`,
		`pacMed_Qui`,
		`pacMed_Sex`,
		`pacMed_Sab`) VALUES 
		('".$_POST['paciente']."',
		'".$_POST['medicamento']."',
		'null',
		'".$_POST['pacmedDosagem']."',
		'".$_POST['pacmedDatin']."',
		'".$_POST['pacmedDaten']."',
		'".$_POST['horaEvento']."',
		'".$_POST['horaEvento2']."',
		'".$_POST['horaEvento3']."',
		'".$_POST['domMed']."',
		'".$_POST['segMed']."',
		'".$_POST['terMed']."',
		'".$_POST['quaMed']."',
		'".$_POST['quiMed']."',
		'".$_POST['sexMed']."',
		'".$_POST['sabMed']."')";
		
		mysqli_query($con,$query);
	//};
	//catch(){
	//};}
}
?>