$(function(){
	/*修改好後跳出光箱*/
		$('.pressgolightbox').click(function(){
			$('.lightboxgroup').fadeIn(100);
		});
		$('#closebtn').click(function(){
	        $('.lightboxgroup').fadeOut(0);
		});
	/*修改好後跳出光箱*/

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
			 $.post('9backstage_customize_update.php',{ 
			 		'no' : $(this).siblings('.no').val() , 
			 		'sellornot' :  $(this).siblings('.sellornot').val(),
			 		'style' :  $(this).siblings('.style').val(),
			 	},function(rs){
			  });
		});
		$('.nobtn').click(function(){
			$(this).siblings('.sellornot').attr('value','2');
			 $.post('9backstage_customize_update.php',{ 
			 		'no' : $(this).siblings('.no').val() ,
			 		'sellornot' :  $(this).siblings('.sellornot').val(),
			 		'style' :  $(this).siblings('.style').val()
			 		 },function(rs){
			  });
		});
	/*↑按按鈕後改input的值*/

	/*↓價格修改*/
		$('.pricechangebtn').click(function(){
			console.log($(this).siblings('.pricechange').val());
			$.post('9backstage_customize_update.php',{
			 		'no' : $(this).parent().siblings('.sellornotgroup').children().children().children('.no').val() ,
			 		'price' :  $(this).siblings('.pricechange').val(),
			 		'style' :  $(this).parent().siblings('.sellornotgroup').children().children().children('.style').val()			
				},function(rs){
					// alert(rs);
			});
		});
	/*↑價格修改*/

	/*↓上傳圖片*/
		$('#uploadofficalimg').change(function(){
			/*↓傳送到php處理*/
				/*傳送目前檔案數量*/
				$.post('9backstage_customize_update.php',{
						'officialimgcount':$('.officialimgcount').val()
					},function(rs){
						location.reload();
				});

				/*傳送檔案*/
				var formData = new FormData();
				formData.append('uploadofficalimg', $('#uploadofficalimg')[0].files[0]);
				$.ajax({
				    url: '9backstage_customize_update.php',
				    type: 'POST',
				    cache: false,
				    contentType: false,
				    data: formData,
				    processData: false,
				    contentType: false
				}).done(function(res) {
					location.reload();
				}).fail(function(res) {
					// alert(res);
				});
			/*↑傳送到php處理*/



		});
	/*↑上傳圖片*/

	/*↓刪除圖片*/
		$('.deletebtn').click(function(){
			$.post('9backstage_customize_update.php',{
				'deleteimgnum':$(this).siblings('.no').val()
			},function(rs){
				console.log(rs);
				location.reload();
			})
		});	
	/*↑刪除圖片*/
})



