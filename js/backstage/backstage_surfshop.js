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
})


