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
		alert('修改成功');
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
			alert('修改成功');
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
		// $('.newAdd').click(function(){
		// 	console.log($(this).parent().parent().siblings().children().children('#newImg').val());
		// 	var formData = new FormData();
		// 		formData.append('newImg', $('#newImg')[0].files[0]);
		// 		$.ajax({
		// 		    url: '9backstage_surfshop_update.php',
		// 		    type: 'POST',
		// 		    cache: false,
		// 		    contentType: false,
		// 		    data: formData,
		// 		    processData: false,
		// 		    contentType: false
		// 		}).done(function(res) {
		// 			// location.reload();
		// 			console.log(res);
		// 		}).fail(function(res) {
		// 			// alert('新增成功');
		// 			console.log(res);
		// 		});
		// 	$.post('9backstage_surfshop_update.php',{
		// 		    'prod_no' : $(this).siblings('.prod_no').val() , 
		// 	 		'newName' : $(this).parent().parent().siblings().children().children('.newName').val() ,
		// 	 		'newPrice' : $(this).parent().parent().siblings().children().children('.newPrice').val(),
		// 	 		'newDes' : $(this).parent().parent().siblings().children().children('.newDes').val(),
		// 	 		'newQua' : $(this).parent().parent().siblings().children().children('.newQua').val(),
		// 	 		'newObj' : $(this).parent().parent().siblings().children().children('.newObj').val(),
		// 	 		// 'newPic' : $(this).parent().parent().siblings().children().children('#newImg').val()
			 						
		// 		},function(rs){
		// 			console.log(rs);
		// 	});
			
		// });
	/*↑資料新增*/
})



