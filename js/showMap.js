$(document).ready(function(){
    $('.point_9').mouseover(function(){
	 $(".show").show();
    })//mouse

    $('#post').click(function(){
    	$("#content_10").show();
    });//click content

    $('#close').click(function(){
    	$("#content_10").hide();
    	$("#lightbox_11").hide();
    });//click close

});//ready