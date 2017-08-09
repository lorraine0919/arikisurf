window.addEventListener('load',function(){
    $('#nav_CT').click(function(){
        $('#OD_box').show();
        $('#HT_box').hide();
        $(this).addClass('have');
        $('#nav_HT').removeClass('have');
    });
    $('#nav_HT').click(function(){
        $('#OD_box').hide();
        $('#HT_box').show();
        $(this).addClass('have');
        $('#nav_CT').removeClass('have');
    });
    
    $('.OD_btndetail').click(function(){
        $('#lightbox').show();
        $('#LT-CT-box').show();

        var orderNo = $(this).parent().siblings(".hideinput").children("input").eq(0).val();
        var member = $(this).parent().siblings(".hideinput").children("input").eq(1).val();
        var receiver = $(this).parent().siblings(".hideinput").children("input").eq(2).val();
        var tel = $(this).parent().siblings(".hideinput").children("input").eq(3).val();
        var email = $(this).parent().siblings(".hideinput").children("input").eq(4).val();
        var adress = $(this).parent().siblings(".hideinput").children("input").eq(5).val();
        var Status = $(this).parent().siblings(".hideinput").children("input").eq(6).val();
        var atm = $(this).parent().siblings(".hideinput").children("input").eq(7).val();
        var msg = $(this).parent().siblings(".hideinput").children("input").eq(8).val();
        var total = $(this).parent().siblings(".hideinput").children("input").eq(9).val();
        var memNo = $(this).parent().siblings(".hideinput").children("input").eq(10).val();

        console.log(memNo);

        $('#OD_date').text($(this).parent().siblings("td").eq(2).text());
        $('#OD_status').text($(this).parent().siblings("td").eq(4).text());
        $('#OD_total').text($(this).parent().siblings("td").eq(3).text());

        
        $('#OD_tel').text(tel);
        $('#OD_email').text(email);
        $('#OD_adress').text(adress);
        $('#OD_atm').text(atm);
        $('#OD_msg').text(msg);
        $('#OD_member').text(member);

       

        $('#OD_no').text($(this).siblings("input").val());

        $('#insideStatus').val(Status);

        $.post('orderSurf_catch.php',{
            'FT_no':orderNo,
            'member_no':memNo
        },function(rs){
            console.log(rs);
            var FTOD = rs;
            // console.log(FTOD[0]);
            var orderall=JSON.parse(FTOD);
                for(i in orderall){
                    // console.log('json裡面所有的訂單編號'+orderall[i].surfequipped_orderNo);  
                    // console.log('你從頁面抓的訂單編號'+FT_orderNo);     
                    // console.log('有進來判斷式的圈數'+i);
                    if(i==0){
                        $('#list-title_FT').after('<tr class="FT-OD-Group"></tr>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-liNo"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-Prod"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-price"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-qty"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-img"><img style="width:50%;"></td>');
                    }else{
                        $('.FT-OD-Group').after('<tr class="FT-OD-Group"></tr>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-liNo"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-Prod"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-price"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-qty"></td>');
                        $('.FT-OD-Group').eq(i).append('<td class="FT-OD-img"><img style="width:50%;"></td>');
                    }
                    

                }

            
            for(i in orderall){
                $('.FT-OD-Group').eq(i).children('.FT-OD-liNo').text(orderall[i].surfequipped_orderdetailNo);
                $('.FT-OD-Group').eq(i).children('.FT-OD-Prod').text(orderall[i].prod_name);
                $('.FT-OD-Group').eq(i).children('.FT-OD-price').text(orderall[i].prod_price);
                $('.FT-OD-Group').eq(i).children('.FT-OD-qty').text(orderall[i].surfequipped_qty);
                $('.FT-OD-Group').eq(i).children('.FT-OD-img').children('img').attr('src','images/3accessories/'+orderall[i].prod_img);

            }
            // for(i in orderall){
            //     $('.FT-OD-liNo').eq(i).text(orderall[i][2]);
            // }
        });
    });
    $('#closeLG').click(function(){
        $('#lightbox').hide();
        $('#LT-CT-box').hide();
        // $('.list').empty('.FT-OD-Group');
        $('.FT-OD-Group').empty();
    });

    
    $('.OD_btnatm').click(function(){
        // var statusVal = $(this).parent().siblings(".hideinput").children("input").eq(10).val();
        // console.log(statusVal);
        $.post("orderSurf_status.php",{
            'status':$(this).parent().siblings(".hideinput").children("input").eq(6).val(),
            'odNo':$(this).parent().siblings(".hideinput").children("input").eq(0).val()
        },function(rs){
            alert(rs);
            location.reload();
        });
    });
    $('.OD_btngo').click(function(){
        // var statusVal2 = $(this).parent().siblings(".hideinput").children("input").eq(10).val();
        
        
        $.post("orderSurf_status.php",{
            'status':$(this).parent().siblings(".hideinput").children("input").eq(6).val(),
            'odNo':$(this).parent().siblings(".hideinput").children("input").eq(0).val()
        },function(rs){
            alert(rs);
            location.reload();
        });
    });

    $('.OD_btncancle').click(function(){
        $ODNo = $('#OD_no').text();
        $stauts = $('#insideStatus').val();
        Cstr = confirm("確定要取消嗎");
        console.log($ODNo);
        if($stauts == 4){
            if(Cstr == true){
                // alert(Cstr);
                $.post("surf_cancleOD.php",{
                    'ODNo':$ODNo,
                    'status':$stauts
                },function(rs){
                    alert("已取消");
                    location.reload();
                });
            }
        }else{
            alert("此訂單並不是取消申請狀態");
        }
            
    });
},false)