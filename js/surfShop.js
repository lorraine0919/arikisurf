$(document).ready(function(){
	
	
	$('.LeashBtn').click(function(){
		$('.main_BG').fadeIn(0);
		$('.Leash').fadeIn(300);
		$('.Fin').fadeOut(0);
		$('.Wax').fadeOut(0);
		$('.Wetsuit').fadeOut(0);
		$('.showProd').fadeOut(0);
	});
	$('.FinBtn').click(function(){
		$('.main_BG').fadeIn(0);
		$('.Leash').fadeOut(0);
		$('.Fin').fadeIn(300);
		$('.Wax').fadeOut(0);
		$('.Wetsuit').fadeOut(0);
		$('.showProd').fadeOut(0);
	});
	$('.WaxBtn').click(function(){
		$('.main_BG').fadeIn(0);
		$('.Leash').fadeOut(0);
		$('.Fin').fadeOut(0);
		$('.Wax').fadeIn(300);
		$('.Wetsuit').fadeOut(0);
		$('.showProd').fadeOut(0);
	});
	$('.WetsuitBtn').click(function(){
		$('.main_BG').fadeIn(0);
		$('.Leash').fadeOut(0);
		$('.Fin').fadeOut(0);
		$('.Wax').fadeOut(0);
		$('.Wetsuit').fadeIn(300);
		$('.showProd').fadeOut(0);
	});

   if ($(window).width()>768) {
	$('.LeashBtn').mouseover(function(){
		$('.prodTitle1').fadeIn(0);
		$('.prodTitle2').fadeOut(0);
		$('.prodTitle3').fadeOut(0);
		$('.prodTitle4').fadeOut(0);
		$('.man_ff').attr('id', 'man_leash');
	}).mouseleave(function(){
		$('.man_ff').attr('id', '');
	});
	$('.FinBtn').mouseover(function(){
		$('.prodTitle1').fadeOut(0);
		$('.prodTitle2').fadeIn(0);
		$('.prodTitle3').fadeOut(0);
		$('.prodTitle4').fadeOut(0);
		$('.man_ee').attr('id', 'man_fin');
	}).mouseleave(function(){
		$('.man_ee').attr('id', '');
	});
	$('.WaxBtn').mouseover(function(){
		$('.prodTitle1').fadeOut(0);
		$('.prodTitle2').fadeOut(0);
		$('.prodTitle3').fadeIn(0);
		$('.prodTitle4').fadeOut(0);
		$('.man_gg').attr('id', 'man_wax');
	}).mouseleave(function(){
		$('.man_gg').attr('id', '');
	});
	$('.WetsuitBtn').mouseover(function(){
		$('.prodTitle1').fadeOut(0);
		$('.prodTitle2').fadeOut(0);
		$('.prodTitle3').fadeOut(0);
		$('.prodTitle4').fadeIn(0);
		$('.man_bb').attr('id', 'man_suit');
	}).mouseleave(function(){
		$('.man_bb').attr('id', '');
	});
    }


    $('.pic').click(function(){
    	var index = $(this).parent().parent().parent().parent().parent().index();
    	// console.log(index);
    	// console.log(index);
        var prodpic = $(this).children('img').attr('src');
        prodImg = $(this).children('img').attr('src').replace('images/3accessories/','');
        var prodpri = $(this).next().children('p').text();
        var prodtit = $(this).next().children('h4').text();
        var prodtxt = $(this).next().children('div').children('p').text();
        var prodname = $(this).parent().parent().parent().parent().siblings('.prodname').val();
        var prodno = $(this).parent().parent().parent().parent().siblings('.prodno').val();
       	$('.lightboxproductno').eq(0).text(prodno);
       	$('.lightboxproductname').eq(0).text(prodname);
        // console.log(prodno);
        $(".lig-pic img").attr("src",prodpic);
        $(".info_title").children('h4').text(prodtit);
        $(".info_txt").children('p').text(prodtxt);
        $(".info_price").children('p').text(prodpri);
//-------光箱直接購買--------
		// $('#gotocart').click(function(){
		// 	// $('.leashsend').eq(index).value=$('.leashno').eq(index).value;
		// 	if($('.Leash').eq(0).css('display')!='none'){
		// 		$('.leashform').eq(index).submit();
		// 	}else if($('.Fin').eq(0).css('display')!='none'){
		// 		$('.finform').eq(index).submit();
		// 	}else if($('.Wax').eq(0).css('display')!='none'){
		// 		$('.waxform').eq(index).submit();
		// 	}else{
		// 		$('.suitform').eq(index).submit();
		// 	}
		// });
//-------光箱直接購買結束--------
	});
//--------直接購買----
	// $('.goCart').click(function(){
	// 	console.log('1');
	// 	$(this).parent().parent().parent().parent().parent().submit();
	// 		// $('.leashsend').eq(index).value=$('.leashno').eq(index).value;

	// 	});
//--------直接購買結束----
 //    var storage = sessionStorage;
 //    storage['gotocart']='';
	// $('#addtocart').click(function(){
	// 	var lightboxproductno = $('.lightboxproductno').eq(0).text();
	// 	console.log(lightboxproductno);
	// 		storage[lightboxproductno]=true;		
	// 		storage['gotocart'] += lightboxproductno + ',';
	// });
//-------光箱加入購物車--------
	$('#addtocart').click(function(){
			console.log(prodImg);
			$.post('surfShop_cart_add.php',{
				    'prod_no' : $('.lightboxproductno').eq(0).text() , 
			 		'prod_name' : $('.lightboxproductname').eq(0).text() ,
			 		'prod_price' :  $(this).parent().siblings().children('.pricechange').val(),
			 		'prod_img' :  prodImg				
				},function(rs){
					// alert(rs);
			});
		});
//-------光箱加入購物車結束--------

//-------加入購物車--------
	$('.addCart').click(function(){
			console.log($(this).parent().parent().parent().parent().siblings('.prodimg').val());
			$.post('surfShop_cart_add.php',{
				    'prod_no' : $(this).parent().parent().parent().parent().siblings('.prodno').val(), 
			 		'prod_name' : $(this).parent().parent().parent().parent().siblings('.prodname').val() ,
			 		'prod_price' :  $(this).parent().parent().parent().parent().siblings('.prodprice').val(),
			 		'prod_img' :  $(this).parent().parent().parent().parent().siblings('.prodimg').val()				
				},function(rs){
					// alert(rs);
			});
		});
//-------加入購物車--------
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
				$('.showProd .showProd_bg_up').css({'background-image':'url(images/3accessories/picselectbg_'+index+'.png)'});
			}).mouseleave(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/3accessories/picselect'+index+'.png');
				$(this).removeClass('selected');
			});
	if($(window).width()<600){
		for (var i =1 ; i <=$('.photoSelect .photo').length; i++) {
		$('.photoSelect .photo').eq(i-1).children('img').attr('src','images/3accessories/picselect'+i+'_s.png');
		// $('.showProd .showProd_bg_up').eq(i).css({'background-image':'url(images/3accessories/picselectbg_'+i+'.png)'});
		}
	
		$('.photoSelect .photo').addClass('selected');
	}

	
});
		