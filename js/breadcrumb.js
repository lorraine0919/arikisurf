$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>$(window).height()*1/10){
			$('.arikicommon_breadcrumb').slideUp();
		}else{
			$('.arikicommon_breadcrumb').slideDown();
		}
	});
});