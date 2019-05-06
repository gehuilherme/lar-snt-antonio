<?php include "verificarDoePac.php";
      include "DatabaseConnection.php"; 
?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Pacientes - Lar Santo Antônio</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<title>Cadastro de Pacientes - Lar Santo Antônio</title>
    <!-- Bootstrap -->
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>

	<body>
	<!------------------------------------------Menu--------------------------------------------->
		<?php include "menu.php"?>
		<header>
			<div class="jumbotron">
				<div class="container">
					<div class="row"> 
						<div class="col-12">
							<h1 class="text-center">Cadastro de Medicamentos</h1>
						</div>
					</div>  
				</div>
			</div>
		</header>
	<!------------------------------------------Menu--------------------------------------------->
	<!------------------------------------------Cadastro----------------------------------------->
		<div class="container">
			<form method="post" name="frmDoePac" action="" onchange="this.form.submit();">
            <div class="form-row">
				<!-----------------------------------Selecão de paciente--------------------------------------------->
				<div class="col-6">
                    <select name="paciente" class="form-control">
				    	<option value="">Selecione:</option>
                            <?php
						    $result = mysqli_query($con,"SELECT pac_id, pac_nome, pac_sobrenome FROM paciente order by pac_nome;");
						    while($row = mysqli_fetch_array($result))
						    {
                                echo "<option value=". $row['pac_id'] .">". $row['pac_nome'] ." ". $row['pac_sobrenome']."</option>";
                            }
						    ?>
				    </select>
                </div>
				<!-----------------------------------Selecão de paciente--------------------------------------------->
                <!-----------------------------------Selecão de Doente--------------------------------------------->
                <div class="col-6">        
                    <select name="doenca" class="form-control">
					    <option value="">Selecione:</option>
					    	<?php
                                $result = mysqli_query($con,"SELECT doe_id, doe_nome FROM doencas order by doe_nome;");
						        while($row = mysqli_fetch_array($result))
                                {
							        echo "<option value=". $row['doe_id'] .">". $row['doe_nome'] ."</option>";
						        }
						    ?>
                </div>
				</select>
            </div>        
                <!-----------------------------------Selecão de Doente--------------------------------------------->        
				<!-----------------------------------Descrição do Ocorrido----------------------------------------->
                <div class="col-12">
                    <label>Descrição do ocorrido</label>
                    <input type="text" class="form-control" name="pacDoeDesc" value="<?php if(isset($_POST["pacDoeDesc"])) echo $_POST["pacDoeDesc"]?>"/> 
                </div>
                <!-----------------------------------Descrição do Ocorrido----------------------------------------->
				<!-----------------------------------Botão-------------------------------------------------------->
            <div class="form-row">
                <div class="col-12">
                </div>
                <div class="col-4">
                <input class="btn btn-dark" type="submit" name="pacDoente" value="Cadastrar" class="btnRegister">
                </div>                
            </div>	
                <!-----------------------------------Botão-------------------------------------------------------->
		</div>
		</br>
	<!------------------------------------------Cadastro----------------------------------------->
</body>
</html>