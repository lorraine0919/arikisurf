function $id( id ){
   return document.getElementById(id);
}

function First(){
    customize_ODC = $id("customize_ODC");
    fitting_ODC = $id("fitting_ODC");
    history_ODC = $id("history_ODC");

    customize_ODC.onclick=function(){
        console.log('1');
        customize_ODC.className = "li-click";
        fitting_ODC.className = "li-unclick";
        history_ODC.className   = "li-unclick";
    }

    fitting_ODC.onclick=function(){
        console.log('2');
        customize_ODC.className = "li-unclick";
        fitting_ODC.className = "li-click";
        history_ODC.className = "li-unclick";
    }
    history_ODC.addEventListener('click',function(){
        console.log('3');
        customize_ODC.className = "li-unclick";
        fitting_ODC.className = "li-unclick";
        history_ODC.className = "li-click";
    },false);
}

window.addEventListener('load',First,false);