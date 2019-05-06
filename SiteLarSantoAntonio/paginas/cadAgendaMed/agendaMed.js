
		$('#DiasSemana').hide();
		//let btn1 = document.getElementById('btn11');
		$('#btn22').hide();
		$('#horaEve2').hide();
		$('#horaEve3').hide();

		
		function verifiDias(base){
			if(base.value == "Sim")
				$('#DiasSemana').show();
			else if(base.value == "Nao")
				$('#DiasSemana').hide();;
		}

		function addHoras(basement){
			if(basement == "Sim"){
				$("#horaEve2").show();
				$("#btn11").hide();
				$("#btn22").show();
			}
			else if(basement == "Sim2")
			{
				$("#horaEve3").show();
				$("#btn22").hide();
			}
		}