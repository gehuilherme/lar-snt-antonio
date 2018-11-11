<?php include "DatabaseConnection.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div id="formCadProntuario">
		<form name="frmCadProntuario" method="post" action="" onchange="this.form.submit();">
			<p>Selecione o paciente:</p>
			<select name="prontPacID">
				<?php
					$result = mysqli_query($con,"SELECT pac_id, pac_nome, pac_sobrenome FROM paciente order by pac_nome;");
					while($row = mysqli_fetch_array($result))
					{
						echo "<option value=". $row['pac_id'] .">". $row['pac_nome'] ." ". $row['pac_sobrenome']."</option>";
					}
				?>
			<p>Encaminhado:</p>
				<input type="radio" name="prontEncaminhado" value="Familia" id="1" <?php if(isset($_POST['prontEncaminhado']) && $_POST['prontEncaminhado']=="Familia") { ?>checked<?php  } ?>>Família 
 				<input type="radio" name="prontEncaminhado" value="Rua" id="2" <?php if(isset($_POST['prontEncaminhado']) && $_POST['prontEncaminhado']=="Rua") { ?>checked<?php  } ?>>Rua 
				<input type="radio" name="prontEncaminhado" value="Hospital" id="3" <?php if(isset($_POST['prontEncaminhado']) && $_POST['prontEncaminhado']=="Hospital") { ?>checked<?php  } ?>>Hospital 
				<input type="radio" name="prontEncaminhado" value="Outros" id="4" <?php if(isset($_POST['prontEncaminhado']) && $_POST['prontEncaminhado']=="Outros") { ?>checked<?php  } ?>>Outros
			<p>Condição de Chegada:</p>
				<input type="radio" name="prontCondChegada" value="Consciente" id="1" <?php if(isset($_POST['prontCondChegada']) && $_POST['prontCondChegada']=="Consciente") { ?>checked<?php  } ?>>Consciente 
    			<input type="radio" name="prontCondChegada" value="Comunicativo" id="2" <?php if(isset($_POST['prontCondChegada']) && $_POST['prontCondChegada']=="Comunicativo") { ?>checked<?php  } ?>>Comunicativo 
				<input type="radio" name="prontCondChegada" value="Orientado" id="3" <?php if(isset($_POST['prontCondChegada']) && $_POST['prontCondChegada']=="Orientado") { ?>checked<?php  } ?>>Orientado 
				<input type="radio" name="prontCondChegada" value="Confuso" id="4" <?php if(isset($_POST['prontCondChegada']) && $_POST['prontCondChegada']=="Confuso") { ?>checked<?php  } ?>>Confuso
			<p>Grau de Dependencia:</p>
				<input type="radio" name="prontGrauDep" value="Sem auxilio" id="1" <?php if(isset($_POST['prontGrauDep']) && $_POST['prontGrauDep']=="Sem auxilio") { ?>checked<?php  } ?>>Sem auxílio 
    			<input type="radio" name="prontGrauDep" value="Muletas" id="2" <?php if(isset($_POST['prontGrauDep']) && $_POST['prontGrauDep']=="Muletas") { ?>checked<?php  } ?>>Muletas 
				<input type="radio" name="prontGrauDep" value="Cadeira de Rodas" id="3" <?php if(isset($_POST['prontGrauDep']) && $_POST['prontGrauDep']=="Cadeira de Rodas") { ?>checked<?php  } ?>>Cadeira de Rodas 
				<input type="radio" name="prontGrauDep" value="Acamado" id="4" <?php if(isset($_POST['prontGrauDep']) && $_POST['prontGrauDep']=="Acamado") { ?>checked<?php  } ?>>Acamado
			<p>Possui algum vicio:</p>
				<input type="radio" name="prontVicio" id="1" value="Sim" <?php if(isset($_POST['prontVicio']) && $_POST['prontVicio']=="Sim") { ?>checked<?php  } ?>>Sim 
    			<input type="radio" name="prontVicio" id="2" value="Nao" <?php if(isset($_POST['prontVicio']) && $_POST['prontVicio']=="Nao") { ?>checked<?php  } ?>>Não
			<p>Hipertenso:</p>
				<input type="radio" name="prontHipertenso" value="Sim" id="1" <?php if(isset($_POST['prontHipertenso']) && $_POST['prontHipertenso']=="Sim") { ?>checked<?php  } ?>>Sim 
    			<input type="radio" name="prontHipertenso" value="Nao" id="2" <?php if(isset($_POST['prontHipertenso']) && $_POST['prontHipertenso']=="Nao") { ?>checked<?php  } ?>>Não
			<p>Diabetico:</p>
				<input type="radio" name="prontDiabetico" value="Sim" <?php if(isset($_POST['prontDiabetico']) && $_POST['prontDiabetico']=="Sim") { ?>checked<?php  } ?>>Sim 
    			<input type="radio" name="prontDiabetico" value="Nao" <?php if(isset($_POST['prontDiabetico']) && $_POST['prontDiabetico']=="Nao") { ?>checked<?php  } ?>>Não
			<p>Fez alguma cirurgia:</p>
				<input type="radio" name="prontCirurgia" id="1" value="Sim" <?php if(isset($_POST['prontCirurgia']) && $_POST['prontCirurgia']=="Sim") { ?>checked<?php  } ?>>Sim 
  				<input type="radio" name="prontCirurgia" id="2" value="Nao" <?php if(isset($_POST['prontCirurgia']) && $_POST['prontCirurgia']=="Nao") { ?>checked<?php  } ?>>Não
			<p>Possui Ulcera de Pressão:</p>
				<input type="radio" name="prontUlcera" value="Sim" <?php if(isset($_POST['prontUlcera']) && $_POST['prontUlcera']=="Sim") { ?>checked<?php  } ?> >Sim 
    			<input type="radio" name="prontUlcera" value="Nao" <?php if(isset($_POST['prontUlcera']) && 	$_POST['prontUlcera']=="Não") { ?>checked<?php  } ?> >Não
			<p>Qual estágio da ulcera(Caso Tiver):</p>
				<input type="radio" name="prontUlceraEstag" id="1" value="I" <?php if(isset($_POST['prontUlceraEstag']) && $_POST['prontUlceraEstag']=="I") { ?>checked<?php  } ?> >I 
    			<input type="radio" name="prontUlceraEstag" id="2" value="II"  <?php if(isset($_POST['prontUlceraEstag']) && $_POST['prontUlceraEstag']=="II") { ?>checked<?php  } ?>>II 
				<input type="radio" name="prontUlceraEstag" id="3" value="III" <?php if(isset($_POST['prontUlceraEstag']) && $_POST['prontUlceraEstag']=="III") { ?>checked<?php  } ?>>III 
				<input type="radio" name="prontUlceraEstag" id="4" value="IV" <?php if(isset($_POST['prontUlceraEstag']) && $_POST['prontUlceraEstag']=="IV") { ?>checked<?php  } ?>>IV
			<p>Crise Convulsiva:</p>
				<input type="radio" name="prontCriseConv" value="Sim" id="1" <?php if(isset($_POST['prontCriseConv']) && $_POST['prontCriseConv']=="Sim") { ?>checked<?php  } ?>>Sim 
    			<input type="radio" name="prontCriseConv" value="Nao" id="2" <?php if(isset($_POST['prontCriseConv']) && $_POST['prontCriseConv']=="Nao") { ?>checked<?php  } ?>>Não
			<p>Faz uso de medicamento contínuo</p>
				<input type="radio" name="prontMedUsoCont" id="1" value="Sim" <?php if(isset($_POST['prontMedUsoCont']) && $_POST['prontMedUsoCont']=="Sim") { ?>checked<?php  } ?>>Sim 
    			<input type="radio" name="prontMedUsoCont" id="2" value="Nao" <?php if(isset($_POST['prontMedUsoCont']) && $_POST['prontMedUsoCont']=="Nao") { ?>checked<?php  } ?>>Não
			<p>Alérgico a algum medicamento</p>
				<input type="radio" name="prontMedAlergico" id="1" value="Sim" <?php if(isset($_POST['prontMedAlergico']) && $_POST['prontMedAlergico']=="Sim") { ?>checked<?php  } ?>>Sim 
    			<input type="radio" name="prontMedAlergico" id="2" value="Nao" <?php if(isset($_POST['prontMedAlergico']) && $_POST['prontMedAlergico']=="Nao") { ?>checked<?php  } ?>>Não
	</div>
</body>
</html>