<?php 
    ob_start();
    session_start();
try{
require_once('connectBooks.php');
    // if(isset($_SESSION["manager_ac"]) == false){
	// 	echo "<script>window.alert('尚未登入,請登入');location.href='index.php';</script>";
	// }else{
 ?>

<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
  <!--(bake module/backstage_head.html)--><?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/9backstage_welcome.css">  -->
    <link rel="stylesheet" tpye="text/css" href="css/9backstage_orderCustomize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/9backstage_orderCustomize.js"></script>
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>




    <div id="main-content">
        <div class="wrapper">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">客製浪板</a></li>
            <li><a data-toggle="tab" href="#menu1">歷史訂單</a></li>
           
          </ul>

          <div class="tab-content" style="font-size: 1.3em;">
            <div id="home" class="tab-pane fade in active">
              <div class="OD_box item-box model content-panel" id="OD_box">
                            <div class="OD-title">
                                <h3>客製浪板訂單管理</h3>
                            </div>
                            <div class="OD_box">
                                <table class="table table-bordered table-striped table-condensed">
                                    <tr>
                                        <th>訂單編號</th>
                                        <th>會員編號</th>
                                        <th>訂單時間</th>
                                        <th>訂單金額</th>
                                        <th>訂單狀態</th>
                                        <th>訂單管理</th>
                                    </tr>
                                    
                                <?php
                                    $sql = "select * from customize_order 
                                            join member,customize_material,customize_model,customize_color
                                            where customize_order.member_no = member.member_no and
                                            customize_order.colorNo = customize_color.colorNo and
                                            customize_order.materialNo = customize_material.materialNo and
                                            customize_order.modelNo = customize_model.modelNo and customize_order.customize_order_status<5";
                                    $cust = $pdo->query($sql);
                                    while($OD_CT = $cust->fetch()){
                                        $disInput = $OD_CT["customize_order_status"];
                                    
                                ?>

                                    <tr>
                                        <td><?php echo $OD_CT["customize_orderNo"]; ?></td>
                                        <td><?php echo $OD_CT["member_no"]; ?></td>
                                        <td><?php echo $OD_CT["customize_order_date"]; ?></td>
                                        <td><?php echo $OD_CT["customize_order_total"]; ?></td>
                                        
                                            <?php 
                                                if($OD_CT["customize_order_status"] == 1){
                                                    echo "<td style='color:blue'>未付款</td>";
                                                }else if($OD_CT["customize_order_status"]==2){
                                                    echo "<td style='color:red'>未出貨</td>";
                                                }else if($OD_CT["customize_order_status"]==3){
                                                    echo "<td style='color:blue'>已出貨</td>";
                                                }else if($OD_CT["customize_order_status"]==4){
                                                    echo "<td style='color:#ed8c00;'>申請中</td>";
                                                }
                                            ?>
                                        
                                        <td class="hideinput" style="display:none">
                                            <input type="hidden" name="model_name" value="<?php echo $OD_CT["customize_model_name"] ?>">
                                            <input type="hidden" name="material_name" value="<?php echo $OD_CT["customize_material_name"] ?>">
                                            <input type="hidden" name="color" value="<?php echo $OD_CT["customize_color_name"] ?>">
                                            <?php $custImg = $OD_CT["boarddemo"];?> 
                                            <input type="hidden" name="tel" value="<?php echo $OD_CT["customize_tel"] ?>">
                                            <input type="hidden" name="email" value="<?php echo $OD_CT["customize_email"] ?>">
                                            <input type="hidden" name="adress" value="<?php echo $OD_CT["customize_adress"] ?>">
                                            <input type="hidden" name="atm" value="<?php echo $OD_CT["customize_atm_acount"] ?>">
                                            <input type="hidden" name="msg" value="<?php echo $OD_CT["customize_usermessage"] ?>">
                                            <input type="hidden" name="account" value="<?php echo $OD_CT["account"] ?>">
                                            <input type="hidden" name="boarddemo" value="<?php echo $custImg; ?>">
                                            <input type="hidden" name="status" value="<?php echo $OD_CT["customize_order_status"] ?>">
                                            <input type="hidden" name="orderNo" value="<?php echo $OD_CT["customize_orderNo"] ?>">
                                        </td>
                                        <td>
                                            <input type="hidden" name="" value="<?php echo $OD_CT["customize_orderNo"]; ?>">
                                            <input type="button" value="訂單明細" class="OD_btndetail btn btn-primary btn-sm pressgolightbox">
                                            <input type="button" value="已匯款" class="OD_btnatm btn btn-primary btn-sm pressgolightbox" <?php if($disInput>1){echo disabled;}else{}; ?> >
                                            <input type="button" value="已出貨" class="OD_btngo btn btn-primary btn-sm pressgolightbox" <?php if($disInput>2){echo disabled;}else{}; ?> >
                                        </td>

                                    </tr>

                                    
                                <?php
                                    }
                                ?>
                                </table>
                            </div>
                        </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="HT_box item-box model content-panel" id="HT_box">
                            <div class="OD-title">
                                <h3>歷史訂單管理</h3>
                            </div>

                            <div class="OD_box">
                                <table class="table table-bordered table-striped table-condensed">
                                    <tr>
                                        <th>訂單編號</th>
                                        <th>會員編號</th>
                                        <th>訂單時間</th>
                                        <th>訂單金額</th>
                                        <th>訂單狀態</th>
                                    </tr>

                                <?php
                                    $sql = "select * from customize_order 
                                            join member,customize_material,customize_model,customize_color
                                            where customize_order.member_no = member.member_no and
                                            customize_order.colorNo = customize_color.colorNo and
                                            customize_order.materialNo = customize_material.materialNo and
                                            customize_order.modelNo = customize_model.modelNo and customize_order.customize_order_status>4";
                                    $cust = $pdo->query($sql);
                                    while($OD_CT = $cust->fetch()){

                                    
                                ?>
                                    <tr>
                                        <td><?php echo $OD_CT["customize_orderNo"]; ?></td>
                                        <td><?php echo $OD_CT["member_no"]; ?></td>
                                        <td><?php echo $OD_CT["customize_order_date"]; ?></td>
                                        <td><?php echo $OD_CT["customize_order_total"]; ?></td>
                                        <td>
                                            <?php 
                                                if($OD_CT["customize_order_status"] == 5){
                                                    echo "取消交易";
                                                }else if($OD_CT["customize_order_status"]==6){
                                                    echo "交易完成";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </table>
                            </div>
                            
                        </div> 
            </div>
           
          </div>
           
                <div class="whitearea col-lg-12 table">
                    <div class="backstage_orderCustomize">
                      


                        <div id="lightbox">
                            <div class="LT-item-box" id="LT-CT-box">
                                <div class="title">
                                    <h3>訂單編號:<span id="OD_no"></span></h3>
                                </div>
                                <div class="val">
                                    <div class="Order val_sm_item">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>會員名稱</th>
                                                <th>訂單時間</th>
                                            </tr>
                                            <tr>
                                                <td id="OD_member"></td>
                                                <td id="OD_date"></td>
                                            </tr>
                                            <tr>
                                                <th>訂單狀態</th>
                                                <th>總價</th>
                                            </tr>
                                            <tr>
                                                <td id="OD_status"></td>
                                                <td id="OD_total"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="model val_sm_item">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>板型</th>
                                                <th>材質</th>
                                            </tr>
                                            <tr>
                                                <td id="OD_model"></td>
                                                <td id="OD_materia"></td>
                                            </tr>
                                            <tr>
                                                <th>顏色</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td id="OD_color"></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="buyer val_sm_item">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>電話</th>
                                                <td id="OD_tel"></td>
                                            </tr>
                                            <tr>
                                                <th>信箱</th>
                                                <td id="OD_email"></td>
                                            </tr>
                                            <tr>
                                                <th>地址</th>
                                                <td id="OD_adress"></td>
                                            </tr>
                                            <tr>
                                                <th>匯款帳號</th>
                                                <td id="OD_atm"></td>
                                            </tr>
                                            <tr>
                                                <th>留言</th>
                                                <td id="OD_msg"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    
                                </div>
                                <div class="CT_img">
                                    <img src="" id="OD_img">
                                </div>
                                <div class="clearfix"></div>
                                
                                <div class="btn">
                                    <input type="hidden" name="" value="" id="insideStatus">
                                    <input type="button" name="" value="確認完成" id="closeLG" class=" btn btn-primary btn-sm pressgolightbox">
                                    <!-- <input type="button" value="取消交易" class="OD_btncancle btn btn-primary btn-sm pressgolightbox"> -->
                                </div>
                            </div>
                        </div><!--lightbox-->
                </div>
            </div>
        
    </div>


<!--(bake module/backstage_footer.html)--><?php require_once('publicpage/backstage_footer.php'); ?>



<?php 
    // }

}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>

</body>

</html>