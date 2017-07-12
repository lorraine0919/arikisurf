		$(document).ready(function(){
	$('.111').click(function(){
		// $('.1111').show();
		// $('.2222').hide();
		// $('.3333').hide();
		// $('.4444').hide();
		// $('.5555').hide();
	});
	
	$('.222').click(function(){
		$('.1111').fadeOut(0);
		$('.2222').fadeIn(500);
		$('.3333').fadeOut(0);
		$('.4444').fadeOut(0);
		$('.5555').fadeOut(0);
	});
	$('.333').click(function(){
		$('.1111').fadeOut(0);
		$('.2222').fadeOut(0);
		$('.3333').fadeIn(500);
		$('.4444').fadeOut(0);
		$('.5555').fadeOut(0);
	});
	$('.444').click(function(){
		$('.1111').fadeOut(0);
		$('.2222').fadeOut(0);
		$('.3333').fadeOut(0);
		$('.4444').fadeIn(500);
		$('.5555').fadeOut(0);
	});
	$('.555').click(function(){
		$('.1111').fadeOut(0);
		$('.2222').fadeOut(0);
		$('.3333').fadeOut(0);
		$('.4444').fadeOut(0);
		$('.5555').fadeIn(500);
	});
});
		