$(function(){
	$('.step2_maxContent').hide();
	$('.step3_maxContent').hide();
	$('.step4_maxContent').hide();

	$('#step1tostep2').click(function(){
		$('.step1_maxContent').hide();
		$('.step2_maxContent').show();
	});
	$('#step2tostep3').click(function(){
		$('.step2_maxContent').hide();
		$('.step3_maxContent').show();
	});
	$('#step3tostep4').click(function(){
		$('.step3_maxContent').hide();
		$('.step4_maxContent').show();
	});

	$('.patternselectgroup').hide();
	$('.textureselect').hide();
	$('.colorbtn').click(function(){
		$('.colorselectgroup').slideToggle();
		$('.patternselectgroup').slideUp();
		$('.textureselect').slideUp();
	});
	$('.patternbtn').click(function(){
		$('.patternselectgroup').slideToggle();
		$('.colorselectgroup').slideUp();
		$('.textureselect').slideUp();
	});
	$('.texturebtn').click(function(){
		$('.patternselectgroup').slideUp();
		$('.colorselectgroup').slideUp();
		$('.textureselect').slideToggle();
	});
	$('.orangebtn').click(function(){

	});
});