 $(document).ready(function(){
 	  $('.star').barrating({
	  theme: 'fontawesome-stars',
	  onSelect: function(value, text, event) {

	   // AJAX Request
		    $.ajax({
		     url: 'map_startoDB.php?star_score='+star_score,
		     type: 'post',
		     data: {postid:postid,rating:value},
		     dataType: 'json',
		    });
	  }//on select
	});//barrating
 });



