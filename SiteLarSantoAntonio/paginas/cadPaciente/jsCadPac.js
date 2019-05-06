$(document).ready(function(){
$('#descChegIdo').prop("disabled", true);
$('#descVicIdo').prop("disabled", true);
$('#descCirIdo').prop("disabled", true);
$('#descMedIdo').prop("disabled", true);
$('#descAleIdo').prop("disabled", true);
$('#pacUlceraEsta').prop("disabled", true);

$("#vicioID").change(function()
{
    if($("#vicioID").val() == "Sim")
        $('#descVicIdo').prop("disabled", false);
    else if($("#vicioID").val() == "Nao")
        $('#descVicIdo').prop("disabled", true);
})
$("#cirurgiaID").change(function()
{
    if($("#cirurgiaID").val() == "Sim")
        $('#descCirIdo').prop("disabled", false);
    else if($("#cirurgiaID").val() == "Nao")
        $('#descCirIdo').prop("disabled", true);
})
$("#medicamentoUsoID").change(function()
{
    if($("#medicamentoUsoID").val() == "Sim")
        $('#descMedIdo').prop("disabled", false);
    else if($("#medicamentoUsoID").val() == "Nao")
        $('#descMedIdo').prop("disabled", true);
})
$("#alergiaMediID").change(function()
{
    if($("#alergiaMediID").val() == "Sim")
        $('#descAleIdo').prop("disabled", false);
    else if($("#alergiaMediID").val() == "Nao")
        $('#descAleIdo').prop("disabled", true);
})
$("#ulceraEstagio").change(function()
{
    if($("#ulceraEstagio").val() == "Sim")
        $('#pacUlceraEsta').prop("disabled", false);
    else if($("#ulceraEstagio").val() == "Nao")
        $('#pacUlceraEsta').prop("disabled", true);
})

let particoes = $("#parte1");
let particoes2 = $("#parte2");
let particoes3 = $("#parte3");
let particoes4 = $("#parte4");
let particoes5 = $("#parte5");

particoes2.hide(); 
particoes3.hide(); 
particoes4.hide(); 
particoes5.hide();

$("#butaoParte1").click(function()
{   
    particoes.hide();
    particoes2.show();    
})
$("#butaoParte2").click(function()
{   
    particoes3.show();
    particoes2.hide();
})
$("#butaoParte3").click(function()
{   
    particoes4.show();
    particoes3.hide();
})
$("#butaoParte4").click(function()
{   
    particoes5.show();
    particoes4.hide();
})
})
function submeterNovoRegistro(id_formulario){
    let frm = $('#' + id_formulario); 
    
    frm.submit(function(e){
        e.preventDefault();
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
 

            success: function(){
                alert("Formulario enviado com sucesso");
                window.location.reload();
            },
            error: function(){
                alert("Ocorreu um erro");
                window.location.reload();
            }
        });
    });	
}
