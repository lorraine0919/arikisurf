window.addEventListener('load',function(){
    var buyerName = document.getElementById('buyerName').value;
    var buyerTel = document.getElementById('buyerTel').value;
    var buyerEmail = document.getElementById('buyerEmail').value;
    var buyerAdress = document.getElementById('buyerAdress').value;
    var buyerAtm = document.getElementById('buyerAtm').value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                getuserInfo(xhr.responseText);
            }else{
                alert( xhr.status );
            }
        }
    }

    var url = "cart_userInfo.php?buyerName="+buyerName+"&buyerTel="+buyerTel+"&buyerEmail="+buyerEmail+"&buyerAdress="+buyerAdress+"&buyerAtm="+buyerAtm;
    xhr.open("GET",url,true);
    xhr.send(null);
},false);