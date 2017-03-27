<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/1
 * Time: 9:58
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>填写订单</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/submit_book.css">
</head>
<body>
<?php include "head.php";?>
    <div class="wrapper">
        <div id="book">
            <form action="order/sure" method="post">
                <div id="book-mune">
    <!--                <img src="assets/img/book_mune.png" alt="">-->
                    <div>
                        <span>填写订单</span>
                        <span>确认订单</span>
                        <span>支付定金</span>
                        <span>支付成功</span>
                    </div>
                </div>
                <div id="check-in">
                    <h3>入住信息</h3>
                    <p>房源信息：<span></span></p>
                    <p>入住信息：<span><input type="text" value="<?php echo $star_time?>"><input type="text" value="<?php echo $over_time;?>"></span>共<?php
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
                        echo  ceil($diff);
                        ?>月</p>
                </div>
                <div id="user-information">
                    <h3 id="user-title">入住人信息</h3>
                    <p><span>真实姓名：</span><span>说说说</span><span>手机号：</span><span>18846433845</span></p>
                </div>
                <div id="book-information">
                    <h3>订单费用详情</h3>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>租金</th>
                                <th>月数</th>
                                <th>总价</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>房租</td>
                                <td><?php echo $rs->price;?></td>
                                <td><?php echo  ceil($diff);
                                    ?></td>
                                <td><?php echo $rs->price*ceil($diff);?> </td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 class="rent">在线收取押金：200元</h4>
                    <h4>订单总金额：<span><strong>￥<?php echo $rs->price*ceil($diff)+200;?></strong>&nbsp;元</span></h4>
                </div>
                <div id="invoice">
                    <h4><input type="checkbox" id="check">需要发票</h4>
                    <div id="invo">
                        <h3>发票信息</h3>

                        <span><span>邮寄地址：</span><input class="address" type="text" name="address"></span>
                        <span><span>手机号：</span><input class="phone_num" type="text" name="phone_num"></span>
                    </div>

                </div>
                <div id="book-sub">
                <input type="submit" value="提交订单">
            </div>
            </form>
    </div>
        <script src="assets/js/header.js"></script>
        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <script>
            var $check = $("#check"),
                $invo = $("#invo");
            $check.on('click', function () {
                if($check.prop('checked')){
                    $invo.show();
                }else{
                    $invo.hide();
                }
            })
        </script>
</body>
</html>
