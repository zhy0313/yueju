<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/23
 * Time: 16:14
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>房屋详情</title>
    <base href="<?php echo site_url(); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="assets/js/rem.js"></script>
<!--        <link rel="stylesheet" href="assets/css/common.css">-->
    <link rel="stylesheet" href="assets/css/wechat/room.css">
    <link rel="stylesheet" href="assets/js/laydate/need/laydate.css">
    <link rel="stylesheet" href="assets/js/laydate/skins/default/laydate.css">
    <link rel="stylesheet" href="assets/css/wechat/jquery.mobile-1.4.5.min.css">
</head>
<body>
    <div id="room">
        <div id="particaulars">
            <div id="information-img">
                <div id="big-house-img">
                    <?php foreach($house_img_four as $houseimg){?>
                        <img class="big-img" src="<?php echo $houseimg->img_src;?>">
                    <?php }?>
                </div>
            </div>
            <div id="essential-information">
                <nav>
                    <div class="wrapper">
                        <h2 id="title"><?php echo $information->title;?><span>￥<?php echo $information->price;?></span></h2>
                        <p id="address"><?php echo $information->city.''.$information->street.''.$information->road;?><span><?php echo $information->street;?></span> </p>
                    </div>
                </nav>
                <div id="information">
                    <div class="wrapper">
                        <div class="house-type"><div class="type">房间类型</div><div><div>房屋面积：<?php echo $information->area;?>平方米</div><div>房屋类型：<?php echo $information->name;?></div></div></div>
                        <div class="house-type"><div class="type">入住须知</div><div><div>短租：少于12个月</div><div>长租：多于一年</div></div></div>
                        <div class="house-type"><div class="type">房间内部情况</div><div><?php echo $information->house_describe;?></div></div>

                    </div>
                </div>
                <div id="facility">
                    <div class="wrapper">
                        <div class="type">房间设施</div><div>
                            <?php foreach($facility as $f){?>
                                <li><img src="<?php echo $f->icon;?>" alt="" ><p><?php echo $f->name;?></p></li>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container">
                <div class="wrapper">
                    <div id="content-conmment">
                        <span class="select">基本信息</span>
                        <span>房源点评</span>
                    </div>
                    <ul id="content" class="select">
                        <?php foreach($house_img as $himg){?>
                            <li><img src="<?php echo $himg->img_src;?>" alt=""><p><?php echo $himg->describe;?></p></li>
                        <?php }?>
                    </ul>
                    <ul id="conmment">
                        <?php foreach ( $conmment as $com ){?>
                            <li class="conmment-contianer">
                                <div class="user">

                                    <img src="<?php echo $com->img;?>" alt=""><span><?php echo $com->username;?></span>
                                    </div>
                                <div class="score">
                                    <p>
                                        <span><?php echo date('y-m-d',strtotime($com->conmment_date));?></span>
                                        <span class=""><?php
                                            $i = $com->score;
                                            $s=$i/20;

                                            if($i%20!=0){
                                                for($j=1;$j<$s;$j++){
                                                    echo '<img src="assets/img/xingxing1.png">';
                                                }
                                                echo '<img src="assets/img/xing.png">';
                                                for($j=1;$j<5-$s;$j++){
                                                    echo '<img src="assets/img/xingxing.png">';
                                                }
                                            }else{
                                                for($j=0;$j<$s;$j++){
                                                    echo '<img src="assets/img/xingxing1.png">';
                                                }
                                                for($j=0;$j<5-$s;$j++){
                                                    echo '<img src="assets/img/xingxing.png">';
                                                }
                                            }

                                            ?></span>
                                    </p>
                                </div>
                                <div class="conmment-content">
                                    <p><?php echo $com->content;?></p>
                                    <div class="conmment-img">
                                        <?php if($com->img_first_thumb){
                                            echo ' <img src="'.$com->img_first_thumb.'" alt="">';
                                        }?>
                                        <?php if($com->img_second_thumb){
                                            echo ' <img src="'.$com->img_second_thumb.'" alt="">';
                                        }?>
                                        <?php if($com->img_third_thumb){
                                            echo ' <img src="'.$com->img_third_thumb.'" alt="">';
                                        }?>
                                    </div>


                                </div>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="book">
            <button id="book-btn">马上预约</button>
            <form action="../book/refer" id="book-information" method="post">
                <div class="wrapper">
                    <div id="book-content">
                        <div id="book-date">
                            <p><span>入住日期</span><span>退房日期</span></p>
                            <div><input placeholder="请输入日期" name="star_time" class="laydate-icon" onclick="laydate()"><input placeholder="请输入日期" name="over_time" class="laydate-icon" onclick="laydate()"></div>
                        </div>
                        <div id="book-type">
                            <p>租住类型</p>
                            <div>
                                <select name="type" id="">
                                    <option value="长租">长租</option>
                                    <option value="短租">短租</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

    <script src="assets/js/wechat/jquery-1.12.4.min.js"></script>
<!--    <script src="assets/js/jquery-3.1.1.min.js"></script>-->
    <script src="assets/js/wechat/jquery.mobile-1.4.5.min.js"></script>
<script src="assets/js/laydate/laydate.js"></script>
<script src="assets/js/wechat/room.js"></script>
</body>
</html>