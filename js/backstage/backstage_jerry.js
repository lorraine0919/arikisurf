$(function(){
	for (var i = 0; i < $('.sellornot').length; i++) {
		if($('.sellornot').eq(i).attr('value')=='1'){
			$('.sellornot').eq(i).siblings('.yesbtn').addClass('active');
		}else{
			$('.sellornot').eq(i).siblings('.nobtn').addClass('active');
		}
	}
	$('.btn-primary').click(function(){
		$(this).addClass('active');
		// console.log($(this).siblings('.btn-primary'));
		$(this).siblings('.btn-primary').removeClass('active');

	});

})


