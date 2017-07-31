window.onload=function(){
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
		$('#customerboard').val(boardnamearr[index]);
	});

	/*我是rwd換圖片和敘述和按鈕顏色*/

/*↑步驟一換圖片和敘述和按鈕顏色*/
	$('.rwdSelectboardMenu li').click(function(){
		$(this).addClass('click');
		$('.rwdSelectboardMenu li').not(this).removeClass('click');
		var index=$(this).index();
		$('.step1_maxContent .rwdintroduce .rwdboardinfo').text(boardinfo[index]);
	});
/*↓步驟一rwd的拉出介紹*/
	$('.btnfield').click(function(){
		$('.rwdintroduce').toggleClass('show');

	});
/*↑步驟一rwd的拉出介紹*/

/*↓步驟一顯示svg板型，按按鈕換板型*/
	function setsvgboard(boardshape){
		$('.bordshape').attr('d',boardshape);
	}
	var boardshape='M119,168.6C111.5,54.3,73.8,58.4,73.8,58.4v0c0,0-37.7-4-45.2,110.2 C20.9,286.2,33,451.9,63.2,485.3c3.5,3.8,6.7,2.9,10.6,2.9v0c3.9,0,7.1,0.9,10.6-2.9C114.6,451.9,126.7,286.2,119,168.6z';
	setsvgboard(boardshape);

	$('.step1_maxContent .board').click(function(){
		$('.patternshow').attr('transform','translate(-20,100)');
		if($('.step1_maxContent .board').eq(0).hasClass('click')){
			// gunboard
			boardshape='M74.7,491.5c-56-44.5-55.9-263.2-37.6-380.1C46.7,51,70.3,21.5,70.3,21.5l0,0.1 c0.8,1,24.4,30.1,34.8,89.3c20.6,116.5,28,334.9-27.1,380.5c0,0-0.5,0.6-1.6,0.6C75.2,492,74.7,491.5,74.7,491.5z';
			setsvgboard(boardshape);
			$('.svgothers').html('<line x1="70.3" y1="21.5" x2="76.4" y2="492" style="opacity:0.2; fill:none; stroke:#040000; stroke-miterlimit:10;"/>');

		}else if($('.step1_maxContent .board').eq(1).hasClass('click')){
			// longboard
			boardshape='M119,168.6C111.5,54.3,73.8,58.4,73.8,58.4v0c0,0-37.7-4-45.2,110.2 C20.9,286.2,33,451.9,63.2,485.3c3.5,3.8,6.7,2.9,10.6,2.9v0c3.9,0,7.1,0.9,10.6-2.9C114.6,451.9,126.7,286.2,119,168.6z';

			setsvgboard(boardshape);
			$('.svgothers').html('');
		}else if($('.step1_maxContent .board').eq(2).hasClass('click')){
			// funboard
			boardshape='M72.8,96c0,0-51.9,9-49.9,187s37.8,206.3,49.9,206.3c12.1,0,47.9-28.3,49.9-206.3 S72.8,96,72.8,96z';
			setsvgboard(boardshape);
			$('.svgothers').html('<path d="M72.8,103.8c0,0-45.2,8.6-43.5,179.6s32.9,198.1,43.5,198.1c10.6,0,41.7-27.2,43.5-198.1 C118,112.5,72.8,103.8,72.8,103.8z" style="opacity:0.38;fill:none;stroke:#000000;stroke-miterlimit:10;"/><line x1="72.8" y1="103.8" x2="72.8" y2="481.5" style="opacity:0.38;fill:none;stroke:#000000;stroke-miterlimit:10;"/>');
		}else if($('.step1_maxContent .board').eq(3).hasClass('click')){
			// funboard
			boardshape='M121.6,302.9c-0.5-113.2-46.5-167.9-46.5-167.9s-45.9,54.8-46.4,167.9S48,462.2,58.1,484c0,0,6.7,4.5,17,4.5 s16.7-3.9,17-4.5C92.5,483.4,122.1,416,121.6,302.9z';
 			setsvgboard(boardshape);
			$('.svgothers').html('<line   x1="75.2" y1="136" x2="75.2" y2="488" style="opacity:0.31;fill:none;stroke:#727272;stroke-miterlimit:10;"/> <path d="M42.8,399.5c0,0,10.3,57.8,19.4,70.3l-9,3c0,0-2.5-6-5.2-13.7c-2.6-7.5-5.3-16.6-6.3-21.3 c-0.4-2.1-2.8-11.9-4.9-23.1c-0.8-4.4-1.4-9-2.2-13.4L42.8,399.5z" style="opacity:0.31;fill:#727272;"/> <path d="M105.8,399.3c0,0-10.8,58-18.3,71l8.9,2.6c0,0,1.3-3.8,3.1-9.3c1.4-4.5,3.1-10.1,4.6-15.8 c0.8-3.1,2-7.6,2.6-10.3c1.1-4.9,5.1-21,7.4-36.6L105.8,399.3z" style="opacity:0.31;fill:#727272;"/>');
		}else if($('.step1_maxContent .board').eq(4).hasClass('click')){
			// funboard
			boardshape='M115.8,326.8C114.6,173.4,76.3,157,76.3,157l-0.3,0.1c-3.3,1.1-38.5,15.8-42,169.1c0,0-5.8,97.6,26,163.6 c0,0,6.9,2.6,13.7-5.4c6.7,8.1,13.7,5.7,13.7,5.7C120.2,424.5,115.8,326.8,115.8,326.8z';
 			setsvgboard(boardshape);
 			$('.svgothers').html(''); 
		}else if($('.step1_maxContent .board').eq(5).hasClass('click')){
			// funboard
			boardshape='M101,320c-1.6-1.6-47.9-3.4-51.7,0s-36.7,28.7-11.3,170.3c0,0,2.3,3.7,16,0c12.7-3.4,20.2-4.2,21.2-4.3 c1,0.1,8.5,0.9,21.2,4.3c13.7,3.7,16,0,16,0C137.7,348.7,102.6,321.6,101,320z';
 			setsvgboard(boardshape);
 			$('.svgothers').html(''); 
 			$('.patternshow').attr('transform','translate(-20,300)');
		}		
	});
/*↑步驟一顯示svg板型*/

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
	var boardcolorarr = [
		'<stop  offset="1.111794e-007" style="stop-color:#C9CACA"/> <stop  offset="1" style="stop-color:#FFFFFF"/>',
		' <stop  offset="1.111794e-007" style="stop-color:#110C67"/> <stop  offset="1" style="stop-color:#00A0E9"/>',
		'<stop  offset="0" style="stop-color:#B64621"/> <stop  offset="1" style="stop-color:#FFF100"/>'
		];
	$('.color').click(function(){
		// console.log('1');
		var index = $(this).index();
		$('#maincolor2').html(boardcolorarr[index]);
		var arr = ['白','藍','黃'];
		$('#customercolor').val(arr[index]);
		// $('.mainshapepath').css('fill','url(#maincolor2)');
	});
/*↑步驟二按按鈕換顏色*/

/*↓步驟二rwd按按鈕換顏色*/
	$('.selectAndNext .whitebtn').click(function(){
		$(this).addClass('orangebtn');
		$('.selectAndNext .whitebtn').not(this).removeClass('orangebtn');
	});
/*↑步驟二rwd按按鈕換顏色*/

/*↓步驟二，色球顏色*/
	for (var i = 0; i < 3; i++) {
		var colorarr = ['#fff','#009bd8','#ffd105'];
		$('.step2_maxContent .colorselectgroup .color .circle').eq(i).css('background-color',colorarr[i]);
	}
/*↑步驟二，色球顏色*/

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
		$('#customermaterial').val(texturename[index]);
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
		$('#customermaterial').val(texturename[index]);
	});
/*↑步驟二rwd換材質說明與按鈕外框*/


/*↓步驟二動態產生圖案group長度*/
var patterns=$('.selectAndNext .pattern').length;
var newwidth = $('.selectAndNext .pattern').width()*patterns;
$('.selectAndNext .patterns').width(newwidth);
/*↑步驟二動態產生圖案group長度*/

/*↓步驟二按圖換標題*/
$('.pattern').click(function(){
	var index= $(this).index();
	$('.patterntitle').text(patterntitlearr[index]);
});
/*↑步驟二按圖換標題*/

/*↓步驟二按圖放到浪板上*/

// $('.selectAndNext .pattern').click(function(){
// 	var selectpic=$(this).children('img').attr('src');
// 	console.log(selectpic);
// 	$('.demogroup .patternshow').attr('xlink:href',selectpic);
	
// });
for (var i = 0; i < document.getElementsByClassName('pattern').length; i++) {
	document.getElementsByClassName('pattern')[i].onclick=function(e){
		function convertImgToDataURLviaCanvas(url, callback, outputFormat) {
		  var img = new Image();
		  img.crossOrigin = 'Anonymous';
		  img.onload = function() {
		    var canvas = document.createElement('CANVAS');
		    var ctx = canvas.getContext('2d');
		    var dataURL;
		    canvas.height = this.height;
		    canvas.width = this.width;
		    ctx.drawImage(this, 0, 0);
		    dataURL = canvas.toDataURL(outputFormat);
		    callback(dataURL);
		    canvas = null;
		  };
		  img.src = url;
		}

		  convertImgToDataURLviaCanvas(e.target.src, function(base64Img) {
		  	document.getElementById('patternshow').setAttribute("xlink:href", base64Img);
		  });

		  event.preventDefault();
	}
}

/*↑步驟二按圖放到浪板上*/
// console.log('1');
/*↓步驟二上傳圖片至demo區*/
	document.getElementById('uploadimg').onchange=function(){
		// console.log('1');
		var file = document.getElementById('uploadimg').files[0];
		// alert(file);
		var readFile = new FileReader();
		readFile.readAsDataURL(file);
		// console.log(readFile.result);
		readFile.addEventListener('load',function(){
			document.getElementById('patternshow').setAttribute("xlink:href", readFile.result);
		},false);
	}
/*↑步驟二上傳圖片至demo區*/

/*↓步驟二拖曳圖片*/
	var drag = d3.behavior.drag()  
            .on('dragstart', function() { 
              //拖拉開始時，要做什麼事 
              // console.log('1');
            })
            .on('drag', function() { 
              patternshow.attr({
                'transform':'translate('+(d3.event.x-90)+','+(d3.event.y-90)+')'
                // 'background':'green'
              }); 
            })
            .on('dragend', function() { 
              //拖拉結束時，要做什麼事 
              // console.log('2');
            });
    var patternshow = d3.select('#patternshow')
            .call(drag);
/*↑步驟二拖曳圖片*/


/*↓步驟二儲存圖片到下一步驟*/
	document.getElementById('step2tostep3').onclick=function(){
		console.log('a');
		// document.getElementById('svgstep2').width=1000;
		// document.getElementById('svgstep2').setAttribute("viewbox","0 0 100 10");
		document.getElementById("step3result").height=1500;

		var svgData = new XMLSerializer().serializeToString( document.getElementById('svgstep2') );
		// document.getElementById("step3result").width=500;
		var ctx = document.getElementById("step3result").getContext("2d");
		var DOMURL = self.URL || self.webkitURL || self;
		var img = new Image();
		var svg = new Blob([svgData], {type: "image/svg+xml;charset=utf-8"});
		var url = DOMURL.createObjectURL(svg);
		img.onload = function() {

		    ctx.drawImage(img, 10, 10,250,1180);
		    var png = document.getElementById('step3result').toDataURL("image/png");
		    document.querySelector('#png-container').innerHTML = '<img src="'+png+'"/>';
		    DOMURL.revokeObjectURL(png);
		};
   		 img.src = url;
		// document.getElementById('step3result').setAttribute( "src", "data:image/svg+xml;base64," + btoa( unescape(encodeURIComponent(svgData))));

		// ctx.drawImage( resultimg, 0, 0 );
		// console.log( document.getElementById('step3result').toDataURL( "image/png" ) );
	}
/*↑步驟二儲存圖片到下一步驟*/


/*↓步驟三填寫資料送到步驟四*/
$('#step3tostep4').click(function(){
	$('#ordername').text($('#customername').val());
	$('#orderphone').text($('#customerphone').val());
	$('#orderemail').text($('#customeremail').val());
	$('#orderaddress').text($('#customeraddress').val());
	$('#orderaccount').text($('#customeraccount').val());
	$('#ordermessage').text($('#customermessage').val());
	$('#orderpic').attr('src',$('#png-container img').attr('src'));
	$('#orderboard').html($('#customerboard').val());
	$('#ordercolor').text($('#customercolor').val());
	$('#orderpattern').text($('.patterntitle').eq(0).text());
	$('#ordermaterial').text($('#customermaterial').val());
});

/*↑步驟三填寫資料送到步驟四*/
};


