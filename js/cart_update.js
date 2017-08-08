window.addEventListener('load',function(){
var PamountVal = sessionStorage;
    PamountVal['Pamount'] =  $(".Pamount").val();
var PamountVal2 = sessionStorage;
    PamountVal2['Pamount_phone'] = $(".Pamount_phone")

    $(".Pchange-changebtn").click(function(){
        
       var mathi = $(this).parent().parent().index()-2;

        PamountVal['Pamount'+mathi] =  $(this).parent().siblings(".list-context_28").children("p").eq(1).children(".Pamount").val();
        var Pmoney = $(this).parent().siblings(".list-context_28").children("p").eq(0).children(".Pmoney").text();
        $sub = 0;
        $sub = Pmoney * PamountVal['Pamount'+mathi];
       $(this).parent().siblings(".list-context_28").children("p").eq(2).children(".Psub").text($sub);
       getSum_PC[mathi-1].innerText = $sub;
       getMath_PC[mathi-1].innerText = ($sub / Pmoney);

       PC_getOdoSum[mathi-1].innerText = $sub;
       PC_getOdoMath[mathi-1].innerText = ($sub / Pmoney);

       total=0;
       for($i=0;$i<ltCtxt.length;$i++){
            total+=parseInt(PC_money[$i].innerText);
            
        }   
       for($i=0;$i<moneyTotal.length;$i++){
            moneyTotal[$i].innerText = total;
            // $('.total-money').text(total);
        }
        document.getElementById('getTotalPrice').innerText = total;
        document.getElementById('getTotalMath').innerText = ltCtxt.length;


        var finish_total=0;
        for($i=0;$i<Odover_pro.length;$i++){
            finish_total += parseInt(PC_getOdoSum[$i].innerText);
        }
        $('#PC_finish_Price').innerText = finish_total;

        document.getElementById('PC_finish_Price').innerText = finish_total;
        document.getElementById('PC_finish_Math').innerText = Odover_pro.length;
    });
    $(".Pchange-changebtn_phone").click(function(){
        var mathi2 = $(this).parent().parent().parent().index();
        // console.log(mathi2);
        PamountVal2['Pamount_phone' + mathi2] = $(this).parent().children("li").eq(1).children(".Pamount_phone").val();
        Pmoney_phone = $(this).parent().children("li").eq(0).children(".Pmoney_phone").text();
        $sub2 = 0;
        $sub2 = Pmoney_phone * PamountVal2['Pamount_phone' + mathi2];
        $(this).parent().children("li").eq(2).children(".Psub_phone").text($sub2);

        getSum_phone[mathi2-1].innerText = $sub2;
        getMath_phone[mathi2-1].innerText = ($sub2 / Pmoney_phone);

        

        total_PH = 0;
        for($i=0;$i<cartbox.length;$i++){
            total_PH += parseInt(Psub_phone[$i].innerText);
        }
        $('.total_phone').text(total_PH);
        // $('.Psub_phone').text($sub2)
        $('#getOdoTotalMath_phone').text(cartbox.length);
        $('#getOdoTotalPrice_phone').text(total_PH);
        // $('.')
    });

    var ltCtxt = document.getElementsByClassName("list-context_28");
    var moneyTotal = document.getElementsByClassName("PC-total");
    var PC_money = document.getElementsByClassName("PC_sub");
    var getSum_PC = document.getElementsByClassName("getSum_PC");
    var getMath_PC = document.getElementsByClassName("getMath_PC");

    var PC_getOdoMath = document.getElementsByClassName("PC_getOdoMath");
    var PC_getOdoSum = document.getElementsByClassName("PC_getOdoSum");

    var Odover_pro = document.getElementsByClassName("Odover-pro");

    var total = 0;
    for($i=0;$i<ltCtxt.length;$i++){
        total+=parseInt(PC_money[$i].innerText);
    }
    for($i=0;$i<moneyTotal.length;$i++){
        moneyTotal[$i].innerText = total;
        $('.PC-total').text(total);
    }

    var finish_total=0;
    for($i=0;$i<Odover_pro.length;$i++){
        finish_total += parseInt(PC_getOdoSum[$i].innerText);
    }
    $('#PC_finish_Price').innerText = finish_total;

    



    $('.PC-num').text(ltCtxt.length);
    document.getElementById('PC_finish_Price').innerText = total;
    document.getElementById('PC_finish_Math').innerText = ltCtxt.length;
    




    var cartbox = document.getElementsByClassName("cart1-box");
    var Psub_phone = document.getElementsByClassName("Psub_phone");
    var getSum_phone = document.getElementsByClassName("getSum_phone");
    var getMath_phone = document.getElementsByClassName("getMath_phone");

    
    


    var total_PH = 0;
    for($i=0;$i<cartbox.length;$i++){
        total_PH += parseInt(Psub_phone[$i].innerText);
    }
    $('.total_phone').text(total_PH);
    $('.num_phone').text(cartbox.length);
    $('#getOdoTotalMath_phone').text(cartbox.length);
    $('#getOdoTotalPrice_phone').text(total_PH);




    $('#buyerName').keyup(function(){
        $('#CSget').text($(this).val());
    });
    $('#buyerTel').keyup(function(){
        $('#Telget').text($(this).val());
    });
    $('#buyerEmail').keyup(function(){
        $('#Emailget').text($(this).val());
    });
    $('#buyerAdress').keyup(function(){
        $('#Adressget').text($(this).val());
    });
    $('#buyerAtm').keyup(function(){
        $('#Atm-account').text($(this).val());
    });

    $('.Pchange-deletbtn_PC').click(function(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    if(xhr.responseText == "Error"){
                       
                    }else{
                        // alert(xhr.responseText);
                         location.reload();
                    }
                }
            }
        }

        var delete_btn = $(this).siblings('.Prod_Num').val();
        var url = "cart_delete.php?Prod_Num="+ delete_btn;
        xhr.open("GET",url,true);
        xhr.send(null);
    });
    $('.Pchange-deletbtn_phone').click(function(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    if(xhr.responseText == "Error"){
                       
                    }else{
                        // alert(xhr.responseText);
                         location.reload();
                    }
                }
            }
        }

        var delete_btn = $(this).siblings('.Prod_Num').val();
        var url = "cart_delete.php?Prod_Num="+ delete_btn;
        xhr.open("GET",url,true);
        xhr.send(null);
    });

    $('#next-page2').click(function(){
        
        var step= new Array;
        for(i=0;i<$('.Prod_Num').length;i++){
            step.push($('.Prod_Num').eq(i).val());
        }
        console.log(step);
        $.post('cart_insertOrder.php',{
           CSget : $('#CSget').text(),
           Telget : $('#Telget').text(),
           Emailget : $('#Emailget').text(),
           Adressget : $('#Adressget').text(),
           Atm_account : $('#Atm-account').text(),
           getTotal : $('#getTotalPrice').text(),
           MB_AC : $('#MB_AC').val(),
           MB_NO : $('#MB_NO').val(),
           MB_PSW : $('#MB_PSW').val(),
           Cfirm_pro : $('.Cfirm-pro').length,
           getMath_PC : $('.getMath_PC').text(),
           step : step

        },function(rs){
            console.log(rs);
        });
        
    });

    $('#next-page_phone').click(function(){
        var step= new Array;
        for(i=0;i<$('.Prod_Num').length;i++){
            step.push($('.Prod_Num').eq(i).val());
        }
        console.log(step);
        $.post('cart_insertOrder.php',{
           CSget : $('#CSget').text(),
           Telget : $('#Telget').text(),
           Emailget : $('#Emailget').text(),
           Adressget : $('#Adressget').text(),
           Atm_account : $('#Atm-account').text(),
           getTotal : $('#getTotalPrice').text(),
           MB_AC : $('#MB_AC').val(),
           MB_NO : $('#MB_NO').val(),
           MB_PSW : $('#MB_PSW').val(),
           Cfirm_pro : $('.Cfirm-pro').length,
           getMath_PC : $('.getMath_PC').text(),
           step : step

        },function(rs){
            console.log(rs);
        });
    });


    $('#Odover-Product-btn').click(function(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    if(xhr.responseText == "Error"){
                       
                    }else{
                    }
                }
            }
        }

        
        var url = "cart_deleteAll.php";
        xhr.open("GET",url,true);
        xhr.send(null);
    });

    $('#Odover-Member-btn').click(function(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    if(xhr.responseText == "Error"){
                       
                    }else{
                    }
                }
            }
        }

        
        var url = "cart_deleteAll.php";
        xhr.open("GET",url,true);
        xhr.send(null);
    });
    
},false);