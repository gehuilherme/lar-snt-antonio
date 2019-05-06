<?php 
    $nome = $_POST["pacNome"];
    $sobrenome = $_POST['pacSobrenome'];
    $RG = $_POST['pacRG'];
    $CPF = $_POST['pacCPF'];
    $data = $_POST['pacDate'];
    $estadoCivil = $_POST['pacEstCiv'];
    $religiao = $_POST['pacReligiao'];
    $dataEntrada = $_POST['pacDateEnt'];
    $sexo = $_POST['pacSexo'];
    $etnia = $_POST['pacEtnia'];
    $peso = $_POST['pacPeso'];
    $altura = $_POST['pacAltura'];
    $encaminhamento = $_POST['pacEncaminhado'];
    $condicaoChegada = $_POST['pacCondChegada'];
    $grauDependencia = $_POST['pacGrauDep'];
    $vicio = $_POST['pacVicio'];
    $hipertenso = $_POST['pacHipertenso'];
    $diabetico = $_POST['pacDiabetico'];
    $cirurgia = $_POST['pacCirurgia'];
    $ulcera = $_POST['pacUlcera'];
    $estagioUlc = $_POST['pacUlceraEstag'];
    $criseConv = $_POST['pacCriseConv'];
    $usaMedicamento = $_POST['pacMedUsoCont'];
    $alergiaMedicamento = $_POST['pacMedAlergico'];
    $descCheg = $_POST['pacChegadaDesc'];
    $descVicio = $_POST['pacVicioDesc'];
    $descCiru = $_POST['pacCiruDesc'];
    $descMed = $_POST['pacMediDesc'];
    $descAlergia = $_POST['pacAlerDesc'];

    if($_POST['pacCPF'] == null || $_POST['pacCPF'] =="")
        $CPF = null;
    
    if ($_POST['pacRG'] == null || $_POST['pacRG'] == "") 
        $RG = null;

    if ($_POST['pacUlceraEstag'] == null || $_POST['pacUlceraEstag'] == "") 
        $estagioUlc = null;

    if ($_POST['pacChegadaDesc'] == null || $_POST['pacChegadaDesc'] == "") 
        $descCheg = null;
        
    if ($_POST['pacVicioDesc'] == null || $_POST['pacVicioDesc'] == "") 
        $descVicio = null;

    if ($_POST['pacCiruDesc'] == null || $_POST['pacCiruDesc'] == "") 
        $descCiru = null;

    if ($_POST['pacMediDesc'] == null || $_POST['pacMediDesc'] == "") 
        $descMed = null;

    if ($_POST['pacAlerDesc'] == null || $_POST['pacAlerDesc'] == "") 
        $descAlergia = null;        

?>