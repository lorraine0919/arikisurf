$(function(){
	/*換頁相關*/
	$('.step2_maxContent').hide();
	$('.step3_maxContent').hide();
	$('.step4_maxContent').hide();

	$('#step1tostep2').click(function(){
		$('.step1_maxContent').hide();
		$('.step2_maxContent').show();
	});
	$('#step2tostep3').click(function(){
		$('.step2_maxContent').hide();
		$('.step3_maxContent').show();
	});
	$('#step3tostep4').click(function(){
		$('.step3_maxContent').hide();
		$('.step4_maxContent').show();
	});

	/*步驟二的手風琴*/
	$('.patternselectgroup').hide();
	$('.textureselect').hide();
	$('.colorbtn').click(function(){
		$('.colorselectgroup').slideToggle();
		$('.patternselectgroup').slideUp();
		$('.textureselect').slideUp();
	});
	$('.patternbtn').click(function(){
		$('.patternselectgroup').slideToggle();
		$('.colorselectgroup').slideUp();
		$('.textureselect').slideUp();
	});
	$('.texturebtn').click(function(){
		$('.patternselectgroup').slideUp();
		$('.colorselectgroup').slideUp();
		$('.textureselect').slideToggle();
	});
	$('.orangebtn').click(function(){

	});

	/*步驟一換圖片和敘述和按鈕顏色*/
	var boardnamearr = ['槍板（GUNBOARD）','長板（LONGBOARD）','娛樂板（FUNBOARD）','短板（SHORTBOARD）','魚板（FISHBOARD）','趴板（BODYBOARD）'];

	var boardinfo = 
	['長板，非常適合初學者進階練習的好板型，浮力大、滑水輕鬆、穩定性強',
	'體積小、靈活度比長板優秀，可做出垂直移動、甩大水花、空中動作等，較不適合初學者',
	'取長板與短板的優點而成的，浪小時可以提供充分浮力又可做出比長板靈活之動作。',
	'趴板較不受浪況的限制，價格較其他板型便宜，適合女性、孩童和初學者入門學習',
	'70年代復古板型 通常為雙舵長度比一般衝浪板短，但較厚較寬可提供較大的浮力與靈活度，適合進階衝浪者 是一張饒富趣味的版型。',
	'頭尖尾尖是拿來拼大浪用的速度極快，很適合拼颱風浪'];

	var boardimg = ['ongunboard','onlongboard','onfunboard','onshortboard','onfisgboard','onbodyboard']

	$('.step1_maxContent .board').click(function(){
		$(this).toggleClass('click');
		$('.step1_maxContent .board').not(this).removeClass('click');
		var index=$(this).index();
		$('.step1_maxContent .introduce .contentimg img').attr('src','images/2board/step1/'+boardimg[index]+'.png');
		$('.step1_maxContent .head h3').text(boardnamearr[index]);
		$('.step1_maxContent .content p').text(boardinfo[index]);
	});

});