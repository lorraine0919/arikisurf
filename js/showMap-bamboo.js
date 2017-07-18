$(document).ready(function(){

	$('.map_bamboo_3 .mobile').click(function(){
		$(this).addClass('click');
		$('.map_bamboo_3 .mobile').not(this).removeClass('click');
		var index = $(this).index();
		$('.map_bamboo_1 .po').css('border','2px solid #f00');
		$('.map_bamboo_1 .po').eq(index).css('border','2px solid #00f');
		if($(window).width()>1500){
			var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-1000;
			var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-2000;
			console.log($('.map_bamboo_1').width());
			$('.map_bamboo_1').css('bottom',top);
			$('.map_bamboo_1').css('right',left);			
		}else if($(window).width()<1500 && $(window).width()>1000){
			var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-1000;
			var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-1500;
			console.log($('.map_bamboo_1').width());
			$('.map_bamboo_1').css('bottom',top);
			$('.map_bamboo_1').css('right',left);			
		}else if($(window).width()<1000 && $(window).width()>767){
			var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-700;
			var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-1500;
			console.log($('.map_bamboo_1').width());
			$('.map_bamboo_1').css('bottom',top);
			$('.map_bamboo_1').css('right',left);	
		}else{

		}

		var titlearr = ['Pipeline','Superbank','Jeffreys-Bay','Black-Beach','Teahupoo','La-Graviere','Uluwatu','Hakuna','Matata'];
		var textarr = ['',]
		var index = $(this).index();
		$('.map_bamboo_3 .title').text(titlearr[index]);
		$('.map_bamboo_3 .pipeline').attr('src','../images/4wavepoint/'+(titlearr[index])+'.jpg');










	});





});	