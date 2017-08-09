$(document).ready(function(){
	var cssleft =$('.map_bamboo_1 .po').eq(0).position().left;
	var wholewidth=$('.map_bamboo_1').width();
	cssleft = cssleft- wholewidth*1/6;
	$('.map_bamboo_1').css('right',cssleft);

	var csstop =$('.map_bamboo_1 .po').eq(0).position().top;
	csstop = csstop- wholewidth*1/11;
	$('.map_bamboo_1').css('bottom',csstop);


	// =====================================================



	// ======================================================

	var titlearr = ['Pipeline','Superbank','Jeffreys-Bay','Black-Beach','Teahupoo','La-Graviere','Uluwatu','Cloudbreak',"Maverick's"];
	var infoarr = 
	['作為著名的衝浪勝地，Pipeline吸引著全世界最優秀的衝浪者前來大展身手，各種全球最知名的衝浪比賽也會在這裡舉行。',

	'每年的Quicksilver職業比賽在這裡舉行，當然你在這裡玩的時候很可能不小心就碰到某個世界冠軍。浪高一般3米，長度200米，好的時候可達500米，最好的季節是夏末秋初',

	'世界上管浪最好的地方，絕對是很多數浪人心中的最佳浪點，電影藍色激情2中的女主尋浪的終點，有適合各種水平的浪，最長時浪可持續800米，最好的月份是6到八月,浪高3米以內，是絕佳的表演場地，每年的7月份Billabong職業賽在這裡舉辦',

	"有很強的暗流，浪比較急，不適合初學者，也是出了名的擁擠，和其他加州沿岸的浪點一樣冬季的浪比較好，浪高可達5米",

	'在這個衝浪最早的起源地，數千年來沒有人敢挑戰，直到近30年短板普及。浪高一般3米以上高者達7米，2000年巨浪挑戰者Laird Hamilton 在這裡歷史性地挑戰了20米高的巨浪。新手還是不要去作死。',

	'適合初學者。最佳衝浪時間為9到10月份和5、6月份，浪高1-3米，每年九月Quicksilver職業比賽在這裡舉行',

	'岸邊是一個有名的懸崖。因為常年有浪所以擁擠，4月到9月的浪都比較好，水溫也常年在28度，浪高1-4米。因為是礁石浪所以也不適合初學者',

	'這裡的浪，在離岸上1600米的地方形成，可持續500米，速度較快，大浪可達10米高，海底是珊瑚礁，水質異常清澈，因為比較偏，成本高，所以人不太多，基本只有資深並且有經濟實力的浪人才會去，適合高手，全年有好浪，一般在3米',
	
	'浪最高可達25米，最勇敢的浪人挑戰的地方，滑水無法進入浪區，須乘坐摩托艇'
	];

	var wave_number = ['101','102','103','104','105','106','107','108','109'];
    $('.address_mobile').attr('href','map_session.php?wave_number=101');
	$('.map_bamboo_3 .mobile').click(function(){
		$(this).addClass('click');
		$('.map_bamboo_3 .mobile').not(this).removeClass('click');
		var index = $(this).index();

		var newhref='map_session.php?wave_number='+wave_number[index];
		$('.address_mobile').attr('href',newhref);
		console.log(newhref);

		/*以下是編輯時好知道定位點在哪*/
		// $('.map_bamboo_1 .po').css('border','2px solid #f00'); 
		// $('.map_bamboo_1 .po').eq(index).css('border','2px solid #00f');

		var cssleft =$('.map_bamboo_1 .po').eq(index).position().left;
		var wholewidth=$('.map_bamboo_1').width();
		cssleft = cssleft- wholewidth*1/6;
		// $('.map_bamboo_1').css('right',percentleft+10+'%');
		$('.map_bamboo_1').css('right',cssleft);

		var csstop =$('.map_bamboo_1 .po').eq(index).position().top;
		// $('.map_bamboo_1').css('bottom',percenttop+10+'%');
		// csstop = csstop- wholewidth*1/5;
		csstop = csstop- wholewidth*1/11;
		$('.map_bamboo_1').css('bottom',csstop);

		// $('.map_bamboo_1').css('top',csstop);

		// var csstop = $('.map_bamboo_1 .po').eq(index).position().top - $(window).height()* 1/3;
		// $('.map_bamboo_1').css('top',csstop);		
		// if($(window).width()>1500){

		// 	var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-1000;
		// 	var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-2000;
		// 	console.log($('.map_bamboo_1').width());
		// 	$('.map_bamboo_1').css('bottom',top);
		// 	$('.map_bamboo_1').css('left',left);			
		// }else if($(window).width()<1500 && $(window).width()>1000){
		// 	var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-1000;
		// 	var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-1500;
		// 	console.log($('.map_bamboo_1').width());
		// 	$('.map_bamboo_1').css('bottom',top);
		// 	$('.map_bamboo_1').css('right',left);			
		// }else if($(window).width()<1000 && $(window).width()>767){
		// 	var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-700;
		// 	var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-1500;
		// 	console.log($('.map_bamboo_1').width());
		// 	$('.map_bamboo_1').css('bottom',top);
		// 	$('.map_bamboo_1').css('right',left);	
		// }else{
		// 	var top = parseInt($('.map_bamboo_1 .po').eq(index).position().top)-500;
		// 	var left = parseInt($('.map_bamboo_1 .po').eq(index).position().left)-550;
		// 	console.log($('.map_bamboo_1').width());
		// 	$('.map_bamboo_1').css('bottom',top);
		// 	$('.map_bamboo_1').css('right',left);	
		// }


		$('.map_bamboo_3 .title').text(titlearr[index]);
		$('.map_bamboo_3 .pipeline').attr('src','images/4wavepoint/'+(titlearr[index])+'.jpg');
		$('.map_bamboo_3 .info').text(infoarr[index]);

	});//$('.map_bamboo_3 .mobile').click
	var rwdarrowcount=0;
	function controlpoint (rwdarrowcount){
		var cssleft =$('.map_bamboo_1 .po').eq(rwdarrowcount).position().left;
		var wholewidth=$('.map_bamboo_1').width();
		cssleft = cssleft- wholewidth*1/6;
		$('.map_bamboo_1').css('right',cssleft);

		var csstop =$('.map_bamboo_1 .po').eq(rwdarrowcount).position().top;
		csstop = csstop- wholewidth*1/11;
		$('.map_bamboo_1').css('bottom',csstop);
	}
			
	$('.bamboo_Direction_right').click(function(){

			if(rwdarrowcount==0){
				rwdarrowcount=8;
			}else{
				rwdarrowcount--;
			}
			$('.address_mobile').attr('href','map_session.php?wave_number=10'+(rwdarrowcount+1));
			$('.bamboo_menu_phone .title').text(titlearr[rwdarrowcount]);
			$('.bamboo_menu_phone_text .info').text(infoarr[rwdarrowcount]);

			controlpoint(rwdarrowcount);
			console.log(rwdarrowcount);				

			
	});

	$('.bamboo_Direction_left').click(function(){


			if(rwdarrowcount==8){
				rwdarrowcount=0;
			}else{
				rwdarrowcount++;
			}
			$('.address_mobile').attr('href','map_session.php?wave_number=10'+(rwdarrowcount+1));
			$('.bamboo_menu_phone .title').text(titlearr[rwdarrowcount]);
			$('.bamboo_menu_phone_text .info').text(infoarr[rwdarrowcount]);

			controlpoint(rwdarrowcount);	
			console.log(rwdarrowcount);					
	});



	// $('#showInfo').click(function(){
	// 	$('.bamboo_addressfix').animate({height:'31vh'});
	// 	$('#showInfo').hide();
	// 	$('#hideInfo').show();
	// })
	// $('#hideInfo').click(function(){
	// 	$('.bamboo_addressfix').animate({height:'10vh'});
	// 	$('#showInfo').show();
	// 	$('#hideInfo').hide();
	// });



});	