           $(document).ready(function(){
                $('#global_img_1').click(function(){
                    $('#text_description_1').slideToggle();
                });
            });

            $(document).ready(function(){
                $('#global_img_2').click(function(){
                    $('#text_description_2').slideToggle();
                });
            });

            $(document).ready(function(){
                $('#global_img_3').click(function(){
                    $('#text_description_3').slideToggle();
                });
            });

            $(document).ready(function(){
                $('#global_img_4').click(function(){
                    $('#text_description_4').slideToggle();
                });
            });

//scorll           
$(function (){
    TweenMax.fromTo('.main_title_17',2,
    {y:-250,
    opacity:0},
    {y:0,
    opacity:1,
    ease:Elastic.easeOut
    });
    TweenMax.fromTo('.main_title_17_content',2,
    {x:-350,
    opacity:0},
    {x:0,
    opacity:1,
    delay:1,
    ease:Elastic.easeOut
});

var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.touch01',0.5, {
        y: -50,
        opacity:0
    },{
        y:0,
        opacity:1
    },0.1);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: "#touch-1",
    reverse:true,
    offset:'50px',
})
.setTween(wp)
.addIndicators()
.addTo(controller);
console.log("times");

var ourScene = new ScrollMagic.Scene({
        triggerElement: "#about_leftSide_17",
        offset:'10px'
    })
     .setClassToggle('.about_pic','fade-in')
     .addIndicators({name :'bgc start'})
     .addTo(controller);

var ourScene = new ScrollMagic.Scene({
        triggerElement: "#about_leftSide_17",
        offset:'300px'
    })
     .setClassToggle('.about_txt','fade-in')
     .addIndicators({name :'bgc start'})
     .addTo(controller);



// //color
// var bgcolor = new ScrollMagic.Scene({
//         triggerElement: "#touch-3",
//         offset:'200px'
//     })
//      .setClassToggle('.yyy','bg')
//      .addIndicators({name :'bgc start'})
//      .addTo(controller);


// //sticky box
// var scene_sticky = new ScrollMagic.Scene({
//     triggerElement: "#touch-4",
//     offset:'100',
//     duration : '400'
// })
// .setPin('#sticky')
// .addIndicators()
// .addTo(controller);


// //移動字

//     var scene_move = new ScrollMagic.Scene({
//             triggerElement: "#touch-5",
//             offset: '100',
//             duration: '400',
//             reverse: true
//         })
//         .setTween(TweenMax.staggerTo('.pic-44 .ppp', 1, {
//             x: 1350,
//             ease: Strong.easeInOut
//         }))
//         .addIndicators()
//         .addTo(controller);
//     console.log('move ok');

//  //stellar
//   $('#container').stellar({
//   horizontalOffset: 0,
//   verticalOffset: 0,
// });
// console.log('stellar');

// //錨點
//  $('a.page-scroll').click(function () {
//         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//             var target = $(this.hash);
//             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//             if (target.length) {
//                 $('html,body').animate({
//                     scrollTop: target.offset().top
//                 }, 800);
//                 return false;
//             }
//         }
//     });

});

// $(function (){
//     TweenMax.fromTo('.one',2,
//     {y:-500,
//     opacity:0},
//     {y:0,
//     opacity:1,
//     ease: Power2.easeOut
//     });
//     TweenMax.fromTo('.two',2,
//     {y:-700,
//     opacity:0},
//     {y:0,
//     opacity:1,
//     delay:0.5,
//     ease: Power2.easeOut
//     });
//      TweenMax.fromTo('.three',2,
//     {y:-700,
//     opacity:0},
//     {y:0,
//     opacity:1,
//     delay:1,
//     ease: Power2.easeOut
//     });
//       TweenMax.fromTo('.four',2,
//     {y:-700,
//     opacity:0},
//     {y:0,
//     opacity:1,
//     delay:1.5,
//     ease: Power2.easeOut
//     });
// });
