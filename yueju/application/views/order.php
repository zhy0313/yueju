<!DOCTYPE html>
<html>
<head>
    <title>订单管理</title>
    <meta charset="utf-8">
    <base href="<?php echo site_url();?>">
        <link rel="stylesheet" href="assets/css/common.css">
        <link rel="stylesheet" href="assets/css/order.css">
        <link rel="stylesheet" href="assets/css/left-sidebar.css">
        <style>
            #header{
                height:60px;
                background-color: #000;
            }
            #footer{
                height:170px;
                background-color:#000;
            }
        </style>
</head>
<body>
<?php include 'head.php'?>
<!--<script src="assets/json_encode/header.js"></script>-->
<div id="container">
    <div class="wrapper">
        <div id="left-sidebar">
            <?php include "left-sidebar.php"?>
        </div>
        <div id="order-content">
            <ul id="order-ul">
                <?php foreach($order as $v) { ?>
                <li>
                    <a href="javascript:;"><img src="<?php echo $v->img_src;?>" alt=""></a>
                    <a href="javascript:;"><p class="tit"><strong><?php echo $v->title;?></strong></p></a>
                    <p class="address">地址:<?php echo $v->city;?><?php echo $v->street;?><?php echo $v->road;?></p>
                    <p class="mes"><?php echo $v->name;?> - </p>
                    <p class="time">入住时间: <?php echo $v->start_time;?> -- 离开时间: <?php echo $v->end_time;?></p>
                    <hr class="hh">
                    <a class="cancel" href="javascript:;"><span>取消订单</span></a>
                    <a class="alter" href="javascript:;"><span>修改订单</span></a>
                </li>
                <?php }?>
            </ul>
        </div>
        <div id="pagination">
            <ul>
                <?php echo $this->pagination->create_links();?>
            </ul>
        </div>
    </div>
</div>


<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/order.js"></script>
</body>
</html>
