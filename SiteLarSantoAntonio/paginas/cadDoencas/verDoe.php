<?php include "DatabaseConnection.php" ?>
<?php 
	if(isset($_POST["doe_nome"]))
		if(isset($_POST["doe_obs"]))
		{
			$query = "Insert into doencas(doe_nome, doe_obs) values ('".$_POST['doe_nome']."','".$_POST['doe_obs']."')";
			mysqli_query($con, $query);
			unset($_POST);
		}
?>