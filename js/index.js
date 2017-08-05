$(function(){
/*以下是爆炸圖動畫*/
	$('.arikicommon_breadcrumb').remove();
	var controller = new ScrollMagic.Controller();
		var expolde = new ScrollMagic.Scene({
			triggerElement:"#explodetrigger",
			offset:'100px'
		})
		.setClassToggle('.coating_1 .boardlayer','explode')
		// .addIndicators({name:'對應點'})
		.addTo(controller)
		/*滑鼠移到浪板上，跳出介紹訊息，然後畫svg線*/
	$('.coating_1 .boardlayer').mouseover(function(){
		console.log($(this).index());
		var index = $(this).index();
		$('.coating_1 .aboutContent:eq('+index+')').animate({opacity:'1'},100);
		// document.getElementsByClassName("aboutContent")[index].style.opacity=1;
		document.getElementsByClassName("path")[index].style.animation='dash 2s linear alternate forwards';
	}).mouseleave(function(){
		var index = $(this).index();
		$('.coating_1 .aboutContent:eq('+index+')').animate({opacity:'0'},100);
		// document.getElementsByClassName("aboutContent")[index].style.opacity=0;
		document.getElementsByClassName("path")[index].style.strokeDashoffset=1000;
	});
/*以上是爆炸圖動畫*/

/*以下是爆炸圖rwd動畫*/

	// var hundred = $('.demoimg').width();
	// var ulmarginleft = parseInt($('.coating_1 .demoimg ul').css('margin-left'));
	var count = 0;
	// console.log(ulmarginleft/hundred);
		$('#rwdcoatingleft').click(function(){
			if(count<4){
				count++;
				$('.coating_1 .demoimg ul').animate({'margin-left':'-=82%'});
				var ulmarginleft = parseInt($('.coating_1 .demoimg ul').css('margin-left'));
				// console.log(ulmarginleft/hundred);
				// console.log(count);				
			}
			console.log(count);
		});
		$('#rwdcoatingright').click(function(){
			if(count>0){
				count--;
				$('.coating_1 .demoimg ul').animate({'margin-left':'+=82%'});
				var ulmarginleft = parseInt($('.coating_1 .demoimg ul').css('margin-left'));
				// console.log(ulmarginleft/hundred);
				// console.log(count);		
			}

		});


/*以上是爆炸圖rwd動畫*/

/*以下是換圖動畫*/
	if($( window ).width()>960){
		$('.picture_1 .photo').mouseover(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/1common/picselect'+index+'_s.png');
				$(this).addClass('selected');
			}).mouseleave(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/1common/picselect'+index+'.png');
				$(this).removeClass('selected');
			});

			$('.picture_1 .photo').click(function(){
				// var condition = 1;
				var index = $(this).index()+1;
				/**/
				// $(this).children('img').attr('src','images/1common/picselect'+index+'_s.png');
				// console.log($('.picture_1 .selectpicshow').children('img'));
				
				/*按按鈕換浪板圖*/
				$('.picture_1 .selectpicshow').fadeOut(0,function(){
					$('.picture_1 .selectpicshow').children('img').attr('src','images/1common/piconboard_'+index+'.png');
				}).fadeIn(1000);
				// $('.picture_1 .selectpicshow').children('img').toggleClass('fadeIn');
				/*背後透明圖*/
				$('.picture_1 .maxContent').css({'background-image':'url("images/1common/picselectbg_'+index+'.png")'});
			});
	}
	
/*以上是換圖動畫*/

/*以下是rwd換圖動畫*/
	var rwdpiccount = 2;
	$('.rwdpicleft').click(function(){
		// console.log('1');
		if(rwdpiccount>2){
			rwdpiccount=1;
		}else{
			rwdpiccount++;
		}
		$('.photo.selected img').attr('src','images/1common/picselect'+rwdpiccount+'_s.png');
	});
	$('.rwdpicright').click(function(){
		// console.log(rwdpiccount);
		if(rwdpiccount<2){
			// console.log('1');
			rwdpiccount=3;
		}else{
			rwdpiccount--;
		}
		$('.photo.selected img').attr('src','images/1common/picselect'+rwdpiccount+'_s.png');
	});
/*以上是rwd換圖動畫*/

/*以下是討論區動畫*/
	$('.forum_1 .postfix').mouseover(function(){
		$('.forum_1 .selected').removeClass('selected');
	});
/*以上是討論區動畫*/

/*以下是討論區rwd動畫*/

	$('.loop').owlCarousel({
	    center: true,
	    items:2,
	    loop:true,
	    margin:10,
	    responsive:{
	    	0:{
	    		items:1
	    	},
	        600:{
	            items:3
	        }
    }
	});
	$('.owl-dots').css('display','none');




/*以下是討論區rwd動畫*/


/*以下是最新消息動畫點按換圖*/

	$('.bulletin_1 .news').click(function(){
		$('.bulletin_1 .left img').attr('src',$(this).find("img").attr('src'));
	});
	var x = 1;
/*以上是最新消息動畫點按換圖*/

/*以下是最新消息動畫計時器*/

    changenewspicbytime();
    var newsnocount=0;

    function changenewspicbytime() {
    	// console.log('newsnocount');
       setTimeout(changenewspicbytime,3000);
       $('.bulletin_1 .left img').attr('src',$('.bulletin_1 .news').eq(newsnocount).find('img').attr('src'));
       $('.bulletin_1 .news').find('.newsptitle').css('color','#ffffff');
       $('.bulletin_1 .news').eq(newsnocount).find('.newsptitle').css('color','#e97b23');
        $('.bulletin_1 .news').find('.btn a').css('background-color','#1a191c');           
        $('.bulletin_1 .news').eq(newsnocount).find('.btn a').css('background-color','#e97b23');      
       if(newsnocount<2){
       	newsnocount++;
       }else{
       	newsnocount=0;
       }
       
    }
/*以上是最新消息動畫計時器*/


});//我是結尾
