// Execute jquery functions only *after* jQuery JS has laoded
$(function () {
	$('#primary-nav').attr('data-spy','affix');
	$('#primary-nav').attr('data-offset-top','100');
})