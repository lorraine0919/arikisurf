// window.onload=function(){
// 	function $id(id){return document.getElementById(id);}


// 	function ShowLightBox(){
// 		console.log('1');
// 	  if( $id("login1").innerHTML === '會員登入'){
// 	    $id("memId").value="";
// 	    $id("memPsw").value="";
// 	    $id("lightbox19").style.display="";
// 	  }else{
// 	    $id("login1").innerHTML="會員登入";
// 	    $id("memberArea").style.display="none";
// 	  } 
// 	}

// 	var logined=0;

// 	function LoginCheck(){

// 	    memId = $id("memId").value;
// 	    memPsw = $id("memPsw").value;

	    // $.post('sessionLogin.php',{ 
	    //         'memId2' : memId ,
	    //         'memPsw2' :  memPsw
	    //          },function(rs){
	    //         if(rs == 1){
	    //             $id("memberArea").innerHTML = "<a href='7member_update.php'>會員專區</a>";
	    //             $id("login1").innerHTML = "登出";
	    //             $id("lightbox19").style.display="none";
	    //             logined = 2;
	    //          }else{
	    //             alert("帳號或密碼錯誤");
	    //             return;
	    //             }
	    //         }
	    // );
// 	}

	// if (logined==2) {
	// 	$id("memberArea").innerHTML = "<a href='7member_update.php'>會員專區</a>";
 //        $id("login1").innerHTML = "登出";
 //        $id("lightbox19").style.display="none";
	// }

// 	function CancelLogin(){$id("lightbox19").style.display = "none";}

		
// 	$id("login1").addEventListener('click',ShowLightBox,false);
//     $id("submit19").addEventListener('click',LoginCheck,false);
//     $id("close19").addEventListener('click',CancelLogin,false);

// }

	
$(function(){
	// var logined=0;
	if($('#picLogin').innerHTML=="<img src='images/1common/logout.png'>"){
		$('#picLogin').click(function(){
			// console.log('進入登入click事件');
			$('#lightbox19').fadeIn(200);
		});
		$('#login2').click(function(){
			// console.log('進入登入click事件');
			$('#lightbox19').fadeIn(200);
		});
	}
	if($('#login1').text()=='會員登入'){
		$('#login1').click(function(){
			// console.log('進入登入click事件');
			$('#lightbox19').fadeIn(200);
		});
		$('#login2').click(function(){
			// console.log('進入登入click事件');
			$('#lightbox19').fadeIn(200);
		});
	}
	$('#submit19').on("click" ,function(){
	    $.post('sessionLogin.php',{ 
	            'memId2' : $('#memId').val() ,
	            'memPsw2' :  $('#memPsw').val()
	             },function(rs){
		            if(rs == 1){
		            	alert("您已被停權<br>");
		                return;
		             }else if(rs == 2){
		            	$('#login1').html("<a href='7member_update.php'>會員專區</a>");
		                // $("#login1").text("登出");
		                $("#lightbox19").css('display',"none");

		                logined = 2;
		                location.reload();
		                return;
	                 }else{
	                 	alert("帳號或密碼錯誤或尚未註冊！<br>");
	                 }
	            }
	    );		
	});

	$('#close19').click(function(){
		$('#lightbox19').fadeOut(200);
	})
});

// showlogin