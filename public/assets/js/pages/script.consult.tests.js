$(document).ready(function() {
	$('#datepicker').datepicker({
		format: 'yyyy-mm-dd',
		endDate: 'today'
	});
	$('.applytooltip').tooltip();
	$('.applypopover').popover({
			html: true,
			placement: 'top',
			trigger: 'click',

		});
});