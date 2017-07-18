//scorll banner           
$(function (){
    TweenMax.fromTo('.news_title_14',0.7,
    {y:-250,
    opacity:0},
    {y:0,
    opacity:1,
    ease: Power1.easeOut
    });
    TweenMax.fromTo('.news_txt',0.7,
    {x:-350,
    opacity:0},
    {x:0,
    opacity:1,
    delay:0.5,
    ease: Power1.easeOut

});
});