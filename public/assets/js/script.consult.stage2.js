$(document).ready(function() {
	$('div#well_consulta_especial_1').hide();
	$('div#well_consulta_especial_2').hide();

	$('input[name=consulta_especial]').on('change', function() {
		// alert(this.value);
		if($(this).val() == 'TRUE'){
			//$('input[name=consulta_especial]').hide();
			$('div#well_consulta_especial_1').show();
			$('div#well_consulta_especial_1 > input,div#well_consulta_especial_1 > select,div#well_consulta_especial_1 label > input').removeAttr('disabled')
			if($('input[name=ce_limitacion]').attr('checked')){
				$('div#well_consulta_especial_2').show();
				$('div#well_consulta_especial_2 > textarea').removeAttr('disabled')
			}
		}else{
			$('div#well_consulta_especial_1').hide();
			$('div#well_consulta_especial_1 > input,div#well_consulta_especial_1 > select,div#well_consulta_especial_1 label > input').attr('disabled', 'disabled')
			$('div#well_consulta_especial_2 > textarea').attr('disabled', 'disabled')
			$('div#well_consulta_especial_2').hide();
		}
	});

	$('input[name=ce_limitacion]').on('change', function() {
		if($(this).val() == 'TRUE'){
			$('div#well_consulta_especial_2').show();
			$('div#well_consulta_especial_2 > textarea').removeAttr('disabled')
		}else{
			$('div#well_consulta_especial_2').hide();
			$('div#well_consulta_especial_2 > textarea').attr('disabled', 'disabled')
		}
	});
});