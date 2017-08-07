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

        var model = $(this).parent().siblings(".hideinput").children("input").eq(0).val();
        var material = $(this).parent().siblings(".hideinput").children("input").eq(1).val();
        var color = $(this).parent().siblings(".hideinput").children("input").eq(2).val();
        var tel = $(this).parent().siblings(".hideinput").children("input").eq(3).val();
        var email = $(this).parent().siblings(".hideinput").children("input").eq(4).val();
        var adress = $(this).parent().siblings(".hideinput").children("input").eq(5).val();
        var atm = $(this).parent().siblings(".hideinput").children("input").eq(6).val();
        var msg = $(this).parent().siblings(".hideinput").children("input").eq(7).val();
        var member = $(this).parent().siblings(".hideinput").children("input").eq(8).val();

        var img = $(this).parent().siblings(".hideinput").children("input").eq(9).val();
        console.log(img);

        $('#OD_date').text($(this).parent().siblings("td").eq(2).text());
        $('#OD_status').text($(this).parent().siblings("td").eq(3).text());
        $('#OD_total').text($(this).parent().siblings("td").eq(4).text());

        $('#OD_model').text(model);
        $('#OD_materia').text(material);
        $('#OD_color').text(color);
        $('#OD_tel').text(tel);
        $('#OD_email').text(email);
        $('#OD_adress').text(adress);
        $('#OD_atm').text(atm);
        $('#OD_msg').text(msg);
        $('#OD_member').text(member);

        $('#OD_img').attr('src',img);

        $('#OD_no').text($(this).siblings("input").val());
        // console.log($(this).siblings("input").val());
    });
    $('#closeLG').click(function(){
        $('#lightbox').hide();
        $('#LT-CT-box').hide();
    });

    
    $('.OD_btnatm').click(function(){
        // var statusVal = $(this).parent().siblings(".hideinput").children("input").eq(10).val();
        // console.log(statusVal);
        $.post("orderCustomize_status.php",{
            'status':$(this).parent().siblings(".hideinput").children("input").eq(10).val(),
            'odNo':$(this).parent().siblings(".hideinput").children("input").eq(11).val()
        },function(rs){
            alert(rs);
            location.reload();
        });
    });
    $('.OD_btngo').click(function(){
        // var statusVal2 = $(this).parent().siblings(".hideinput").children("input").eq(10).val();
        $.post("orderCustomize_status.php",{
            'status':$(this).parent().siblings(".hideinput").children("input").eq(10).val(),
            'odNo':$(this).parent().siblings(".hideinput").children("input").eq(11).val()
        },function(rs){
            alert(rs);
            location.reload();
        });
    });

    $('.OD_btncancle').click(function(){
        $ODNo = $('#OD_no').val();
        Cstr = confirm("確定要刪除嗎");
        if(Cstr == true){
            // alert(Cstr);
            $.post("",{
                'ODNo':$ODNo
            },function(rs){
                
            });
        }
    });
},false)