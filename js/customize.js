$(function(){
/*↓換頁相關*/
	$('.step2_maxContent').hide();
	$('.step3_maxContent').hide();
	$('.step4_maxContent').hide();

	function tostep1(){
		$('.step2_maxContent').hide();
		$('.step1_maxContent').show();		
	}
	function tostep2(){
		$('.step1_maxContent').hide();
		$('.step3_maxContent').hide();
		$('.step2_maxContent').show();		
	}
	function tostep3(){
		$('.step2_maxContent').hide();
		$('.step4_maxContent').hide();
		$('.step3_maxContent').show();		
	}
	function tostep4(){
		$('.step3_maxContent').hide();
		$('.step4_maxContent').show();		
	}

	$('#step2tostep1').click(tostep1);
	$('#step1tostep2').click(tostep2);
	$('#step3tostep2').click(tostep2);
	$('#step2tostep3').click(tostep3);
	$('#step4tostep3').click(tostep3);
	$('#step3tostep4').click(tostep4);


/*↑換頁相關*/

/*↓步驟一換圖片和敘述和按鈕顏色*/
	var boardnamearr = ['槍板<span>GUNBOARD</span>','長板<span>LONGBOARD</span>','娛樂板<span>FUNBOARD</span>','短板<span>SHORTBOARD</span>','魚板<span>FISHBOARD</span>','趴板<span>BODYBOARD</span>'];

	var boardinfo = 
	['頭尖尾尖是拿來拼大浪用的速度極快，很適合拼颱風浪',
	'長板，非常適合初學者進階練習的好板型，浮力大、滑水輕鬆、穩定性強',
	'取長板與短板的優點而成的，浪小時可以提供充分浮力又可做出比長板靈活之動作。',
	'體積小、靈活度比長板優秀，可做出垂直移動、甩大水花、空中動作等，較不適合初學者',
	'70年代復古板型 通常為雙舵長度比一般衝浪板短，但較厚較寬可提供較大的浮力與靈活度，適合進階衝浪者 是一張饒富趣味的版型。',
	'趴板較不受浪況的限制，價格較其他板型便宜，適合女性、孩童和初學者入門學習'
	];

	var boardimg = ['ongunboard','onlongboard','onfunboard','onshortboard','onfishboard','onbodyboard'];
	var boarddemo = ['gunboard','longboard','funboard','shortboard','fishboard','bodyboard'];

	$('.step1_maxContent .board').click(function(){
		$(this).addClass('click');
		$('.step1_maxContent .board').not(this).removeClass('click');
		var index=$(this).index();
		$('.step1_maxContent .introduce .contentimg img').attr('src','images/2board/step1/'+boardimg[index]+'.png');
		$('.step1_maxContent .head h3').html(boardnamearr[index]);
		$('.step1_maxContent .content p').text(boardinfo[index]);
		$('.step1_maxContent .demo .boarddemo').attr('src','images/2board/'+boarddemo[index]+'/'+boarddemo[index]+'.png');
	});

	/*我是rwd換圖片和敘述和按鈕顏色*/

/*↑步驟一換圖片和敘述和按鈕顏色*/
	$('.rwdSelectboardMenu li').click(function(){
		$(this).addClass('click');
		$('.rwdSelectboardMenu li').not(this).removeClass('click');
		var index=$(this).index();
		$('.step1_maxContent .introduce .contentimg img').attr('src','images/2board/step1/'+boardimg[index]+'.png');
		$('.step1_maxContent .rwdintroduce .rwdboardinfo').text(boardinfo[index]);
		$('.step1_maxContent .demo .boarddemo').attr('src','images/2board/'+boarddemo[index]+'/'+boarddemo[index]+'.png');
	});
/*↓步驟一rwd的拉出介紹*/
	$('.btnfield').click(function(){
		$('.rwdintroduce').toggleClass('show');

	});
/*↑步驟一rwd的拉出介紹*/

/*↓步驟一顯示svg板型*/

/*↑步驟一顯示svg板型*/

	function setsvgboard(boardshape){
		$('.bordshape').html(boardshape);
		var idarr = ['mainshapemask','mainshapecolorid','lightshapeid','shadowshapeid',"lightmaskid"];
		var classarr = ['','maincolor','shadowcolor','lightcolor',''];

		for (var i = 0; i < $('.bordshape').length; i++) {
			$('.bordshape').eq(i).children('path').attr('id',idarr[i]);
		}
		for (var i = 0; i < $('.bordshape').length; i++) {
			$('.bordshape').eq(i).children('path').attr('class',classarr[i]);
		}
		$('#mainshapecolorid').attr('filter','url(#dropshadow)');
	}
	var boardshape='<path  d="M119,168.6C111.5,54.3,73.8,58.4,73.8,58.4v0c0,0-37.7-4-45.2,110.2 C20.9,286.2,33,451.9,63.2,485.3c3.5,3.8,6.7,2.9,10.6,2.9v0c3.9,0,7.1,0.9,10.6-2.9C114.6,451.9,126.7,286.2,119,168.6z"/>';

	setsvgboard(boardshape);

	$('.step1_maxContent .board').click(function(){
		if($('.step1_maxContent .board').eq(0).hasClass('click')){
			// gunboard
			boardshape='<path  d="M74.7,491.5c-56-44.5-55.9-263.2-37.6-380.1C46.7,51,70.3,21.5,70.3,21.5l0,0.1 c0.8,1,24.4,30.1,34.8,89.3c20.6,116.5,28,334.9-27.1,380.5c0,0-0.5,0.6-1.6,0.6C75.2,492,74.7,491.5,74.7,491.5z"/>';
			setsvgboard(boardshape);
			$('#svgothers').html('<line x1="70.3" y1="21.5" x2="76.4" y2="492" style="opacity:0.2; clip-path:url(#mask); fill:none; stroke:#040000; stroke-miterlimit:10;clip-path:url(#maskofimg);"/>');

		}else if($('.step1_maxContent .board').eq(1).hasClass('click')){
			// longboard
			boardshape='<path  d="M119,168.6C111.5,54.3,73.8,58.4,73.8,58.4v0c0,0-37.7-4-45.2,110.2 C20.9,286.2,33,451.9,63.2,485.3c3.5,3.8,6.7,2.9,10.6,2.9v0c3.9,0,7.1,0.9,10.6-2.9C114.6,451.9,126.7,286.2,119,168.6z"/>';

			setsvgboard(boardshape);
			$('#svgothers').html('');
		}else if($('.step1_maxContent .board').eq(2).hasClass('click')){
			// funboard
			boardshape='<path d="M72.8,96c0,0-51.9,9-49.9,187s37.8,206.3,49.9,206.3c12.1,0,47.9-28.3,49.9-206.3 S72.8,96,72.8,96z"/>';
			setsvgboard(boardshape);
			$('#svgothers').html('<path d="M72.8,103.8c0,0-45.2,8.6-43.5,179.6s32.9,198.1,43.5,198.1c10.6,0,41.7-27.2,43.5-198.1 C118,112.5,72.8,103.8,72.8,103.8z" style="opacity:0.38;fill:none;stroke:#000000;stroke-miterlimit:10;"/><line x1="72.8" y1="103.8" x2="72.8" y2="481.5" style="opacity:0.38;fill:none;stroke:#000000;stroke-miterlimit:10;"/>');
		}		
	});
	

 


/*↓步驟二的手風琴*/
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
/*↑步驟二的手風琴*/

/*↓步驟二rwd的手風琴*/
	$('.rwdselectstyle .patternarea').hide();
	$('.rwdselectstyle .texturecontent').hide();
	$('.rwdselectstyle .colorgroup .btn').click(function(){
		$('.rwdselectstyle .colorall').slideToggle();
		$('.rwdselectstyle .patternarea').slideUp();
		$('.rwdselectstyle .texturecontent').slideUp();
	});
	$('.rwdselectstyle .patterngroup .btn').click(function(){
		$('.rwdselectstyle .patternarea').slideToggle();
		$('.rwdselectstyle .colorall').slideUp();
		$('.rwdselectstyle .texturecontent').slideUp();
	});
	$('.rwdselectstyle .texturegroup .btn').click(function(){
		$('.rwdselectstyle .texturecontent').slideToggle();
		$('.rwdselectstyle .colorall').slideUp();
		$('.rwdselectstyle .patternarea').slideUp();
	});
	$('.orangebtn').click(function(){

	});
/*↑步驟二rwd的手風琴*/

/*↓步驟二按按鈕換顏色*/
	$('.selectgroup .btn').click(function(){
		$(this).addClass('click');
		$('.selectgroup .btn').not(this).removeClass('click');
	});
/*↑步驟二按按鈕換顏色*/

/*↓步驟二rwd按按鈕換顏色*/
	$('.selectAndNext .whitebtn').click(function(){
		$(this).addClass('orangebtn');
		$('.selectAndNext .whitebtn').not(this).removeClass('orangebtn');
	});
/*↑步驟二rwd按按鈕換顏色*/

/*↓步驟二選到步驟一選的浪板*/
	$('#step1tostep2').click(function(){
		$('.step2_maxContent .boarddemo').attr('src',$('.step1_maxContent .boarddemo').attr('src'));
	});

/*↑步驟二選到步驟一選的浪板*/

/*↓步驟二，色球顏色*/
	for (var i = 0; i < 3; i++) {
		var colorarr = ['#fff','#009bd8','#ffd105'];
		$('.step2_maxContent .colorselectgroup .color .circle').eq(i).css('background-color',colorarr[i]);
	}
/*↑步驟二，色球顏色*/
$('.step2_maxContent .colorselectgroup .color').click(function(){
	var index=$(this).index();
	console.log(index);
	if(index==0){
		var newsrc=$('.step1_maxContent .boarddemo').attr('src');
		$('.step2_maxContent .boarddemo').attr('src',newsrc);
	}else if(index==1){
		var oldsrc=$('.step1_maxContent .boarddemo').attr('src');
		var newsrc=oldsrc.substr(0,oldsrc.lastIndexOf('.'))+'_blue.png';
		$('.step2_maxContent .boarddemo').attr('src',newsrc);
	}else{
		var oldsrc=$('.step1_maxContent .boarddemo').attr('src');
		var newsrc=oldsrc.substr(0,oldsrc.lastIndexOf('.'))+'_yellow.png';
		$('.step2_maxContent .boarddemo').attr('src',newsrc);
	}
});
/*↑步驟二，改變浪板顏色*/

/*↓步驟二，改變浪板顏色*/

/*↓步驟二換材質說明與按鈕外框*/
	$('.step2_maxContent .texturegorup .texture').click(function(){
		var index=$(this).index();
		$(this).addClass('click');
		$('.step2_maxContent .texturegorup .texture').not(this).removeClass('click');
		var texturename=['環氧樹脂（Epoxy）','木質','玻璃纖維（POLY）'];
		var textureinfo = [
		'構造由Eps(較高級的保麗龍)＋玻璃纖維布＋Epoxy樹脂所組成，重量較輕，靈敏度較佳，但是穩定度較差，少了玻纖板的紮實感！<br><br>由於Epoxy樹脂的硬度較硬，所以優點是較耐撞擊，但是也因為硬而無彈性，在大浪時有可能發生直接斷裂的情形',
		'由頂尖品質的賽普里斯木製成，並由環氧樹脂所包覆，顯示出獨有的質感。最高規格的保護，非常適合收藏、裝飾。',
		'其主要構造為PU泡棉(Foam)＋玻璃纖維布＋保麗樹脂，由於材質的關係所以重量較Epoxy的浪板略重，但是穩定性較佳，尤其是在浪況較大時可以明顯的感受到！<br><br>若要挑剔其缺點的話，就是較不耐撞擊，遭受到硬物的碰撞時可能會發生浪板表面的樹脂破裂的情形，不過這些都是可以經由修補復原的。'
		];
		$('.step2_maxContent .introduce .content p').html(textureinfo[index]);
		$('.step2_maxContent .introduce .head h3').text(texturename[index]);
	});
/*↑步驟二換材質說明與按鈕外框*/

/*↓步驟二rwd換材質說明與按鈕外框*/
	$('.rwdselectstyle .texturegroup .texture').click(function(){
		var index=$(this).index();
		$(this).addClass('selected');
		$('.rwdselectstyle .texturegroup .texture').not(this).removeClass('selected');
		var texturename=['環氧樹脂（Epoxy）','木質','玻璃纖維（POLY）'];
		var textureinfo = [
		'構造由Eps(較高級的保麗龍)＋玻璃纖維布＋Epoxy樹脂所組成，重量較輕，靈敏度較佳，但是穩定度較差，少了玻纖板的紮實感！<br><br>由於Epoxy樹脂的硬度較硬，所以優點是較耐撞擊，但是也因為硬而無彈性，在大浪時有可能發生直接斷裂的情形',
		'由頂尖品質的賽普里斯木製成，並由環氧樹脂所包覆，顯示出獨有的質感。最高規格的保護，非常適合收藏、裝飾。',
		'其主要構造為PU泡棉(Foam)＋玻璃纖維布＋保麗樹脂，由於材質的關係所以重量較Epoxy的浪板略重，但是穩定性較佳，尤其是在浪況較大時可以明顯的感受到！<br><br>若要挑剔其缺點的話，就是較不耐撞擊，遭受到硬物的碰撞時可能會發生浪板表面的樹脂破裂的情形，不過這些都是可以經由修補復原的。'
		];
		$('.rwdintroduce .texturetitle').text(texturename[index]);
		$('.rwdintroduce .rwdtextureinfo').html(textureinfo[index]);
		$('.rwdselectstyle .texturegroup .title').text(texturename[index]);
	});
/*↑步驟二rwd換材質說明與按鈕外框*/


/*↓步驟二動態產生圖案group長度*/
var patterns=$('.selectAndNext .pattern').length;
var newwidth = $('.selectAndNext .pattern').width()*patterns;
$('.selectAndNext .patterns').width(newwidth);
/*↑步驟二動態產生圖案group長度*/

/*↓步驟二按圖放到浪板上*/
$('.selectAndNext .pattern').click(function(){
	var selectpic=$(this).children('img').attr('src');
	console.log(selectpic);
	$('.demogroup .patternshow img').attr('src',selectpic);
	var boardurl= [
		'images/2board/gunboard/gunboard.png',
		'images/2board/longboard/longboard.png',
		'images/2board/funboard/funboard.png',
		'images/2board/shortboard/shortboard.png',
		'images/2board/fishboard/fishboard.png',
		'images/2board/bodyboard/bodyboard.png'
	];
	console.log($('.step2_maxContent .boarddemo').attr('src'));
	if($('.step2_maxContent .boarddemo').attr('src')==boardurl[0]){
		$('.demogroup .patternshow').css({
			bottom:'60%',
			left: '8%'
		});
	}
});

/*↑步驟二按圖放到浪板上*/



});