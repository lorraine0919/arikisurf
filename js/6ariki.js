           // $(document).ready(function(){
           //      $('#global_img_1').click(function(){
           //          $('#text_description_1').slideToggle();
           //      });
           //  });

           //  $(document).ready(function(){
           //      $('#global_img_2').click(function(){
           //          $('#text_description_2').slideToggle();
           //      });
           //  });

           //  $(document).ready(function(){
           //      $('#global_img_3').click(function(){
           //          $('#text_description_3').slideToggle();
           //      });
           //  });

           //  $(document).ready(function(){
           //      $('#global_img_4').click(function(){
           //          $('#text_description_4').slideToggle();
           //      });
           //  });

//scorll banner           
$(function (){
    TweenMax.fromTo('.about_title_17',1,
    {y:250,
    opacity:0},
    {y:0,
    opacity:1,
    delay:3,
    ease: Back.easeOut
    });
    TweenMax.fromTo('.about_txt_17',1,
    {opacity:0},
    {opacity:1,
    delay:4,
    ease: Back.easeOut

});
TweenMax.fromTo('.about_leftSide_17',1,
    {opacity:0},
    {opacity:1,
    delay:1.5,
    

});


//global
var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.global_img',0.5, {
        y: -100,
        opacity:0
    },{
        y:0,
        opacity:1
    },0.2);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".global_base_title",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
// .addIndicators()
.addTo(controller);
console.log("times");

//global txt
var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.text_description',0.5, {
        y: -100,
        opacity:0
    },{
        y:0,
        opacity:1
    },0.2);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".global_base_title",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
// .addIndicators()
.addTo(controller);
console.log("times");




// winning_1

 
var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.winning_item_1',0.6, {
        y: -150, 
        opacity:0
    },{
        y:0,        
        opacity:1
    },0.1);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".winning_record_title",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
.addTo(controller);
console.log("times");

// if (matchMedia) {
//   var mq = window.matchMedia("(max-width: 767px)");
//   mq.addListener(WidthChangea);
//   WidthChangea(mq);
// }

// media query change
// function WidthChangea(mq) {
//   if (mq.matches) {
//     var controller = new ScrollMagic.Controller();
//     var wp = new TimelineMax().staggerFromTo('.winning_item_1',0.6, {
//         y: -150, 
//         opacity:0
//     },{
//         y:0,        
//         opacity:1
//     },0.1);
// console.log("time");
// var scene = new ScrollMagic.Scene({
//     triggerElement: ".winning_record_title",
//     reverse:true,
//     offset:'5px',
// })
// .setTween(wp)
// // .addIndicators()
// .addTo(controller);
// console.log("times");
//   } 
//   else {
//     var controller = new ScrollMagic.Controller();
//     var wp = new TimelineMax().staggerFromTo('.winning_item_1',0.6, {
//         x: 150,
//         opacity:0
//     },{
//         x:0,
//         opacity:1
//     },0.1);
// console.log("time");
// var scene = new ScrollMagic.Scene({
//     triggerElement: ".winning_record_title",
//     reverse:true,
//     offset:'5px',
// })
// .setTween(wp)
// // .addIndicators()
// .addTo(controller);
// console.log("times");
//   }

// }
    

// winning_2
   
var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.winning_item_2',0.6, {
        y: -150,
        opacity:0
    },{
        y:0,
        opacity:1
    },0.1);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".touch_txt1",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
// .addIndicators()
.addTo(controller);
console.log("times");
  

// winning_3
var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.winning_item_3',0.6, {
        y: -150,
        opacity:0
    },{
        y:0,
        opacity:1
    },0.1);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".touch_txt2",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
// .addIndicators()
.addTo(controller);
console.log("times");
  


// winning_4

var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.winning_item_4',0.6, {
        y: -150,
        opacity:0
    },{
        y:0,
        opacity:1
    },0.1);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".touch_txt3",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
// .addIndicators()
.addTo(controller);
console.log("times");
 

//up to down-1
var scene_sticky = new ScrollMagic.Scene({
    triggerElement: "#board_touch_1",
    offset:'50',
    duration : '425'
})
.setPin('#small_board_1')
// .addIndicators()
.addTo(controller);


//up to down-2
var scene_sticky = new ScrollMagic.Scene({
    triggerElement: "#board_touch_2",
    offset:'50',
    duration : '405'
})
.setPin('#small_board_2')
// .addIndicators()
.addTo(controller);


//up to down-3
var scene_sticky = new ScrollMagic.Scene({
    triggerElement: "#board_touch_3",
    offset:'50',
    duration : '390'
})
.setPin('#small_board_3')
// .addIndicators()
.addTo(controller);


//up to down-4
var scene_sticky = new ScrollMagic.Scene({
    triggerElement: "#board_touch_4",
    offset:'50',
    duration : '400'
})
.setPin('#small_board_4')
// .addIndicators()
.addTo(controller);


//fade in 1->about


var ourScene = new ScrollMagic.Scene({
        triggerElement: ".about_img",
        offset:'80px'
    })
     .setClassToggle('.about_txt','fade-in')
     // .addIndicators({name :''})
     .addTo(controller);

//fade-in 2->business
var ourScene = new ScrollMagic.Scene({
        triggerElement: ".about_txt",
        offset:'100px'
    })
     .setClassToggle('.business_img','fade-in')
     // .addIndicators({name :''})
     .addTo(controller);

var ourScene = new ScrollMagic.Scene({
        triggerElement: ".business_img",
        offset:'80px'
    })
     .setClassToggle('.business_txt','fade-in')
     // .addIndicators({name :''})
     .addTo(controller);

});



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



