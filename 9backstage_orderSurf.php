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
    <link rel="stylesheet" tpye="text/css" href="css/9backstage_orderSurf.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="js/9backstage_orderSurf.js"></script> 
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>
    <div id="main-content">
        <div class="wrapper">
        <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">衝浪配備</a></li>
    <li><a data-toggle="tab" href="#menu1">歷史訂單</a></li>
   
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="OD_box item-box model content-panel" id="OD_box">
                            <div class="OD-title">
                                <h3>衝浪配備訂單管理</h3>
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
                                    require_once("connectBooks.php");
                                    $sql = "select * from surfequipped_order 
                                            join member
                                            where surfequipped_order.member_no = member.member_no and 
                                            surfequipped_order.order_status<5";
                                    $cust = $pdo->query($sql);
                                    while($OD_CT = $cust->fetch()){
                                        $disInput = $OD_CT["order_status"];
                                    
                                ?>

                                    <tr>
                                        <td><?php echo $OD_CT["surfequipped_orderNo"]; ?></td>
                                        <td><?php echo $OD_CT["member_no"]; ?></td>
                                        <td><?php echo $OD_CT["order_date"]; ?></td>
                                        <td><?php echo $OD_CT["order_total"]; ?></td>
                                        
                                            <?php 
                                                if($OD_CT["order_status"] == 1){
                                                    echo "<td style='color:blue'>未付款</td>";
                                                }else if($OD_CT["order_status"]==2){
                                                    echo "<td style='color:red'>未出貨</td>";
                                                }else if($OD_CT["order_status"]==3){
                                                    echo "<td style='color:blue'>已出貨</td>";
                                                }else if($OD_CT["order_status"]==4){
                                                    echo "<td style='color:#ed8c00;'>申請中</td>";
                                                }
                                            ?>
                                        
                                        <td class="hideinput" style="display:none">
                                            <input type="hidden" name="orderNo" value="<?php echo $OD_CT["surfequipped_orderNo"] ?>">
                                            <input type="hidden" name="account" value="<?php echo $OD_CT["account"] ?>"><!--member-->
                                            <input type="hidden" name="receiver" value="<?php echo $OD_CT["sufequipped_receiver"] ?>">
                                            <input type="hidden" name="tel" value="<?php echo $OD_CT["sufequipped_tel"] ?>">
                                            <input type="hidden" name="email" value="<?php echo $OD_CT["sufequipped_email"] ?>">
                                            <input type="hidden" name="adress" value="<?php echo $OD_CT["sufequipped_adress"] ?>">
                                            <input type="hidden" name="status" value="<?php echo $OD_CT["order_status"] ?>">
                                            <input type="hidden" name="atm" value="<?php echo $OD_CT["atm_acount"] ?>">
                                            <input type="hidden" name="cancle" value="<?php echo $OD_CT["cancle_message"] ?>">
                                            <input type="hidden" name="total" value="<?php echo $OD_CT["order_total"] ?>">
                                            <input type="hidden" name="member_no" value="<?php echo $OD_CT["member_no"] ?>">
                                        </td>
                                        <td>
                                            <input type="hidden" name="" value="<?php echo $OD_CT["surfequipped_orderNo"] ?>">
                                            <input type="hidden" name="" value="<?php echo $OD_CT["account"] ?>"><!--member-->
                                            <input type="button" value="訂單明細" class="OD_btndetail btn btn-primary btn-sm pressgolightbox">
                                            <input type="button" value="已匯款" class="OD_btnatm btn btn-primary btn-sm pressgolightbox" <?php if($disInput>1){echo "disabled";}else{}; ?> >
                                            <input type="button" value="已出貨" class="OD_btngo btn btn-primary btn-sm pressgolightbox" <?php if($disInput>2){echo "disabled";}else{}; ?> >
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
                                    $sql = "select * from surfequipped_order 
                                            join member
                                            where surfequipped_order.member_no = member.member_no and
                                            surfequipped_order.order_status>4";
                                    $cust = $pdo->query($sql);
                                    while($OD_CT = $cust->fetch()){

                                    
                                ?>
                                    <tr>
                                        <td><?php echo $OD_CT["surfequipped_orderNo"]; ?></td>
                                        <td><?php echo $OD_CT["member_no"]; ?></td>
                                        <td><?php echo $OD_CT["order_date"]; ?></td>
                                        <td><?php echo $OD_CT["order_total"]; ?></td>
                                        <td>
                                            <?php 
                                                if($OD_CT["order_status"] == 5){
                                                    echo "取消交易";
                                                }else if($OD_CT["order_status"]==6){
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
                            <?php 
                                $sql = "select * from"
                            ?>
                                <div class="val">
                                    <div class="list val_sm_item">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr id="list-title_FT">
                                                <th>明細編號</th>
                                                <th>商品名稱</th>
                                                <th>價格</th>
                                                <th>數量</th>
                                                <th>圖片</th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="Order val_sm_item">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <tr>
                                                <th>會員名稱</th>
                                                <th>訂單時間</th>
                                                <th>訂單狀態</th>
                                                <th>總價</th>
                                            </tr>
                                            <tr>
                                                <td id="OD_member"></td>
                                                <td id="OD_date"></td>
                                                <td id="OD_status"></td>
                                                <td id="OD_total"></td>
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
                                                <th>訊息</th>
                                                <td id="OD_msg"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    
                                </div>
                                
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