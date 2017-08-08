$(document).ready(function(){
    if(sessionStorage.length == 0){
        $('.loading_bg').css('display','block');
        $('body').css('overflow-y','scroll');
    }
    var countmapin = sessionStorage;
    countmapin['mapcountloading']=1;

    $('.point_9').mouseover(function(){
	 $(".show").show();
    })//mouse

    $('#close').click(function(){
    	$("#content_10").hide();
    	$("#lightbox_11").hide();
    });//click close

    $('#cl').click(function(){
        $("#lightbox2_11").hide();
    });//click close

});//ready