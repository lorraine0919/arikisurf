$(function(){
	// console.log($('.form-control'));

	// // for (var i = 0; i < $('.status').length; i++) {
	// // 	if($('.status').eq(i).val()=='1'){
	// // 		$('.backboob').eq(i).addClass('active');
	// // 	}else if($('.status').eq(i).val()=='2'){
	// // 		$('.backbooa').eq(i).addClass('active');
	// // 	}
	// }


	$('.btn-block').click(function(){
			// console.log('1');

			$.post('9backstage_login_backboo.php',{
				'form-controlA':$('.form-controlA').val(),
				'form-controlB':$('.form-controlB').val()
			},function(rs){
					console.log(rs);
					if(rs=='1'){
						location.assign('9backstage_welcome.php');
					}else{
						alert('帳號密碼錯誤');
					}
			});
		});
			// $('.status').attr('value','1');
			// var index=$(this).parent().parent().parent().parent().index();
			
			// console.log(index);

			
});
