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
        console.log($(this).children('.newsno').val());
        $.post('9backstage_news_edit.php',{ 
		 		'newsno' : $(this).children('.newsno').val() },function(rs){
		  });
	});
	$('.edit-btn-close').click(function(){
        $('.edit-form').fadeOut(0);
	});
	$('.edit-submit').click(function(){
        $('.edit-form').fadeOut(0);
	});


});


