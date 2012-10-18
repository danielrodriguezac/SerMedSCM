$(document).ready(function() {
	$('div#well_accidente_trabajo_1').hide();
	$('.applytooltip').tooltip();
	$('.applypopover').popover({
			html: true,
			placement: 'top',
			trigger: 'click',

		});
	$('input[name=accidente_trabajo]').on('change', function() {
		if($(this).val() == 1){
			$('div#well_accidente_trabajo_1').show();
			$('div#well_accidente_trabajo_1 > input,div#well_accidente_trabajo_1 > select,div#well_accidente_trabajo_1 label > input').removeAttr('disabled');
			$('div#well_accidente_trabajo_1 > textarea').removeAttr('disabled');
		}else{
			$('div#well_accidente_trabajo_1').hide();
			$('div#well_accidente_trabajo_1 > input,div#well_accidente_trabajo_1 > select,div#well_accidente_trabajo_1 label > input').attr('disabled', 'disabled');
			$('div#well_accidente_trabajo_1 > textarea').attr('disabled', 'disabled');
		}
	});
});