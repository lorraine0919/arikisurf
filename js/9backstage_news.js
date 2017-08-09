$(document).ready(function(){

	$('.lightbox-btn-add').click(function(){
        $('.add-form').fadeIn(500);
	});
	$('.add-btn-close').click(function(){
        $('.add-form').fadeOut(0);
        
	});
	$('.add-submit').click(function(){
        $('.add-form').fadeOut(0);
	});


	$('.lightbox-btn-edit').click(function(){
        $('.edit-form').fadeIn(500);
        ($(this).children('.newsno').val());
        $.post('9backstage_news_edit.php',{ 
		 		'newsno' : $(this).children('.newsno').val() },function(rs){		 			
		 			
		 	var allnews = JSON.parse(rs);

		 	var newsno = document.getElementById("newsnoid");
			    newsno.value = allnews[0].newsno;

		    var newstitle = document.getElementsByClassName("edit_news_title")[0];
			    newstitle.value = allnews[0].newstitle;

			// var newsdate = document.getElementsByClassName("edit_news_date")[0];
			//     newsdate.value = allnews[0].newsdate;

			// var newsimg = document.getElementsByClassName("edit_news_img")[0];
			//     newsimg.value = allnews[0].newsimg;
			

			var newsimgplace = document.getElementById("place_img");
			    newsimgplace.src = "images/5news/"+allnews[0].newsimg;
			    
			    


			var newstxt = document.getElementsByClassName("edit_news_txt")[0];
			    newstxt.value = allnews[0].newstxt;

			    
		  });
	});
	$('.edit-btn-close').click(function(){
        $('.edit-form').fadeOut(0);
	});
	$('.edit-submit').click(function(){
        $('.edit-form').fadeOut(0);
	});

	$('.remove-btn').click(function(){

 		var msg = "確認刪除此筆最新消息?"; 
		 if (confirm(msg)==true){ 
		  $.post('9backstage_news_remove.php',{ 
		 		'newsno' : $(this).children('.newsno').val()},function(hebeecho){
		 			
		 		if(hebeecho = "hebesayok" ){

		 			alert("刪除成功");
		 			location.reload();
		 		}
		 		else{		 			
		 			alert("刪除失敗!");
		 			}
		 		});
		 }else{ 
		   
		 } 
 
	});
});

	




