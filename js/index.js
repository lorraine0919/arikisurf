$(function(){
	/*以下是爆炸圖動畫*/
	var controller = new ScrollMagic.Controller();
	for (var i = 1; i < 5; i++) {
		var expolde = new ScrollMagic.Scene({
			triggerElement:"#explodetrigger",
			offset:'100px'
		})
		.setClassToggle('.boardlayer','explode')
		// .addIndicators({name:'對應點'})
		.addTo(controller)
	};
		/*滑鼠移到浪板上，跳出介紹訊息，然後畫svg線*/
	$('.boardlayer').mouseover(function(){
		console.log($(this).index());
		var index = $(this).index();
		$('.aboutContent:eq('+index+')').animate({opacity:'1'},100);
		// document.getElementsByClassName("aboutContent")[index].style.opacity=1;
		document.getElementsByClassName("path")[index].style.animation='dash 2s linear alternate forwards';
	}).mouseleave(function(){
		var index = $(this).index();
		$('.aboutContent:eq('+index+')').animate({opacity:'0'},100);
		// document.getElementsByClassName("aboutContent")[index].style.opacity=0;
		document.getElementsByClassName("path")[index].style.strokeDashoffset=1000;
	});
	/*以上是爆炸圖動畫*/

	/*以下是換圖動畫*/
	$('.photo').mouseover(function(){
		var index = $(this).index()+1;
		$(this).children('img').attr('src','images/1common/picselect'+index+'_s.png');
		$(this).toggleClass('selected');
	}).mouseleave(function(){
		var index = $(this).index()+1;
		$(this).children('img').attr('src','images/1common/picselect'+index+'.png');
	});

	$('.photo').click(function(){
		var index = $(this).index()+1;
		$(this).children('img').attr('src','images/1common/picselect'+index+'_s.png');
		$('.selectpicshow').children('img').attr('src','images/1common/piconboard_'+index+'.png');
		$('.selectpicshow').children('img').toggleClass('fadeIn');
		$('.maxContent').css({'background-image':'url(../images/1common/picselectbg_'+index+'.png)'});
	});
	/*以上是換圖動畫*/

});//我是結尾