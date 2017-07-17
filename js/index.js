$(function(){
/*以下是爆炸圖動畫*/
	var controller = new ScrollMagic.Controller();
	for (var i = 1; i < 5; i++) {
		var expolde = new ScrollMagic.Scene({
			triggerElement:"#explodetrigger",
			offset:'100px'
		})
		.setClassToggle('.coating_1 .boardlayer','explode')
		// .addIndicators({name:'對應點'})
		.addTo(controller)
	};
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

/*以下是換圖動畫*/
	if($( window ).width()>960){
		$('.picture_1 .photo').mouseover(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/1common/picselect'+index+'_s.png');
				$(this).addClass('selected');
			}).mouseleave(function(){
				var index = $(this).index()+1;
				$(this).children('img').attr('src','images/1common/picselect'+index+'.png');
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
				$('.picture_1 .maxContent').css({'background-image':'url(../images/1common/picselectbg_'+index+'.png)'});
			});
	}
	
/*以上是換圖動畫*/

/*以下是討論區動畫*/
	$('.forum_1 .postfix').mouseover(function(){
		$('.forum_1 .selected').removeClass('selected');
	});
/*以上是討論區動畫*/

/*以下是最新消息動畫*/
	$('.bulletin_1 .news').click(function(e){
		var index = $(this).index();
		$('.bulletin_1 .left img').attr('src',$(this).find("img").attr('src'));
	});
/*以上是最新消息動畫*/

});//我是結尾