		$(document).ready(function(){
	$('.111').click(function(){
		// $('.1111').show();
		// $('.2222').hide();
		// $('.3333').hide();
		// $('.4444').hide();
		// $('.5555').hide();
	});
	$('.222').click(function(){
		$('.1111').hide();
		$('.2222').show();
		$('.3333').hide();
		$('.4444').hide();
		$('.5555').hide();
	});
	$('.333').click(function(){
		$('.1111').hide();
		$('.2222').hide();
		$('.3333').show();
		$('.4444').hide();
		$('.5555').hide();
	});
	$('.444').click(function(){
		$('.1111').hide();
		$('.2222').hide();
		$('.3333').hide();
		$('.4444').show();
		$('.5555').hide();
	});
	$('.555').click(function(){
		$('.1111').hide();
		$('.2222').hide();
		$('.3333').hide();
		$('.4444').hide();
		$('.5555').show();
	});
	// $('.666').click(function(){
	// 	$('.6666').show();
	// 	$('.7777').hide();
	// });
	// $('.777').click(function(){
	// 	$('.6666').hide();
	// 	$('.7777').show();
	// });

	// $('.777').click(function(){
	// 	$('.6666').hide();
	// 	$('.7777').show();
	// });

	// $('.zzz').click(function(){
	// 	$('.vvv').show();
	// 	$('.bbb').hide();
	// 	$('.nnn').hide();
	// 	// console.log(qwe);
	// });

	// $('.xxx').click(function(){
	// 	$('.vvv').hide();
	// 	$('.bbb').show();
	// 	$('.nnn').hide();
	// });

	// $('.ccc').click(function(){
	// 	$('.vvv').hide();
	// 	$('.bbb').hide();
	// 	$('.nnn').show();
	// });

	// $('.aaa').click(function(){
	// 	$('.ddd').show();
	// 	$('.fff').hide();
		
	// });

	// $('.sss').click(function(){
	// 	$('.ddd').hide();
	// 	$('.fff').show();
		
	// });
	// $('#find').keyup(function(){
	// 	var ans = $(this).val(); //使用者輸入的
		
	// 	$('#qwe tr').removeClass('highlight');
	// 	if($.trim(ans)!=''){
	// 				console.log($.trim(ans));
	// 				$('#qwe .nickname:contains("'+ans+'")').parent().addClass('highlight');
	// 			}
	// });
	// $('#add').click(function(){
	// 	alert('你沒資格創建');
	// });


	// $('.dead').click(function(e){
	// 	$(this).parents('.delete').parents('.pic').parents('.views').remove();
		
	// });

	$('.set').click(function(){
		$(this).attr('disabled','');
		$('#check').text('審核中');
	});
});