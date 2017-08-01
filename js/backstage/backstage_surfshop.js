$(function(){
	/*↓畫面一進來就撈資料庫資料決定現在是否停賣*/
	for (var i = 0; i < $('.sellornot').length; i++) {
		if($('.sellornot').eq(i).attr('value')=='1'){
			$('.sellornot').eq(i).siblings('.yesbtn').addClass('active');
		}else{
			$('.sellornot').eq(i).siblings('.nobtn').addClass('active');
		}
	}
	/*↑畫面一進來就撈資料庫資料決定現在是否停賣*/

	/*↓按按鈕後改顏色*/
	$('.btn-primary').click(function(){
		$(this).addClass('active').siblings('input');
		$(this).siblings('.btn-primary').removeClass('active');
	});
	/*↑按按鈕後改顏色*/

	/*↓按按鈕後改input的值*/
	$('.yesbtn').click(function(){
		$(this).siblings('.sellornot').attr('value','1');
		 $.post('9backstage_surfshop_update.php',{ 
		 		'prod_no' : $(this).siblings('.prod_no').val() , 'prod_sold' :  $(this).siblings('.sellornot').val()  },function(rs){
		  });
	});
	$('.nobtn').click(function(){
		$(this).siblings('.sellornot').attr('value','2');
		 $.post('9backstage_surfshop_update.php',{ 
		 		'prod_no' : $(this).siblings('.prod_no').val() , 'prod_sold' :  $(this).siblings('.sellornot').val()  },function(rs){
		  });
	});
	/*↑按按鈕後改input的值*/

	/*↓資料修改*/
		$('.equchangebtn').click(function(){
			console.log($(this).parent().siblings().children('.quachange').val());
			$.post('9backstage_surfshop_update.php',{
				    'prod_no' : $(this).siblings('.prod_no').val() , 
			 		'name' : $(this).parent().siblings().children('.namechange').val() ,
			 		'price' :  $(this).parent().siblings().children('.pricechange').val(),
			 		'des' :  $(this).parent().siblings().children('.deschange').val(),
			 		'qua' :  $(this).parent().siblings().children('.quachange').val()				
				},function(rs){
					// alert(rs);
			});
		});
	/*↑資料修改*/




		/*↓資料新增*/
		$('.newAdd').click(function(){
			console.log($(this).parent().parent().siblings().children().children('.newImg').val());
			$.post('9backstage_surfshop_update.php',{
				  //   'prod_no' : $(this).siblings('.prod_no').val() , 
			 		// 'newName' : $(this).parent().siblings().children('.namechange').val() ,
			 		// 'newPrice' :  $(this).parent().siblings().children('.pricechange').val(),
			 		// 'newDes' :  $(this).parent().siblings().children('.deschange').val(),
			 		// 'newQua' :  $(this).parent().siblings().children('.quachange').val(),
			 		// 'newObj' :  $(this).parent().siblings().children('.quachange').val(),
			 		'newImg' :  $(this).parent().parent().siblings().children().children('.newImg').val()				
				},function(rs){
					// alert(rs);
			});
		});
	/*↑資料新增*/
})



