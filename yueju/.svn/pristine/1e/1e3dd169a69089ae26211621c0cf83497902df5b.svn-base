<!DOCTYPE html>
<html>
<head>
    <title>消息与通知</title>
    <meta charset="utf-8">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/message.css">
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
<div id="container">
    <div class="wrapper">
        <div id="left-sidebar">
            <?php include "left-sidebar.php"?>
        </div>
        <div id="message-content">
            <ul id="message-ul">
                <?php foreach($message as $v){?>
                <li>
                    <p><strong>消息名称： 系统消息</strong><span class="message-time"><?php echo $v->addtime?></span></p>
                    消息内容：<br/>
                    <?php echo $v->content?>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
    <?php include 'header.php'?>


<script src="assets/js/jquery-3.1.1.min.js"></script>
</body>
</html>
