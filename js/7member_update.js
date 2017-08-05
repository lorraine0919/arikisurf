	function SendA(){

	    name21 = $id("name21").value;
	    slct1 = $id("slct1").value;
	    slct2 = $id("slct2").value;
	    addr21 = $id("addr21").value;
	    tel21 = $id("tel21").value;
	    email21 = $id("email21").value;
	    //欄位檢驗，有空在寫
	}

	function SendB(){

	    oldpsw21 = $id("oldpsw21").value;
	    newpsw21 = $id("newpsw21").value;
	    confirm21 = $id("confirm21").value;

	    $.post('pswUpdate.php',{ 
	    'oldpsw21' : oldpsw21,
	    'newpsw21' : newpsw21,
	    'confirm21' : confirm21
	     },function(rs){
	        alert(rs);
	     });
	}

	function init(){
	    var gender = $id('gendervalue').value;

	    if (gender == 2){
	        $id("female21").checked = true;
	    }else{$id("male21").checked = true;}

	    var city =$id('cityvalue').value;
	    EachCity(city);

	    for (var i = 0; i <$id('slct1').childNodes.length; i++) {
	        if($id('slct1').childNodes[i].value==city){
	            $id('slct1').childNodes[i].setAttribute('selected','selected');
	        }
	    }
	    $id("send1").onclick = SendA;
	    $id("send2").onclick = SendB;
	}; 

	window.onload=init;
