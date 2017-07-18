		$(document).ready(function(){
	$('.111').click(function(){
		// $('.1111').show();
		// $('.2222').hide();
		// $('.3333').hide();
		// $('.4444').hide();
		// $('.5555').hide();
	});
	
	$('.222').click(function(){
		$('.main_BG').fadeIn(0);
		$('.2222').fadeIn(300);
		$('.3333').fadeOut(0);
		$('.4444').fadeOut(0);
		$('.5555').fadeOut(0);
		$('.showProd').fadeOut(0);
	});
	$('.333').click(function(){
		$('.main_BG').fadeIn(0);
		$('.2222').fadeOut(0);
		$('.3333').fadeIn(300);
		$('.4444').fadeOut(0);
		$('.5555').fadeOut(0);
		$('.showProd').fadeOut(0);
	});
	$('.444').click(function(){
		$('.main_BG').fadeIn(0);
		$('.2222').fadeOut(0);
		$('.3333').fadeOut(0);
		$('.4444').fadeIn(300);
		$('.5555').fadeOut(0);
		$('.showProd').fadeOut(0);
	});
	$('.555').click(function(){
		$('.main_BG').fadeIn(0);
		$('.2222').fadeOut(0);
		$('.3333').fadeOut(0);
		$('.4444').fadeOut(0);
		$('.5555').fadeIn(300);
		$('.showProd').fadeOut(0);
	});


	$('.222').mouseover(function(){
		$('.prodTitle1').fadeIn(0);
		$('.prodTitle2').fadeOut(0);
		$('.prodTitle3').fadeOut(0);
		$('.prodTitle4').fadeOut(0);
	});
	$('.333').mouseover(function(){
		$('.prodTitle1').fadeOut(0);
		$('.prodTitle2').fadeIn(0);
		$('.prodTitle3').fadeOut(0);
		$('.prodTitle4').fadeOut(0);
	});
	$('.444').mouseover(function(){
		$('.prodTitle1').fadeOut(0);
		$('.prodTitle2').fadeOut(0);
		$('.prodTitle3').fadeIn(0);
		$('.prodTitle4').fadeOut(0);
	});
	$('.555').mouseover(function(){
		$('.prodTitle1').fadeOut(0);
		$('.prodTitle2').fadeOut(0);
		$('.prodTitle3').fadeOut(0);
		$('.prodTitle4').fadeIn(0);
	});


    $('.pic').click(function(){
        var prodpic = $(this).children('img').attr('src');
        var prodpri = $(this).next().children('p').text();
        var prodtit = $(this).next().children('h4').text();
        var prodtxt = $(this).next().children('div').children('p').text();
        console.log(prodtit);
        $(".lig-pic img").attr("src",prodpic);
        $(".info_title").children('h4').text(prodtit);
        $(".info_txt").children('p').text(prodtxt);
        $(".info_price").children('p').text(prodpri);
	});



	$('.pic').click(function(){
        $('#lightbox').fadeIn(500);
	});
	$('.closeLb').click(function(){
        $('#lightbox').fadeOut(0);
	});
	$('#closebtn').click(function(){
        $('#lightbox').fadeOut(0);
	});


	$('.photoSelect .photo').mouseover(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/3accessories/picselect'+index+'_s.png');
				$(this).addClass('selected');
				$('.showProd .showProd_bg_up').css({'background-image':'url(../images/3accessories/picselectbg_'+index+'.png)'});
			}).mouseleave(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/3accessories/picselect'+index+'.png');
				$(this).removeClass('selected');
			});

	
});
		