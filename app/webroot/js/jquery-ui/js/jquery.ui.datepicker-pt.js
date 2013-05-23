/* Portuguese initialisation for the jQuery UI date picker plugin. */
/* Written by Luis E. S. Dias */
jQuery(function($){
	$.datepicker.regional['pt'] = {
		closeText: 'Fechar',
		prevText: 'Anterior',
		nextText: 'Próximo',
		currentText: 'Hoje',
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho',
		'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
		'Jul','Ago','Set','Out','Nov','Dez'],
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesShort: ['Dom.','Seg.','Ter.','Qua.','Qui.','Sex.','Sáb.'],
		dayNamesMin: ['D','S','T','Q','Q','S','S'],
		weekHeader: 'Sem.',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['pt']);
});