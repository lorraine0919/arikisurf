$(function(){
	$('.step2_maxContent').hide();
	$('#step1tostep2').click(function(){
		$('.step1_maxContent').hide();
		$('.step2_maxContent').show();
	});
});