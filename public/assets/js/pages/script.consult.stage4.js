$(document).ready(function() {
	$('.applytooltip').tooltip();
	$('.applypopover').popover({
		html: true,
		placement: 'top',
		trigger: 'click',
	});
	$('div#well_tratamiento_medico').hide();
	$('button[id=button_tratamiento_medico]').on('click', function() {
		// alert('pito');
		if($('input[name=tratamiento_medico]').val() == 0)
		{
			$('input[name=tratamiento_medico]').val(1);
			$('div#well_tratamiento_medico > div > textarea').removeAttr('disabled');
			$('div#well_tratamiento_medico').show();
			$('button[id=button_tratamiento_medico]').removeClass('btn-danger');
			$('button[id=button_tratamiento_medico]').addClass('btn-success');
			$('button[id=button_tratamiento_medico]').html('<i class="icon-ok-sign"></i>');
		}
		else
		{
			$('input[name=tratamiento_medico]').val(0);
			$('div#well_tratamiento_medico').hide();
			$('div#well_tratamiento_medico > div > textarea').attr('disabled', 'disabled');
			$('button[id=button_tratamiento_medico]').removeClass('btn-success');
			$('button[id=button_tratamiento_medico]').addClass('btn-danger');
			$('button[id=button_tratamiento_medico]').html('<i class="icon-remove-sign"></i>');
		}
	});
});