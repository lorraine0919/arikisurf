<?php
session_start();
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
    <!--(bake module/member_head.html)--><?php require_once('publicpage/member_head.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/7member_ordercheck.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/7member_ordercheck.js"></script>
    
</head>
<body> 
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
<a href="index.html">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>會員專區</span>
<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
<!--(bake module/member_top.html)--> <?php require_once('publicpage/member_top.php'); ?>
<!-- =================會員專區================== -->
<div class="member_ordercheck_23">
    <?php
        try{
    ?>
    <div class="ordercheck-title">
        <ul>
            <li id="customize_ODC" class="li-click"><p>客製浪板</p></li>
            <li id="fitting_ODC"><p>衝浪配備</p></li>
            <li id="history_ODC"><p>歷史訂單</p></li>
        </ul>
        <div class="clearfix"></div>
    </div>

    <div class="item-txt" id="customize-txt">
        <div class="txt-title">
            <ul>
                <li class="col-sm-2">訂單編號</li>
                <li class="col-sm-2">訂購時間</li>
                <li class="col-sm-2">訂單金額</li>
                <li class="col-sm-2">訂單狀態</li>
                <li class="col-sm-4">訂單明細</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="txt-val">
            
                
                <?php
                        require_once("connectBooks.php");
                        $sql = "select * from customize_order 
                                join member, customize_color, customize_model, customize_material
                                where customize_order.member_no = member.member_no and 
                                      customize_order.colorNo = customize_color.colorNo and
                                      customize_order.modelNo = customize_model.modelNo and
                                      customize_order.materialNo = customize_material.materialNo;";
                        $order = $pdo->query($sql);

                        while($order_CK = $order->fetch()){
               ?>
                    <ul>
                        <li class="col-sm-2 orderNo"><span><?php echo $order_CK["customize_orderNo"]?></span></li>
                        <li class="col-sm-2 orderDate"><span><?php echo $order_CK["customize_order_date"]?></span></li>
                        <li class="col-sm-2 orderTotal"><span><?php echo $order_CK["customize_order_total"]?></span></li>
                        <li class="col-sm-2 orderStatus">
                            <span>
                                <?php 
                                    if($order_CK["customize_order_status"] == 1){
                                        echo "未付款";
                                    }else if($order_CK["customize_order_status"]==2){
                                        echo "未出貨";
                                    }else if($order_CK["customize_order_status"]==3){
                                        echo "已出貨";
                                    }else if($order_CK["customize_order_status"]==4){
                                        echo "申請中";
                                    }
                                ?>
                            </span></li>
                        <li class="col-sm-4"><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn customize-order-btn"></li>
                        <li class="clearfix"></li>
                    </ul>

                    
                    <div class="hideinput">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_model_name"] ?>">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_material_name"] ?>">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_color_name"] ?>">
                        <input type="hidden" name="" value="">

                        <input type="hidden" name="" value="<?php echo $order_CK["customize_tel"] ?>">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_email"] ?>">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_adress"] ?>">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_atm_acount"] ?>">
                        <input type="hidden" name="" value="<?php echo $order_CK["customize_usermessage"] ?>">
                    </div>
               
                
                  
            
            <?php
                        }
            ?>
        </div>
    </div>
    <div class="item-txt" id="fitting-txt">
        <div class="txt-title">
            <ul>
                <li class="col-sm-2">訂單編號</li>
                <li class="col-sm-2">訂購時間</li>
                <li class="col-sm-2">訂單金額</li>
                <li class="col-sm-2">訂單狀態</li>
                <li class="col-sm-4">訂單明細</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="txt-val">
            <?php
                $sql = "select * from surfequipped_order
                        join member
                        where surfequipped_order.member_no = member.member_no;";
                $surfOD = $pdo->query($sql);

                while($order_SF = $surfOD->fetch()){
            ?>
            <ul>
                <li class="col-sm-2"><span><?php echo $order_SF["surfequipped_orderNo"];?></span></li>
                <li class="col-sm-2"><span><?php echo $order_SF["order_date"];?></span></li>
                <li class="col-sm-2"><span><?php echo $order_SF["order_total"];?></span></li>
                <li class="col-sm-2">
                    <span>
                        <?php 
                            if($order_SF["order_status"] == 1){
                                echo "未付款";
                            }else if($order_SF["order_status"]==2){
                                echo "未出貨";
                            }else if($order_SF["order_status"]==3){
                                echo "已出貨";
                            }else if($order_SF["order_status"]==4){
                                echo "申請中";
                            }
                        ?>
                    </span>
                </li>
                <li class="col-sm-4"><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn"></li>
            </ul>
            <div class="clearfix"></div>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="item-txt" id="history-txt">
        <div class="txt-title">
            <ul>
                <li class="col-sm-2">訂單編號</li>
                <li class="col-sm-2">訂購時間</li>
                <li class="col-sm-2">訂單金額</li>
                <li class="col-sm-2">訂單狀態</li>
                <li class="col-sm-4">訂單明細</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="txt-val">
            <ul>
                <li class="col-sm-2"><span>A101000</span></li>
                <li class="col-sm-2"><span>2014/04/01</span></li>
                <li class="col-sm-2"><span>200</span></li>
                <li class="col-sm-2"><span>出貨中</span></li>
                <li class="col-sm-4"><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn"></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="decoration"></div>

    <div class="lightbox" id="lightbox">
        <div class="customize-LB LB-item" id="customize-LB">
            <div class="cust-box">
                <div class="LB-item-h3">
                    <h3>訂單明細</h3>
                </div>
                <div class="col-sm-9 cust-Info-box">
                    <div class="col-sm-12 cust-OD-Info">
                        <div class="col-sm-6 white">
                            <div class="col-sm-6">
                                    <h4>訂單編號</h4>
                                    <p class="cust-OD-No"></p>
                            </div>
                            <div class="col-sm-6">
                                    <h4>訂單時間</h4>
                                    <p class="cust-OD-date"></p>
                            </div>
                            <div class="col-sm-6">
                                    <h4>訂單狀態</h4>
                                    <p class="cust-OD-status"></p>
                            </div>
                            <div class="col-sm-6">
                                    <h4>總價</h4>
                                    <p class="cust-OD-total"></p>
                            </div>
                        </div>
                        <div class="col-sm-6 cust-OD-txt">
                            <div class="col-sm-6">
                                <h4>板型</h4>
                                <p class="cust-OD-model"></p>
                            </div>
                            <div class="col-sm-6">
                                <h4>材質</h4>
                                <p class="cust-OD-material"></p>
                            </div>
                            <div class="col-sm-6">
                                <h4>顏色</h4>
                                <p class="cust-OD-color"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-12 cust-userInput">
                        <ul>
                            <li><h4>電話</h4><span class="cust-OD-tel"></span></li>
                            <li><h4>信箱</h4><span class="cust-OD-email"></span></li>
                            <li><h4>地址</h4><span class="cust-OD-adress"></span></li>
                            <li><h4>匯款帳號</h4><span class="cust-OD-atm"></span></li>
                            <li><h4>留言</h4><span class="cust-OD-message"></span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-3 cust-img-btn-box">
                    <div class="cust-img">
                        <img src="images/7member/7member_ordercheck/fishboard_yellow" alt="">
                    </div>
                    <div class="cust-btn">
                        <div class="arikicommon_bgwhite_btn">取消交易</div>
                        <div class="arikicommon_important_btn customize-exit">確認離開</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="decoration"></div>
        </div>
        <div class="fitting-LB LB-item" id="fitting-LB">
            <div class="fitt-box">
                <div class="LB-item-h3">
                    <h3>訂單明細</h3>
                </div>
                <div class="FT-list-title">
                    <ul>
                        <li class="col-sm-3">明細編號</li>
                        <li class="col-sm-3">商品名稱</li>
                        <li class="col-sm-3">數量</li>
                        <li class="col-sm-3">圖片</li>
                        <li class="clearfix"></li>
                    </ul>
                </div>
                <div class="FT-list-val">
                    <ul>
                        <li class="col-sm-3"><span class="FT-OD-liNo">1</span></li>
                        <li class="col-sm-3"><span class="FT-OD-Prod">衝浪褲(紅)</span></li>
                        <li class="col-sm-3"><span class="FT-OD-qty">1</span></li>
                        <li class="col-sm-3"><img src="images/8cart/surf-pants1.jpg" alt="" class="FT-OD-img"></li>
                        <li class="clearfix"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="history-LB LB-item" id="history-LB">
            <div class="history-box"></div>
        </div>
    </div>
    <?php
        }catch(PDOException $ex){
            echo "錯誤行號 : ", $e->getLine(), "<br>";
            echo "錯誤訊息 : ", $e->getMessage(), "<br>";
        }
    ?>
</div>
<!--(bake module/member_bottom.html)--><?php require_once('publicpage/member_bottom.php'); ?>
<!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
</body>
</html>