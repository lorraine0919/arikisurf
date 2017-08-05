$(document).ready(function(){
   $('#close2').click(function(){
      $('#lightbox_12').hide();
   });

   $('#cancel2').click(function(){
      $('.report2').val('');
   });
   
   $('.many').click(function(){
      console.log("按到內文檢舉");
      $('#lightbox_12').show();     
      var index=$(this).parent().index();
      console.log("目前的編號 : "+index);
       var submit2count=0;
       var reply_number = $(this).parent().find('.reply_number').val();		
       var post_number = $(this).parent().find('.post_number').val();

	   $('#submit2').click(function(){	
	        console.log("有按到喔");
	        $('.many').parent().eq(index).find('.many').unbind('click');
	        $('.many').parent().eq(index).find('.many').css('color','#ED8C00');
	        $('.many').parent().eq(index).find('.many').text("已檢舉");
		    if(submit2count==0){         //送出沒點過
		        var content = $('.report2').val();
		        console.log("發言 : "+content);
		        function reqListener(){
		          console.log(this.responseText);                  
		        }
		      var xhr = new XMLHttpRequest();
		      xhr.onload = reqListener;
		      var url = "map_quit2toDB.php?post_number="+post_number+"&report="+content+"&reply_number="+reply_number;
		      console.log(url);
		      xhr.open("get", url , true);
		      xhr.send(null);
		      $('#lightbox_12').hide(); 	      
		    }//end if
		    submit2count++;

	   })//end of確認按鈕被按
      console.log("送出按鈕被按次數 : "+submit2count);
   })//end of檢舉按鈕被按   
});//ready