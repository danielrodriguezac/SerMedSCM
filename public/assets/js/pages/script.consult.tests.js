$(document).ready(function() {
	$('#datepicker').datepicker({
		format: 'yyyy-mm-dd',
		endDate: 'today'
	});
	$('.applytooltip').tooltip();
});