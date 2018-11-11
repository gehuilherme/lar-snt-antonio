<?php 
	include "DatabaseConnection.php"; 
	if(isset($_POST["prontEncaminhado"]))
	if(isset($_POST["prontCondChegada"]))
	if(isset($_POST["prontGrauDep"]))
	if(isset($_POST["prontVicio"]))
	if(isset($_POST["prontHipertenso"]))
	if(isset($_POST["prontDiabetico"]))
	if(isset($_POST["prontCirurgia"]))
	if(isset($_POST["prontUlcera"]))
	if(isset($_POST["prontUlceraEstag"]))
	if(isset($_POST["prontCriseConv"]))
	if(isset($_POST["prontMedUsoCont"]))
	if(isset($_POST["prontMedAlergico"]))
	{
		$query = "INSERT INTO prontuario (pront_pac_id, pront_enc, pront_chegada, pront_dep, pront_vicio, pront_hipertenso, pront_diabete, pront_cirurgia, pront_ulcera, pront_ulceraEst, pront_crise_con, pront_medicamento, pront_alergia_med) VALUES
		('" . $_POST["prontPacID"] . "','" . $_POST["prontEncaminhado"] . "', '" . $_POST["prontCondChegada"] . "', '" . $_POST['prontGrauDep'] . "', '" . $_POST['prontVicio'] . "', '" . $_POST['prontHipertenso'] . "', '" . $_POST ['prontDiabetico'] . "', '" . $_POST['prontCirurgia'] . "', '" . $_POST['prontUlcera'] . "', '" . $_POST['prontUlceraEstag'] . "', '" .  $_POST['prontCriseConv'] . "', '" . $_POST['prontMedUsoCont'] . "', '" . $_POST["prontMedAlergico"] . "')";
		mysqli_query($con, $query);
	}
?>