<?php 
    include "DatabaseConnection.php";

    if(isset($_POST['pacDoeDesc']))
    {
        $Query = "INSERT INTO pacdoencas(pacDoe_pac_id, pacDoe_doe_id, pacDoe_info) 
                        VALUES('".$_POST['paciente']."','".$_POST['doenca']."','".$_POST['pacDoeDesc']."')";
        mysqli_query($con,$Query);

        unset($_POST);
    }
    
?>