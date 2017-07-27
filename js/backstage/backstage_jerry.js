$('.btn-primary').click(function(){
	$(this).addClass('active').attr('data-title','Y');
	$('.btn-primary').not(this).removeClass('active').attr('data-title','N');
});