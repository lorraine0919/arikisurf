//scorll banner
           
$(function (){
    TweenMax.fromTo('.news_title_14',1,
    {y:250,
    opacity:0},
    {y:0,
    opacity:1,
    delay:2.8,
    ease: Back.easeOut
    });
    TweenMax.fromTo('.news_txt',1,
    {opacity:0},
    {opacity:1,
    delay:3.4
   
});
});