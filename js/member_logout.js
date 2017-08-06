$(function(){
	$('#logout').click(function(){
		$.post('sessionLogout.php',{},function(rs){
			window.location='index.php';
		});
	});
});