$(document).ready(function(){
    $('.dpost').click(function(){
        $('.lightmap').fadeIn(1000);
       
        var c = $(this).parent().find('.post_number').val();
        console.log("目前發表編號 : "+c);

        $('.delpos').click(function(){
	    	$.post('9backstage_map_up2.php',{
		        'post_number':c
	        },function(rs){
	          // alert(rs);
	          location.reload('9backstage_map.php');
	        });
            
            $('.lightmap').hide();
        });
    });//dpost click

    $('.dreply').click(function(){
        $('.lightmap').fadeIn(1000);

        var g = $(this).parent().find('.reply_number').val();
        console.log("目前留言編號 : "+g);

        $('.delpos').click(function(){

	    	$.post('9backstage_map_up3.php',{
		        'reply_number':g
	        },function(rs){
	          // alert(rs);
	          location.reload('9backstage_map.php');
	        });
            
            $('.lightmap').hide();
        });
    });

    $('#clo').click(function(){
        $('.lightmap').hide();
    });

    $('.back').click(function(){
        $('.lightmap').hide();
    });
    
});

	




