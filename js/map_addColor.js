$(document).ready(function(){
	 $('.bg_10 .fourm li:nth-child(2)').click(function(){
	 	console.log("123");
	 	$(this).addClass('addColor');
	 	$('.bg_10 .fourm li').not(this).removeClass('addColor');
	 })

	 $('.bg_10 .fourm li:nth-child(3)').click(function(){
	 	console.log("123");
	 	$(this).addClass('addColor');
	 	$('.bg_10 .fourm li').not(this).removeClass('addColor');
	 })

	 $('.bg_10 .fourm li:nth-child(4)').click(function(){
	 	console.log("123");
	 	$(this).addClass('addColor');
	 	$('.bg_10 .fourm li').not(this).removeClass('addColor');
	 })
});//ready