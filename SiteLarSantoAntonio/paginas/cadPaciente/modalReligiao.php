<?php 
    include($_SERVER['DOCUMENT_ROOT']. "/SiteLarSantoAntonio/pagExtras/DatabaseConnection.php");;
	if(isset($_POST["relNome"]))
		if(isset($_POST["relDesc"]))
			if(isset($_POST["relVert"]))
		{
			$query = "Insert into religiao(rel_nome, rel_desc, rel_vertente) values ('".$_POST['relNome']."','".$_POST['relDesc']."','".$_POST['relVert']."')";
			mysqli_query($con, $query);
			unset($_POST);
		}
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form name="frmRel" method="post" action="" onchange="this.form.submit();">
            <div class="form-row">
              <div class="col">
                Informe o nome da religião:
                <input class="form-control" type="text" name="relNome" value="<?php if(isset($_POST["relNome"])) echo $_POST["relNome"]?>"placeholder="Digite o nome da religião">
              </div>
              <div class="col">
                Informe a vertente da religião:
                <input class="form-control" type="text" name="relVert" value="<?php if(isset($_POST["relVert"])) echo $_POST["relNome"]?>"placeholder="Digite a vertente da religião">
              </div>
              <div class="col">
                Restrições e/ou outras informações relevantes:
                <input class="form-control" name="relDesc" placeholder="Digite as informações relevantes" value="<?php if(isset($_POST["relDesc"])) echo $_POST["relNome"]?>">
              </div>
            </div>
            
            <div class="form-row">
              <div class="col-4">
              
              </div>
              <div class="col-4">
                <hr></hr>
                <center>
                  <input class="btn btn-dark" type="submit" name="insertRel" value="Cadastrar">
                </center>
              </div>
              <div class="col-4">
              
              </div>
            </div>
          
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
