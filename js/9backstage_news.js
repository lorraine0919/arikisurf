$(document).ready(function(){

	$('.lightbox-btn-add').click(function(){
        $('.add-form').fadeIn(500);
	});
	$('.add-btn-close').click(function(){
        $('.add-form').fadeOut(0);
	});
	$('.add-submit').click(function(){
        $('.add-form').fadeOut(0);
	});

	$('.lightbox-btn-edit').click(function(){
        $('.edit-form').fadeIn(500);
	});
	$('.edit-btn-close').click(function(){
        $('.edit-form').fadeOut(0);
	});
	$('.edit-submit').click(function(){
        $('.edit-form').fadeOut(0);
	});
});

