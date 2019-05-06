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