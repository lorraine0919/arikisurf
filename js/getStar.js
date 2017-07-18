$(document).ready(function(){
    $('#result').hide();   //隱藏結果箱子
    $('#star').raty({      
        hints:[1,2,3,4,5], 
        path : 'images/4wavepoint/img',
        target:'#result',
        targetKeep:true,
        targetType:'number',
        click:function(score,evt){
             $("#lightbox2_11").show();
             $("#lightbox2_11 .ustar span").html(score);
             $(this).find('img').unbind();
        }
    });
});//ready