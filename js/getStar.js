 $(document).ready(function(){
 	  console.log("目前分數 : "+$('.gg').val());
 	  var score = $('.gg').val();
 	  $('.star').barrating('set',$('.gg').val());
 	  $('.star').barrating({
	    theme: 'fontawesome-stars',
	    onSelect: function(value){
	  	var sc = value;
        var post_number2 = $('.feed').eq(0).find('.post_number').val();
        console.log("目前發文編號 : "+post_number2);
        console.log("評分數 : "+sc);

        $('.br-selected.br-current').click(function(){
        	console.log('有按到');
	  		 $.post('map_startoDB.php',{
		        'star_score':sc,
		        'post_number':post_number2
		        },function(rs){
		          console.log(rs);
		          // location.reload('map_forum_disscussion.php'+post_number2);
		     });
	  	});	     
	  }//on select
	});//barrating
 });



