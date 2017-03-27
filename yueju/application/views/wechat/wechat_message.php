<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/wechat_message.css">
    <script src="assets/js/rem.js"></script>
    <title>消息中心</title>
</head>
<body>
<div id="container">
        <ul id="message-ul">
            <?php foreach($message as $v){?>
                <li>
                    <img src="wechat/wechat_message.jpg" alt="">
                    <div id="message-content">
                        <p><strong>系统消息</strong><span class="message-time"><?php echo $v->addtime?></span></p>
                        <?php echo $v->content?>
                    </div>
                </li>
                <div class="message-bottom"></div>

            <?php }?>
        </ul>
</div>


<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/message.js"></script>
</body>
</html>