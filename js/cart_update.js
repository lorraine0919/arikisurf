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

    //    $(this).parent().siblings('.list-context_28').children("p").eq(1).children(".Pamount").val(parseInt(PamountVal['Pamount'+mathi]));

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

        // $('.')
    });

    var ltCtxt = document.getElementsByClassName("list-context_28");
    var moneyTotal = document.getElementsByClassName("PC-total");
    var PC_money = document.getElementsByClassName("PC_sub");
    var getSum_PC = document.getElementsByClassName("getSum_PC");
    var getMath_PC = document.getElementsByClassName("getMath_PC");

    var total = 0;
    for($i=0;$i<ltCtxt.length;$i++){
        total+=parseInt(PC_money[$i].innerText);
    }
    for($i=0;$i<moneyTotal.length;$i++){
        moneyTotal[$i].innerText = total;
        $('.PC-total').text(total);
    }
    $('.PC-num').text(ltCtxt.length);
    document.getElementById('getTotalPrice').innerText = total;
    document.getElementById('getTotalMath').innerText = ltCtxt.length;
    




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
                        alert("suesssing");
                       
                    }else{
                        alert(xhr.responseText);
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
                        alert("suesssing");
                       
                    }else{
                        alert(xhr.responseText);
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
},false);