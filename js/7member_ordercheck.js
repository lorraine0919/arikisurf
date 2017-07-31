function $id( id ){
   return document.getElementById(id);
}

function First(){
    customize_ODC = $id("customize_ODC");
    fitting_ODC = $id("fitting_ODC");
    history_ODC = $id("history_ODC");
    customize_LB = $id("customize-LB");
    fitting_LB = $id("fitting-LB");
    history_LB = $id("history-LB");

    customize_ODC.onclick=function(){
        customize_ODC.className = "li-click";
        fitting_ODC.className = "li-unclick";
        history_ODC.className   = "li-unclick";
    }

    fitting_ODC.onclick=function(){
        customize_ODC.className = "li-unclick";
        fitting_ODC.className = "li-click";
        history_ODC.className = "li-unclick";
    }
    history_ODC.addEventListener('click',function(){
        customize_ODC.className = "li-unclick";
        fitting_ODC.className = "li-unclick";
        history_ODC.className = "li-click";
    },false);


    // $id("order-btn").addEventListener('click',function(){
    //     $id("lightbox").style.display = 'block';
    //     $id("customize-LB").style.display = 'block';
    // },false);
    $('.customize-order-btn').click(function(){
        $id("lightbox").style.display = 'block';
        $id("customize-LB").style.display = 'block';

        $('.customize-exit').click(function(){
            $id("lightbox").style.display = 'none';
            $id("customize-LB").style.display = 'none';
        });
    });
}

window.addEventListener('load',First,false);