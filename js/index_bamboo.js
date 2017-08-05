$(document).ready(function(){
                                                          
	console.log(sessionStorage.length);  
                                                                                                                                                                                       
     function coconut9487() {
         coconut1 = document.getElementById("coconut");
         exportRoot = new libs5566.coconut();

         stage = new createjs5566.Stage(coconut1);
         stage.addChild(exportRoot);
         stage.update();

         createjs5566.Ticker.setFPS(24);
         createjs5566.Ticker.addEventListener("tick", stage);
         // coconut9487();
     }

	function coconut7849() {
		coconut2 = document.getElementById("coconut2");
		exportRoot = new libs5566.coconut_donkey();

		stage = new createjs5566.Stage(coconut2);
		stage.addChild(exportRoot);
		stage.update();

		createjs5566.Ticker.setFPS(24);
		createjs5566.Ticker.addEventListener("tick", stage);
	}

     // .delay(1000).coconut9487();	

	if(sessionStorage.length==0){
			$('.Entrance3').click(function(){
					$('.logo_canvas1').css('animation-name','circle');
					$('.logo_canvas1').css('animation-duration','4s');
					$('.logo_canvas1').css('animation-fill-mode','forwards');
					// $('.logo_canvas1').stop( true, true );

					// $('.logo_canvas1').css('animation-iteration-count','1');
					$('header').css('animation-name','circle2');
					$('header').css('animation-duration','2.5s');
					$('header').css('animation-fill-mode','forwards');
					$('.cloud2').css('left','55%');
					$('.cloud3').css('right','45%');
					$('.cloud4').css('right','-40%');

					$('.seawater').css('animation-name','circle3');
					$('.seawater').css('animation-duration','5s');
					$('.seawater').css('animation-fill-mode','forwards');
					$('.wood_surf').css('bottom','9.5%');
					$('.wood_surf2').css('opacity','1');
					$('.wood_surf2').css('transform','rotateZ(15deg)');
					$('.wood_surf3').css('opacity','1');
					$('.wood_surf3').css('transform','rotateZ(-15deg)');
					
					$('.gradient_bambooo').css('opacity','1');

					// $('header').css('top','0%');
					$('.Sashimi').css('overflow-y','auto');

					// $('.banner_1').css('height','90'+'vh');
					var session = sessionStorage;
					var indexanimation = 1;
					coconut9487();
					coconut7849();
					console.log($('.seawater').css('top'));
					session['indexanimation']=indexanimation;


			})

			}else{

					$('.logo_canvas1').css('animation-name','circle');
					$('.logo_canvas1').css('animation-duration','0s');
					$('.logo_canvas1').css('animation-fill-mode','forwards');

					$('header').css('animation-name','circle2');
					$('header').css('animation-duration','0s');
					$('header').css('animation-fill-mode','forwards');
					// $('header').css('top','0%');
					$('.Sashimi').css('overflow-y','auto');
					$('.wood_surf').css('bottom','9.5%');
					$('.wood_surf').css('transition','0s');
					$('.wood_surf2').css('opacity','1');
					$('.wood_surf3').css('opacity','1');
					$('.wood_surf2').css('transition','0s');
					$('.wood_surf3').css('transition','0s');
					$('.wood_surf2').css('transform','rotateZ(15deg)');
					$('.wood_surf3').css('transform','rotateZ(-15deg)');
					$('.gradient_bambooo').css('opacity','1');
					$('.gradient_bambooo').css('transition','0s');

					$('.seawater').css('animation-name','circle3');
					$('.seawater').css('animation-duration','0s');
					$('.seawater').css('animation-fill-mode','forwards');
					coconut9487();
					coconut7849();
			}

	


	});