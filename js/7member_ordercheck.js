function $id( id ){
   return document.getElementById(id);
}

function First(){
    customize_ODC = $id("customize_ODC");
    fitting_ODC = $id("fitting_ODC");
    history_ODC = $id("history_ODC");

    customize_txt = $id("customize-txt");
    fitting_txt = $id("fitting-txt");
    history_txt = $id("history-txt");

    customize_LB = $id("customize-LB");
    fitting_LB = $id("fitting-LB");
    history_LB = $id("history-LB");
    
    customize_ODC.onclick=function(){
        console.log('1');
        customize_txt.style.display = "block";
        fitting_txt.style.display = "none";
        history_txt.style.display = "none";
        
        fitting_ODC.className = "li-unclick";
        history_ODC.className   = "li-unclick";
        customize_ODC.className = "li-click";
        fitting_ODC.className = "li-unclick";
        history_ODC.className   = "li-unclick";
    }

    fitting_ODC.onclick=function(){
        console.log('2');
        customize_txt.style.display = "none";
        fitting_txt.style.display = "block";
        history_txt.style.display = "none";

        customize_ODC.className = "li-unclick";
        fitting_ODC.className = "li-click";
        history_ODC.className = "li-unclick";
    }
    history_ODC.addEventListener('click',function(){
        console.log('3');
        customize_txt.style.display = "none";
        fitting_txt.style.display = "none";
        history_txt.style.display = "block";

        customize_ODC.className = "li-unclick";
        fitting_ODC.className = "li-unclick";
        history_ODC.className = "li-click";
    },false);

    $(".customize-order-btn").click(function(){
        $(".lightbox").show();
        customize_LB.style.display = "block";
        

        var ODNo = $(this).parent().parent().children('.orderNo').children('.shinvalue').text();
        var ODDate = $(this).parent().parent().children('.orderDate').children('.shinvalue').text();
        var ODTotal = $(this).parent().parent().children('.orderTotal').children('.shinvalue').text();
        var ODStatus = $(this).parent().parent().children('.orderStatus').children('.shinvalue').text();
        
        // var ODModel = $(this).parent().parent().next().val();

        var ODModel = $(this).parent().parent().next().children('input').eq(0).val();
        var ODMaterial = $(this).parent().parent().next().children('input').eq(1).val();
        var ODColor = $(this).parent().parent().next().children('input').eq(2).val();
        var ODImg = $(this).parent().parent().next().children('img').attr('src');

        var ODTel = $(this).parent().parent().next().children('input').eq(3).val();
        var ODEmail = $(this).parent().parent().next().children('input').eq(4).val();
        var ODAdress = $(this).parent().parent().next().children('input').eq(5).val();
        var ODAtm = $(this).parent().parent().next().children('input').eq(6).val();
        var ODMessage = $(this).parent().parent().next().children('input').eq(7).val();
        // console.log(ODTel);
        // console.log(ODDate);
        // console.log(ODTotal);
        $('.cust-OD-No').text(ODNo);
        $('.cust-OD-date').text(ODDate);
        $('.cust-OD-total').text(ODTotal);
        $('.cust-OD-status').text(ODStatus);

        $('.cust-OD-model').text(ODModel);
        $('.cust-OD-material').text(ODMaterial);
        $('.cust-OD-color').text(ODColor);
        $('.cust-OD-img').attr('src',ODImg);

        $('.cust-OD-tel').text(ODTel);
        $('.cust-OD-email').text(ODEmail);
        $('.cust-OD-adress').text(ODAdress);
        $('.cust-OD-atm').text(ODAtm);
        $('.cust-OD-message').text(ODMessage);
    });
    $(".customize-exit").click(function(){
        $(".lightbox").hide();
        customize_LB.style.display = "none";
    });
    
    $(".FT-order-btn").click(function(){
        $('.lightbox').show();
        fitting_LB.style.display = "block";
        
        var hideIp = $('#hideIp').val();
        $('#catchIp').val(hideIp);
        
    });
    $('.FT-exit').click(function(){
        $('.lightbox').hide();
        fitting_LB.style.display = "none";
    });

    $(".HT-order-btn").click(function(){
        $('.lightbox').show();
        history_LB.style.display = "block";
        
       
        
    });
    $('.HT-exit').click(function(){
        $('.lightbox').hide();
        history_LB.style.display = "none";
    });

    $('.customize-cancle').click(function(){
        var str;
        str = prompt("因為製作費昂貴，如不說出取消原因，將無法為您取消訂單。");
        if(str==""){
            alert("已關閉");
        }else{
            $.post("cust_cancle.php",{
                'strMsg':str,
                'ODNO':$('.cust-OD-No').text()
            },function(rs){
                alert.log(rs);
                location.reload();
            });
        }
    });
    
    $('.FT-cancle').click(function(){
        var FT_str;
        FT_str = confirm("確定取消訂單嗎?")
        if(FT_str=="false"){
            alert("已關閉");
        }else{
            $.post("surf_cancle.php",{
                'strMsg':FT_str,
                'ODNO':$(this).parent().siblings('.FT-Info-val').children('.FT-OD-Info').children("div").eq(0).children("span").text()
            },function(rs){
                alert(rs);
                location.reload();
            });
        }
    });
}

window.addEventListener('load',First,false);