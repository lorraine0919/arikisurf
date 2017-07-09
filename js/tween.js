$(function(){
	TweenMax.fromTo('.title',1,{
		x:-20,
		opacity:0
	},{	
		x:0,
		opacity:1,
		ease: Bounce.easeOut
	});

	TweenMax.fromTo('.content',1,{
		x:-150,
		opacity:0
	},{	
		x:0,
		opacity:1,
		delay:0.5,
		ease: Elastic.easeOut.config(1, 0.3)
	});
	// var movePhoto=document.getElementsByClassName('movePhoto');
	// for (var i = 0; i < 4; i++) {
	// 	TweenMax.fromTo(movePhoto[i],1,{
	// 		x:-20,
	// 		opacity:0
	// 	},{	
	// 		x:0,
	// 		opacity:1,
	// 		delay:1+i*0.5,
	// 		ease: Bounce.easeOut
	// 	});
	// }
	var controller = new ScrollMagic.Controller(); //建立場景
	var wp = new TimelineMax().staggerFromTo('.movePhoto',1,{
		y:-50,
		opacity:0},{
		y:0,
		opacity:1,
		},0.5);
	//觸發時跑的動畫

	var scene01 = new ScrollMagic.Scene({
		triggerElement:'#trigger_section01', //html的id
		reverser:true,//滑鼠滾回去是否會回去
		offset:'200px',//trigger 跟start的距離
		//duration:90%
	})
	//什麼時候觸發

	.setTween(wp) //引用上面的動畫
	.addIndicators() //產生參考點讓你對應
	.addTo(controller); //把controller帶進來，放到場景


	var ourScene02 = new ScrollMagic.Scene({
		triggerElement:'#trigger_section02',
		offset:'200px' //距離此div的距離
	})
	.setClassToggle('.showPhotoAndTitle','fadeIn') //指定div，加入class
	.addIndicators({name:'bgc start'}) //自己命名對應點
	.addTo(controller); //跟上例用同一個ScrollMagic.Controller物件

	var ourScene03 = new ScrollMagic.Scene({
		triggerElement:'#trigger_section03',
		offset:'200px' //距離此div的距離
	})
	.setClassToggle('.section03','fadeIn') //指定div，加入class
	.addIndicators() 
	.addTo(controller); //跟上例用同一個ScrollMagic.Controller物件

	var ourScene04 = new ScrollMagic.Scene({
		triggerElement:'#trigger_section04',
		offset:'200px', //距離此div的距離
		duration:'300' //移動距離
	})
	.setPin('.colorPattern') //使用pin方法
	.addIndicators() 
	.addTo(controller); //跟上例用同一個ScrollMagic.Controller物件

	var ourScene05 = new ScrollMagic.Scene({
		triggerElement:'#trigger_section05',
		offset:'50px', //距離此div的距離
		duration:'200', //移動多久
		reverse:true //滑鼠滾回去是否會回去
	})
	.setTween(TweenMax.staggerTo('.enterText',1,{
		x:1350,							//動畫時間
		ease:Strong.easeInOut
	})) //使用setTween方法
	.addIndicators() 
	.addTo(controller); //跟上例用同一個ScrollMagic.Controller物件


	$('#container').stellar(
	// {
	// 	horizontalOffset:0,
	// 	verticalOffset:0,
	// }
	);

  $('a.pageScroll').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 700);
                return false;
            }
        }
    });
});


// $(function () {
//     TweenMax.fromTo('.title', 1, {
//         x : -20,
//         y: -100,
//         opacity: 0
//     }, {
//         x: 0,
//         y: 0,
//         opacity: 1,
//         ease: Power3.easeOut
//     });
//     TweenMax.fromTo('.content', 1, {
//         x: -150,
//         opacity: 0
//     }, {
//         x: 0,
//         opacity: 1,
//         delay : 1,
//         ease: Elastic.easeOut.config(1, 0.3)
//     });

//     console.log('tween ok');
// });