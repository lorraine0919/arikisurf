$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>$(window).height()*1/100){
			$('.arikicommon_breadcrumb').slideUp();
		}else{
			$('.arikicommon_breadcrumb').slideDown();
		}
	});
});