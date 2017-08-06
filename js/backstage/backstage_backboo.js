


$(function(){
	console.log($('.status').length);

	for (var i = 0; i < $('.status').length; i++) {
		console.log($('.status').eq(i).val());
		if($('.status').eq(i).val()=='1'){
			$('.backboob').eq(i).addClass('active');
		}else if($('.status').eq(i).val()=='2'){
			$('.backbooa').eq(i).addClass('active');
		}
	}


	/*↓按按鈕後改顏色*/

		$('.btn-primary').click(function(){
			$(this).addClass('active').siblings('input');
			$(this).siblings('.btn-primary').removeClass('active');

		});


	/*↑按按鈕後改顏色*/


	/*↓按按鈕改變狀態*/

		$('.backboob').click(function(){
			$('.status').attr('value','1');
			var index=$(this).siblings('.no').val();
			
			console.log(index);

			$.post('9backstage_guards_update.php',{
				'no':index,
				'status':'1'
			},function(rs){
					alert(rs);
					location.reload();
			});
		});



		$('.backbooa').click(function(){
			$('.status').attr('value','2');
			var index=$(this).siblings('.no').val();

			console.log(index);

			$.post('9backstage_guards_update.php',{
				'no':index,
				'status':'2'
			},function(rs){
					alert(rs);
					location.reload();
			});
		});
		/*↑按按鈕改變狀態*/

		/*↓按按鈕刪人*/
			$('.backboor').click(function(){
			var index=$(this).siblings('.no').val();

			console.log(index);
			$.post('9backstage_guards_update.php',{
				'Dno':index,
			},function(rs){
					// alert(rs);
					location.reload();
			});
		});

		/*↑按按鈕刪人*/

		/*↓按按鈕新增人*/
		$('.new_guardsB').click(function(){
			// alert($('.new_guardsR').val());
			$.post('9backstage_guards_update.php',{
				'new_guardsR':$('.new_guardsR').val(),
				'new_guardsG':$('.new_guardsG').val()
			},function(rs){
					// alert(rs);
					location.reload();
			});
		});	
	
		/*↑按按鈕新增人*/




		// $('.pricechangebtn').click(function(){
		// 	console.log($(this).siblings('.pricechange').val());
		// 	$.post('9backstage_customize_update.php',{
		// 	 		'no' : $(this).parent().siblings('.sellornotgroup').children().children().children('.no').val() ,
		// 	 		'price' :  $(this).siblings('.pricechange').val(),
		// 	 		'style' :  $(this).parent().siblings('.sellornotgroup').children().children().children('.style').val()			
		// 		},function(rs){
		// 			// alert(rs);
		// 	});
		// });

});



