<?php include "DatabaseConnection.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div id="formCadPaciente">
		<form name="frmCadPaciente" method="post" action="" onchange="this.form.submit();">
			<p>Nome:</p>
				<input type="text" name="pacienteNome" value="<?php if(isset($_POST['pacienteNome'])) echo $_POST['pacienteNome']; ?>"/>
			<p>Sobrenome:</p></td>
				<input type="text" name="pacienteSobrenome" value="<?php 	if(isset($_POST['pacienteSobrenome'])) echo $_POST['pacienteSobrenome']; ?>"/>
			<p>(O Campo não é obrigatório)RG:</p>
				<input type="text" name="pacienteRG" value="<?php if(isset($_POST['pacienteRG'])) echo $_POST['pacienteRG']; ?>"/>
			<p>(O Campo não é obrigatório)CPF:</p>
				<input type="text" name="pacienteCPF" value="<?php 	if(isset($_POST['pacienteCPF'])) echo $_POST['pacienteCPF']; ?>"/>
			<p>Data de Nascimento:</p>
				<input type="date" name="pacienteDtNasc" value="">
			<p>Data de Entrada:</p>
				<input type="date" name="pacienteDtEnt" value="">
			<p>Estado Civil</p>
				<input type="radio" name="pacienteEstCiv" value="Solteiro" <?php if(isset($_POST['pacienteEstCiv']) && $_POST['pacienteEstCiv']=="S") { ?>checked<?php  } ?>> Solteiro
				<input type="radio" name="pacienteEstCiv" value="Casado" <?php if(isset($_POST['pacienteEstCiv']) && $_POST['pacienteEstCiv']=="C") { ?>checked<?php  } ?>> Casado
   				<input type="radio" name="pacienteEstCiv" value="Viuvo" <?php if(isset($_POST['pacienteEstCiv']) && $_POST['pacienteEstCiv']=="V") { ?>checked<?php  } ?>> Viuvo
			<p>Religião:</p>
				<input type="radio" name="pacienteReligiao" value="Catolico" id="1" <?php if(isset($_POST['pacienteReligiao']) && $_POST['pacienteReligiao']=="Catolico") { ?>checked<?php  } ?> >Católico 
    			<input type="radio" name="pacienteReligiao" value="Evangelico" id="2" <?php if(isset($_POST['pacienteReligiao']) && $_POST['pacienteReligiao']=="Evangelico") { ?>checked<?php  } ?> >Evangélico 
				<input type="radio" name="pacienteReligiao" value="Outros" id="3" <?php if(isset($_POST['pacienteReligiao']) && $_POST['pacienteReligiao']=="Outros") { ?>checked<?php  } ?> >Outros
			<p>Sexo:</p>
				<input type="radio" name="pacienteSexo" value="Homem" <?php if(isset($_POST['pacienteSexo']) && $_POST['pacienteSexo']=="Homem") { ?>checked<?php  } ?>> Homem
 				<input type="radio" name="pacienteSexo" value="Mulher" <?php if(isset($_POST['pacienteSexo']) && $_POST['pacienteSexo']=="Mulher") { ?>checked<?php  } ?>> Mulher
			<p>Peso(EX - 98.45):</p>
				<input type="text" name="pacientePeso" value="">
			<p>Altura(EX - 1.80):
				<input type="text" name="pacienteAltura" value="">
			<p>Estado:</p>
				<input type="radio" name="pacienteEstado" value="Ativo" <?php if(isset($_POST['pacienteEstado']) && $_POST['pacienteEstado']=="A") { ?>checked<?php  } ?>> Ativo
   				<input type="radio" name="pacienteEstado" value="Inativo" <?php if(isset($_POST['pacienteEstado']) && $_POST['pacienteEstado']=="I") { ?>checked<?php  } ?>> Inativo
			<p>Etnia</p
				<input type="radio" name="pacienteEtnia" value="Branco" id="1" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Branco") { ?>checked<?php  } ?>>Branco 
    			<input type="radio" name="pacienteEtnia" value="Pardo" id="2" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Pardo") { ?>checked<?php  } ?>>Pardo 
				<input type="radio" name="pacienteEtnia" value="Negro" id="3" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Negro") { ?>checked<?php  } ?>>Negro 
				<input type="radio" name="pacienteEtnia" value="Indio" id="4" <?php if(isset($_POST['pacienteEtnia']) && $_POST['pacienteEtnia']=="Indio") { ?>checked<?php  } ?>>Índio
			<input type="submit" name="pacienteRegistro" value="Cadastrar" class="btnRegister">
		</form>
	</div>
</body>
</html>