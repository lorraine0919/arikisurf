function $id(id){
   return document.getElementById(id); 
}

function First(){
    cart = document.getElementsByClassName("cart-body_28")[0];
    InputInfo =  document.getElementsByClassName("InputInfo-body_29")[0];
    order_confirm =  document.getElementsByClassName("order-confirm_30")[0];
    order_over = document.getElementsByClassName("order-over_31")[0];


    $id('btn-checkout').addEventListener('click',goInputInfo,false);//去輸入
    $id('previous-page').addEventListener('click',gocart,false);//回購物車
    $id('next-page').addEventListener('click',goOrder_confirm,false);//去確認
    $id('previous-page2').addEventListener('click',goInputInfo,false);//回輸入
    $id('next-page2').addEventListener('click',goOrder_over,false);//去結束
}



function gocart(){
    cart.style.display = "block";
    InputInfo.style.display = "none";
    order_confirm.style.display = "none";
    order_over.style.display = "none";
}

function goInputInfo(){
    cart.style.display = "none";
    InputInfo.style.display = "block";
    order_confirm.style.display = "none";
    order_over.style.display = "none";
}

function goOrder_confirm(){
    cart.style.display = "none";
    InputInfo.style.display = "none";
    order_confirm.style.display = "block";
    order_over.style.display = "none";
}

function goOrder_over(){
    cart.style.display = "none";
    InputInfo.style.display = "none";
    order_confirm.style.display = "none";
    order_over.style.display = "block";
}

window.addEventListener('load',First,false);