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
    <script type="text/javascript" src="js/ordercheck_catch.js"></script>
    
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
                <li class="col-sm-2 col-xs-2">訂單編號</li>
                <li class="col-sm-2 col-xs-2">訂購時間</li>
                <li class="col-sm-2 col-xs-2">訂單金額</li>
                <li class="col-sm-2 col-xs-2">訂單狀態</li>
                <li class="col-sm-4 col-xs-4">訂單明細</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="txt-val">
            <?php
                require_once("connectBooks.php");
                $sql = "select * from customize_order 
                        join member, customize_color, customize_model, customize_material
                        where   customize_order.member_no = member.member_no and 
                                customize_order.colorNo = customize_color.colorNo and
                                customize_order.modelNo = customize_model.modelNo and
                                customize_order.materialNo = customize_material.materialNo;";
                $order = $pdo->query($sql);

                while($order_CK = $order->fetch()){
            ?>
                <ul>
                    <li class="col-sm-2 col-xs-12 orderNo"><span class="rwdtitleshow">訂單編號</span><span class="shinvalue"><?php echo $order_CK["customize_orderNo"]?></span></li>
                    <li class="col-sm-2 col-xs-12 orderDate"><span class="rwdtitleshow">訂購時間</span><span class="shinvalue"><?php echo $order_CK["customize_order_date"]?></span></li>
                    <li class="col-sm-2 col-xs-12 orderTotal"><span class="rwdtitleshow">訂單金額</span><span class="shinvalue"><?php echo $order_CK["customize_order_total"]?></span></li>
                    <li class="col-sm-2 col-xs-12 orderStatus"><span class="rwdtitleshow">訂單狀態</span>
                        <span class="shinvalue">
                            <?php 
                                if($order_CK["customize_order_status"] == 1){
                                    echo "未付款";
                                }else if($order_CK["customize_order_status"]==2){
                                    echo "未出貨";
                                }else if($order_CK["customize_order_status"]==3){
                                    echo "已出貨";
                                }else if($order_CK["customize_order_status"]==4){
                                    echo "申請中";
                                }else if($order_CK["customize_order_status"]==5){
                                    echo "取消交易";
                                }else if($order_CK["customize_order_status"]==6){
                                    echo "交易完成";
                                }
                            ?>
                        </span>
                    </li>
                    <li class="col-sm-4"><span class="rwdtitleshow">訂單明細</span><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn customize-order-btn"></li>
                    <li class="clearfix"></li>
                </ul>
                    
                <div class="hideinput">
                    <input type="hidden" name="" value="<?php echo $order_CK["customize_model_name"] ?>">
                    <input type="hidden" name="" value="<?php echo $order_CK["customize_material_name"] ?>">
                    <input type="hidden" name="" value="<?php echo $order_CK["customize_color_name"] ?>">
                    <?php $custImg = $order_CK["boarddemo"];?> 
                    <img src="<?php echo $custImg; ?>" style="display:none;">

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
                $sql2 = "select * from surfequipped_order
                        join member
                        where surfequipped_order.member_no = member.member_no;";
                $surfOD = $pdo->query($sql2);

                while($order_SF = $surfOD->fetch()){
            ?>
            
            <div class="rwd-FT-box">
                <ul class="rwd-FT-title col-xs-6 col-sm-12">
                    <li class="col-xs-12"><span>訂單編號</span></li>
                    <li class="col-xs-12"><span>訂單時間</span></li>
                    <li class="col-xs-12"><span>訂單金額</span></li>
                    <li class="col-xs-12"><span>訂單狀態</span></li>
                    <li class="col-xs-12"><span>訂單明細</span></li>
                    <li class="clearfix"></li>
                </ul>
                <ul class="DSrwd-FT-val col-xs-6 col-sm-12">
                    <li class="col-sm-2 col-xs-12 FT_orderNo"><span><?php echo $order_SF["surfequipped_orderNo"];?></span></li>
                    <li class="col-sm-2 col-xs-12"><span><?php echo $order_SF["order_date"];?></span></li>
                    <li class="col-sm-2 col-xs-12"><span><?php echo $order_SF["order_total"];?></span></li>
                    <li class="col-sm-2 col-xs-12">
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
                                }else if($order_SF["order_status"]==5){
                                    echo "取消交易";
                                }else if($order_SF["order_status"]==6){
                                    echo "交易完成";
                                }
                            ?>
                        </span>
                    </li>
                    <li class="col-sm-4 col-xs-12"><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn FT-order-btn"></li>
                </ul>
                <div class="clearfix"></div>
            </div>
                
            <div class="clearfix"></div>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="item-txt" id="history-txt">
        
        <div class="txt-val">
            <div class="HT-cust-box">
                <h3>客製浪板歷史訂單</h3>
                <div class="txt-title">
                    <ul>
                        <li class="col-sm-3">編號</li>
                        <li class="col-sm-3">訂購時間</li>
                        <li class="col-sm-3">訂單金額</li>
                        <li class="col-sm-3">訂單狀態</li>
                        <!-- <li class="col-sm-4">訂單明細</li> -->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <?php
                    $sql_CT = "select * from customize_order 
                               join member 
                               where customize_order.member_no = member.member_no and
                                     customize_order_status = 5 or
                                     customize_order_status = 6 and
                                     member.member_no = :account
                               order by customize_order.customize_orderNo";
                    $HT_sql1 = $pdo->prepare($sql_CT);
                    $HT_sql1->bindValue(":account",1);
                    $HT_sql1->execute();
                    
                    while($HT_IP = $HT_sql1->fetch()){
                ?>
                <ul class="CT-HT-list">
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂單編號</span><span><?php echo $HT_IP["customize_orderNo"];?></span></li>
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂購時間</span><span><?php echo $HT_IP["customize_order_date"];?></span></li>
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂單金額</span><span><?php echo $HT_IP["customize_order_total"];?></span></li>
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂單狀態</span>
                        <span>
                            <?php if($HT_IP["customize_order_status"]==5){
                                echo "取消交易";
                            }else if($HT_IP["customize_order_status"]==6){
                                echo "交易完成";
                            }?>
                        </span>
                    </li>
                    <!-- <li class="col-sm-4"><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn HT-order-btn"></li> -->
                    <li class="clearfix"></li>
                </ul>
                <?php
                        }
                    
                ?>
            </div>
            <div class="HT-fitt-box">
                <h3>衝浪配備歷史訂單</h3>
                <div class="txt-title">
                    <ul>
                        <li class="col-sm-3">編號</li>
                        <li class="col-sm-3">訂購時間</li>
                        <li class="col-sm-3">訂單金額</li>
                        <li class="col-sm-3">訂單狀態</li>
                        <!-- <li class="col-sm-4">訂單明細</li> -->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <?php
                    $sql_FT = "select * from   surfequipped_order 
                                join member 
                                where  surfequipped_order.member_no = member.member_no and
                                    order_status = 5 or
                                    order_status = 6 and
                                    member.member_no = :account
                                order by surfequipped_order.surfequipped_orderNo";
                    $HT_sql2 = $pdo->prepare($sql_FT);
                    $HT_sql2->bindValue(":account",1);
                    $HT_sql2->execute();
                    
                    while($HT_IP = $HT_sql2->fetch()){
                ?>
                <ul class="FT-HT-list">
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂單編號</span><span><?php echo $HT_IP["surfequipped_orderNo"]?></span></li>
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂購時間</span><span><?php echo $HT_IP["order_date"]?></span></li>
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂單金額</span><span><?php echo $HT_IP["order_total"]?></span></li>
                    <li class="col-sm-3 col-xs-12"><span class="rwdtitleshow">訂單狀態</span>
                        <span>
                            <?php if($HT_IP["order_status"]==5){
                                echo "取消交易";
                            }else if($HT_IP["order_status"]==6){
                                echo "交易完成";
                            }?>
                        </span>
                    </li>
                    <!-- <li class="col-sm-4"><input type="button" name="" value="訂單明細" class="arikicommon_bgwhite_btn HT-order-btn"></li> -->
                    <li class="clearfix"></li>
                </ul>
                <?php 
                    }
                ?>
            </div>

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
                <div class="col-sm-9 col-xs-12 cust-Info-box">
                    <div class="col-sm-12 col-xs-12 cust-OD-Info">
                        <div class="col-sm-6 col-xs-12 white">
                            <div class="col-sm-6 col-xs-12">
                                    <h4>訂單編號</h4>
                                    <p class="cust-OD-No"></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                    <h4>訂單時間</h4>
                                    <p class="cust-OD-date"></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                    <h4>訂單狀態</h4>
                                    <p class="cust-OD-status"></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                    <h4>總價</h4>
                                    <p class="cust-OD-total"></p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 cust-OD-txt">
                            <div class="col-sm-6 col-xs-12">
                                <h4>板型</h4>
                                <p class="cust-OD-model"></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <h4>材質</h4>
                                <p class="cust-OD-material"></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <h4>顏色</h4>
                                <p class="cust-OD-color"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-12 col-xs-12 cust-userInput">
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
                <div class="col-sm-3 col-xs-12 cust-img-btn-box">
                    <div class="cust-img">
                        <img src="" class="cust-OD-img"> 
                    </div>
                    <div class="cust-btn">
                        <div class="arikicommon_bgwhite_btn">取消交易</div>
                        <div class="arikicommon_important_btn customize-exit">確認離開</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="fitting-LB LB-item" id="fitting-LB">
            <div class="fitt-box">
                <div class="LB-item-h3">
                    <h3>訂單明細</h3>
                </div>
                <div class="FT-list-title">
                    <ul>
                        <li class="col-sm-2 col-xs-12"><h4>明細編號</h4></li>
                        <li class="col-sm-4 col-xs-12"><h4>商品名稱</h4></li>
                        <li class="col-sm-2 col-xs-12"><h4>價格</h4></li>
                        <li class="col-sm-1 col-xs-12"><h4>數量</h4></li>
                        <li class="col-sm-3 col-xs-12"><h4>圖片</h4></li>
                        <li class="clearfix"></li>
                    </ul>
                </div>
                <div class="FT-list-val">
                    <!-- <ul class="FT-OD-Group">
                        <li class="col-sm-2"><span class="FT-OD-liNo"></span></li>
                        <li class="col-sm-4"><span class="FT-OD-Prod"></span></li>
                        <li class="col-sm-2"><span class="FT-OD-price"></span></li>
                        <li class="col-sm-1"><span class="FT-OD-qty"></span></li>
                        <li class="col-sm-3"><img src="" alt="" class="FT-OD-img"></li>
                        <li class="clearfix"></li>
                    </ul> -->
                </div>
                <div class="FT-Info-val">
                    <div class="FT-Person-Info">
                        <ul>
                            <li><h4>收件人姓名</h4><span class="FT-OD-name"></span></li>
                            <li><h4>收件人電話</h4><span class="FT-OD-tel"></span></li>
                            <li><h4>E-mail</h4><span class="FT-OD-email"></span></li>
                            <li><h4>收件人地址</h4><span class="FT-OD-adress"></span></li>
                            <li><h4>匯款帳號</h4><span class="FT-OD-atm"></span></li>
                        </ul>
                    </div>
                    <div class="FT-OD-Info">
                        <div class="col-sm-6 col-xs-12"><h4>訂單編號</h4><span class="FT-OD-No"></span></div>
                        <div class="col-sm-6 col-xs-12"><h4>訂單時間</h4><span class="FT-OD-date"></span></div>
                        <div class="col-sm-6 col-xs-12"><h4>訂單狀態</h4><span class="FT-OD-status"></span></div>
                        <div class="col-sm-6 col-xs-12"><h4>總額</h4><span class="FT-OD-total"></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="FT-btn">
                    <div class="arikicommon_bgwhite_btn">取消交易</div>
                    <div class="arikicommon_important_btn FT-exit">確認離開</div>
                </div>
                <!-- <div class="decoration"></div> -->
            </div>
        </div>
        <div class="history-LB LB-item" id="history-LB">
            <div class="history-box">
                <div class="HT-item-h3">
                    <h3>訂單明細</h3>
                </div>
                <div class="HT-list-title">
                    <ul>
                        <li class="col-sm-2"><h4>明細編號</h4></li>
                        <li class="col-sm-4"><h4>商品名稱</h4></li>
                        <li class="col-sm-2"><h4>價格</h4></li>
                        <li class="col-sm-1"><h4>數量</h4></li>
                        <li class="col-sm-3"><h4>圖片</h4></li>
                        <li class="clearfix"></li>
                    </ul>
                </div>
                <div class="HT-list-val">
                    <!-- <ul class="HT-OD-Group">
                        <li class="col-sm-2"><span class="HT-OD-liNo"></span></li>
                        <li class="col-sm-4"><span class="HT-OD-Prod"></span></li>
                        <li class="col-sm-2"><span class="HT-OD-price"></span></li>
                        <li class="col-sm-1"><span class="HT-OD-qty"></span></li>
                        <li class="col-sm-3"><img src="" alt="" class="HT-OD-img"></li>
                        <li class="clearfix"></li>
                    </ul> -->
                </div>
                <div class="HT-Info-val">
                    <div class="HT-Person-Info">
                        <ul>
                            <li><h4>收件人姓名</h4><span class="HT-OD-name"></span></li>
                            <li><h4>收件人電話</h4><span class="HT-OD-tel"></span></li>
                            <li><h4>E-mail</h4><span class="HT-OD-email"></span></li>
                            <li><h4>收件人地址</h4><span class="HT-OD-adress"></span></li>
                            <li><h4>匯款帳號</h4><span class="HT-OD-atm"></span></li>
                        </ul>
                    </div>
                    <div class="HT-OD-Info">
                        <div class="col-sm-6"><h4>訂單編號</h4><span class="HT-OD-No"></span></div>
                        <div class="col-sm-6"><h4>訂單時間</h4><span class="HT-OD-date"></span></div>
                        <div class="col-sm-6"><h4>訂單狀態</h4><span class="HT-OD-status"></span></div>
                        <div class="col-sm-6"><h4>總額</h4><span class="HT-OD-total"></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="HT-btn">
                    <div class="arikicommon_bgwhite_btn">取消交易</div>
                    <div class="arikicommon_important_btn HT-exit">確認離開</div>
                </div>
                <!-- <div class="decoration"></div> -->
            </div>
        </div>
    </div>
    <?php
        }catch(PDOException $e){
            echo "錯誤行號 : ", $e->getLine(), "<br>";
            echo "錯誤訊息 : ", $e->getMessage(), "<br>";
        }
    ?>
</div>
<!--(bake module/member_bottom.html)--><?php require_once('publicpage/member_bottom.php'); ?>
<!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
</body>
</html>