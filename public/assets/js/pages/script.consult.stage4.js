$(document).ready(function() {
	$('.applytooltip').tooltip();
	$('.applypopover').popover({
		html: true,
		placement: 'top',
		trigger: 'click',
	});
	// Hiding things that shouldnt be visible initially
	$('div#well_tratamiento_medico_inner').hide();
	$('div#well_referencia_medica_inner').hide();
	// Bind the events to the buttons
	// Tratamiento Medico
	$('button[id=button_tratamiento_medico]').on('click', function() {
		if($('input[name=tratamiento_medico]').val() == 0)
		{
			$('input[name=tratamiento_medico]').val(1);
			$('div#well_tratamiento_medico_inner :disabled').removeAttr('disabled');
			$('div#well_tratamiento_medico_inner').slideToggle(200);
			$('button[id=button_tratamiento_medico]').removeClass('btn-danger');
			$('button[id=button_tratamiento_medico]').addClass('btn-success');
			$('button[id=button_tratamiento_medico]').html('<i class="icon-ok-sign"></i>');
		}
		else
		{
			$('input[name=tratamiento_medico]').val(0);
			$('div#well_tratamiento_medico_inner').slideToggle(200);
			$('div#well_tratamiento_medico_inner > div > textarea').attr('disabled', 'disabled');
			$('button[id=button_tratamiento_medico]').removeClass('btn-success');
			$('button[id=button_tratamiento_medico]').addClass('btn-danger');
			$('button[id=button_tratamiento_medico]').html('<i class="icon-remove-sign"></i>');
		}
	});
	// Referencia Medica
	$('button[id=button_referencia_medica]').on('click', function() {
		if($('input[name=referencia_medica]').val() == 0)
		{
			$('input[name=referencia_medica]').val(1);
			$('div#well_referencia_medica_inner :disabled').removeAttr('disabled');
			$('div#well_referencia_medica_inner').slideToggle(200);
			$('button[id=button_referencia_medica]').removeClass('btn-danger');
			$('button[id=button_referencia_medica]').addClass('btn-success');
			$('button[id=button_referencia_medica]').html('<i class="icon-ok-sign"></i>');
		}
		else
		{
			$('input[name=referencia_medica]').val(0);
			$('div#well_referencia_medica_inner').slideToggle(200);
			$('div#well_referencia_medica_inner > textarea,div#well_referencia_medica_inner > input').attr('disabled', 'disabled');
			$('button[id=button_referencia_medica]').removeClass('btn-success');
			$('button[id=button_referencia_medica]').addClass('btn-danger');
			$('button[id=button_referencia_medica]').html('<i class="icon-remove-sign"></i>');
		}
	});

});