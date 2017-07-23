$(function(){
  $(window).load(function(){
    $(window).bind('scroll resize', function(){
    var $this = $(this);
    var $this_Top=$this.scrollTop();
 
    if($this_Top < 100){
     $('.top-bar').removeClass('top-bar');
    $("#goTop").css('display','none');
     }
       if($this_Top > 100){
       $('.bottom').addClass('top-bar');
    $("#goTop").css('display','');
       }
    }).scroll();
  });
});

$(function(){
  
  $("#goTop").click(function(){

    $("html,body").animate({scrollTop:0},900);


    return false;

  });

});

