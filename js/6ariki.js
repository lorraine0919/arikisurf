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
    TweenMax.fromTo('.main_title_17',2,
    {y:-250,
    opacity:0},
    {y:0,
    opacity:1,
    ease: Power1.easeOut
    });
    TweenMax.fromTo('.main_title_17_content',2,
    {x:-350,
    opacity:0},
    {x:0,
    opacity:1,
    delay:1,
    ease: Power1.easeOut

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
    },0.3);
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

// winning
var controller = new ScrollMagic.Controller();
    var wp = new TimelineMax().staggerFromTo('.winning_img',0.6, {
        x: 15,
        opacity:0
    },{
        x:0,
        opacity:1
    },0.1);
console.log("time");
var scene = new ScrollMagic.Scene({
    triggerElement: ".winning_record_title",
    reverse:true,
    offset:'5px',
})
.setTween(wp)
// .addIndicators()
.addTo(controller);
console.log("times");




//fade in 1->about
var ourScene = new ScrollMagic.Scene({
        triggerElement: ".about_title",
        offset:'10px'
    })
     .setClassToggle('.about_img','fade-in')
     // .addIndicators({name :''})
     .addTo(controller);

var ourScene = new ScrollMagic.Scene({
        triggerElement: ".about_title",
        offset:'10px'
    })
     .setClassToggle('.about_txt','fade-in')
     // .addIndicators({name :''})
     .addTo(controller);

//fade-in 2->business
var ourScene = new ScrollMagic.Scene({
        triggerElement: ".business_philosophy_title",
        offset:'10px'
    })
     .setClassToggle('.business_img','fade-in')
     // .addIndicators({name :''})
     .addTo(controller);

var ourScene = new ScrollMagic.Scene({
        triggerElement: ".business_philosophy_title",
        offset:'10px'
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



