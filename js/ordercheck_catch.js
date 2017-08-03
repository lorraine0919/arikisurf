$(function(){
    $(".FT-order-btn").click(function(){
        var FT_orderNo = $(this).parent().siblings(".FT_orderNo").children().text();
        console.log('訂單變數'+FT_orderNo);
        $.post('7member_ordercheck_update.php',{
            'FT_no':FT_orderNo,
            'FT_name':FT_orderNo
        },function(rs){
            // $('.catch').val(rs);
            // alert(rs);
             
            var ODNo = rs.split("|");
            console.log(ODNo[0]);
            // $('.catch').val(rs);
            // ODNo[0]
            // console.log(ODNo[0].length);
            var orderall=JSON.parse(ODNo[0]);
            // var arr = $.map(ODNo[0], function(el) { return el; })
            // console.log(orderall[0].surfequipped_orderdetailNo);
            // var orderallarr = new Array();
            // for(i in orderall){
            //     orderallarr[i]=orderall.i
            // }
            // var FT_orderNonum = parseInt(FT_orderNo)-1;

            // console.log(orderallarr);
            // $('.FT-list-val').append($('.FT-OD-Group').clone());
            // var conunt = 0;
            // console.log(orderall[0].prod_name);
            // console.log(orderall[1].prod_name);
            
            for(i in orderall){
                // console.log('json裡面所有的訂單編號'+orderall[i].surfequipped_orderNo);  
                // console.log('你從頁面抓的訂單編號'+FT_orderNo);     
                // console.log('有進來判斷式的圈數'+i);
                $('.FT-list-val').append('<ul class="FT-OD-Group"></ul>');
                $('.FT-OD-Group').eq(i).append('<li class="col-sm-2"><span class="FT-OD-liNo"></span></li>');
                $('.FT-OD-Group').eq(i).append('<li class="col-sm-4"><span class="FT-OD-Prod"></span></li>');
                $('.FT-OD-Group').eq(i).append('<li class="col-sm-2"><span class="FT-OD-price"></span></li>');
                $('.FT-OD-Group').eq(i).append('<li class="col-sm-1"><span class="FT-OD-qty"></span></li>');
                $('.FT-OD-Group').eq(i).append('<li class="col-sm-3"><img class="FT-OD-img" ></li>');
                $('.FT-OD-Group').append('<li class="clearfix"></li>');

            }
            for(i in orderall){
                $('.FT-OD-Group').eq(i).children().children('.FT-OD-liNo').text(orderall[i].surfequipped_orderdetailNo);
                $('.FT-OD-Group').eq(i).children().children('.FT-OD-Prod').text(orderall[i].prod_name);
                $('.FT-OD-Group').eq(i).children().children('.FT-OD-price').text(orderall[i].prod_price);
                $('.FT-OD-Group').eq(i).children().children('.FT-OD-qty').text(orderall[i].surfequipped_qty);
                $('.FT-OD-Group').eq(i).children().children('.FT-OD-img').attr('src','images/3accessories/'+orderall[i].prod_img);

            }
 
// src="images/3accessories/'+orderall[i].prod_img+'"
            // console.log(conunt);
                    // <ul class="FT-OD-Group">
                    //     <li class="col-sm-2"><span class="FT-OD-liNo"></span></li>
                    //     <li class="col-sm-4"><span class="FT-OD-Prod"></span></li>
                    //     <li class="col-sm-2"><span class="FT-OD-price"></span></li>
                    //     <li class="col-sm-1"><span class="FT-OD-qty"></span></li>
                    //     <li class="col-sm-3"><img src="" alt="" class="FT-OD-img"></li>
                    //     <li class="clearfix"></li>
                    // </ul>


            for(i in orderall){
                $('.FT-OD-liNo').eq(i).text(orderall[i][2]);
            }

            $('.FT-OD-name').text(ODNo[1]);
            $('.FT-OD-tel').text(ODNo[2]);
            $('.FT-OD-email').text(ODNo[3]);
            $('.FT-OD-adress').text(ODNo[4]);
            $('.FT-OD-atm').text(ODNo[5]);

            $('.FT-OD-No').text(ODNo[6]);
            $('.FT-OD-date').text(ODNo[7]);
            if(ODNo[8] == 1){
                                $('.FT-OD-status').text("未付款");
                            }else if(ODNo[8]==2){
                                $('.FT-OD-status').text("未出貨");
                            }else if(ODNo[8]==3){
                                $('.FT-OD-status').text("已出貨");
                            }else if(ODNo[8]==4){
                                $('.FT-OD-status').text("申請中");
                            }
            $('.FT-OD-total').text(ODNo[9]);
        });
    });
    $('.FT-exit').click(function(){
        console.log('1');
        $('.FT-list-val').empty();
    });
});