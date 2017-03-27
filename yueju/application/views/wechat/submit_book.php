<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="assets/js/rem.js"></script>
    <link rel="stylesheet" href="assets/css/wechat/submit_book.css">
</head>
<body>
    <div id="book">
        <form action="" method="post">
            <div id="house-information">
                <h5>入住信息</h5>
                <input type="hidden" name="house_id" value="<?php echo $rs->house_id;?>">
                <p><span>房源信息：</span><span><?php echo $rs->title;?></span></p>
                <p><span>入住时间：</span><span><input type="text" value="<?php echo $star_time?>" name="star_time"></span></p>
                <p><span>退房时间：</span><span><input type="text" value="<?php echo $star_time?>" name="end_time"></span></p>
            </div>
            <div id="user-information">
                <h5>预订人信息</h5>
                <p><span>真实姓名：</span><span><?php echo $rs->title;?></span></p>
                <p><span>手机号：</span><span><?php echo $star_time?></span></p>
            </div>
            <div id="book-information">
                <h5>订单费用信息</h5>
                <p><span>房租：</span><span><?php echo $rs->title;?></span></p>
                <p><span>预定数：</span><span><?php echo $star_time?></span></p>
                <p><span>总价：</span><span><?php echo $star_time?></span></p>
                <p><span>押金：</span><span>￥200元</span></p>
            </div>
            <div id="rent">
                <p>在线收取押金：￥200元</p>
                <p>订单总金额：￥<?php
                    function diffBetweenTwoDays ($day1, $day2)
                    {
                        $second1 = strtotime($day1);
                        $second2 = strtotime($day2);

                        if ($second1 < $second2) {
                            $tmp = $second2;
                            $second2 = $second1;
                            $second1 = $tmp;
                        }
                        return ($second1 - $second2) / 86400/30-1;
                    }
                    $day1 = $star_time;
                    $day2 = $over_time;
                    $diff = diffBetweenTwoDays($day1, $day2);
                    echo  $rs->price*ceil($diff)+200;
                    ?>元</p>
            </div>
            <div id="invoice-information">
                <h4><input type="checkbox">需要发票</h4>
                <div id="invoice">
                    <h5>发票信息</h5>

                    <p><span>邮寄地址：</span><input type="text" id="address" name="address"></p>
                    <p><span>手机号：</span><input type="text" id="phone_num" name="phone_num"></p>
                </div>

            </div>
            <div><input type="submit" id="book-submit" value="提交订单"> </div>
        </form>
    </div>
    <script src="assets/js/wechat/jquery-1.12.4.min.js"></script>
    <script src="assets/js/wechat/jquery.model-1.4.5.min.js"></script>
    <script>
        var $check = $("#check"),
            $invo = $("#invo");
        $check.on('tab', function () {
            if($check.prop('checked')){
                $invo.show();
            }else{
                $invo.hide();
            }
        })
    </script>
</body>
</html>