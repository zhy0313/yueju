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

    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/particulars.css">
    <link rel="stylesheet" href="assets/js/laydate/need/laydate.css">
    <link rel="stylesheet" href="assets/js/laydate/skins/default/laydate.css">
</head>
<body>
<?php include 'head.php'?>
    <div class="wrapper">
        <div id="room">
            <div id="particaulars">
                <div id="information-img">
                    <div id="big-house-img">
                        <?php foreach($house_img_four as $houseimg){?>

                            <img class="big-img" src="<?php echo $houseimg->img_src;?>">
                        <?php }?>
                    </div>
                    <div id="small-house-img">
                        <div>
                        <?php foreach($house_img_four as $houseimg){?>

                            <img class="small-img" src="<?php echo $houseimg->img_src;?>">
                        <?php }?>
                        </div>
                    </div>
                    <span id="up"></span>
                    <span id="down"></span>
                </div>
                <div id="essential-information">
                    <h2 id="title"><?php echo $information->title;?></h2>
                    <p id="address"><?php echo $information->city.''.$information->street.''.$information->road;?></p>
                    <hr color="dbc9c9">
                    <div class="house-type"><span class="type">房间类型</span><div><span>面积：<?php echo $information->area;?></span><span>房屋类型：<?php echo $information->name;?></span></div></div>
                    <div class="house-type"><span class="type">入住须知</span><div><span>短租：少于12个月</span><span>长租：多于一年</span></div></div>
                    <div class="house-type"><span class="type">房间内部情况</span><div><?php echo $information->house_describe;?></div></div>
                    <div class="house-type"><span class="type">房间设施</span><div>
                            <?php foreach($facility as $f){?>
                                <li><img src="<?php echo $f->icon;?>" alt="" width="20" height="20"><span><?php echo $f->name;?></span></li>
                            <?php }?>
                        </div></div>
                </div>
                <div id="container">
                    <div id="content-conmment">
                        <button class="select">基本信息</button>
                        <button>房源点评</button>
                    </div>
                    <hr color="c2c2c2">
                    <ul id="content" class="select">
                        <?php foreach($house_img as $himg){?>
                            <li><img src="<?php echo $himg->img_src;?>" alt=""><p><?php echo $himg->describe;?></p></li>
                        <?php }?>
                    </ul>
                    <ul id="conmment">
                        <?php foreach ( $conmment as $com ){?>
                            <div class="conmment-contianer">
                                <div class="user">
                                    <img src="<?php echo $com->img;?>" alt="">
                                    <p><?php echo $com->username;?></p>
                                </div>
                                <div class="conmment-content">
                                    <p><?php echo $com->content;?></p>
                                    <?php if($com->img_first_thumb){
                                        echo ' <img src="'.$com->img_first_thumb.'" alt="">';
                                    }?>
                                    <?php if($com->img_second_thumb){
                                        echo ' <img src="'.$com->img_second_thumb.'" alt="">';
                                    }?>
                                    <?php if($com->img_third_thumb){
                                        echo ' <img src="'.$com->img_third_thumb.'" alt="">';
                                    }?>
                                    <span id="score"><?php
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
                                    <span><?php echo date('y-m-d',strtotime($com->conmment_date));?></span>
                                </div>
                            </div>
                            <hr color="#dce0e0">
                        <?php }?>
                    </ul>
                </div>

            </div>
            <div id="book_recommend">
                <div id="book">
                    <form action="book/refer" method="post">
                        <input type="hidden" value="<?php echo $information->house_id?>" name="house_id">
                        <div id="book-title">
                            <span id="price"><strong>￥<?php echo $information->price; ?>&nbsp;</strong>元</span>
    
                            <span>/年</span>
                        </div>
                        <div id="book-content">
                        <div id="book-date">
                            <p><span>入住日期</span><span>退房日期</span></p>
                            <div><input placeholder="请输入日期" name="star_time" class="laydate-icon" onclick="laydate()"><input placeholder="请输入日期" name="over_time" class="laydate-icon" onclick="laydate()"></div>
                        </div>
                        <div id="book-type">
                            <span>租住类型</span>
                            <div>
                                <select name="type" id="">
                                    <option value="长租">长租</option>
                                    <option value="短租">短租</option>
                                </select>
                            </div>
                        </div>
                        <div id="book-collect">
                            <span class="collect-icon" user_id="<?php if ($this->session->user) {echo $this->session->user->user_id;}else{echo '-1';}?>" house_id="<?php echo $information->house_id?>">收藏</span>
                            <span class="share">分享</span>
                            <span class="collect-score"><span >评分</span><?php
                                $sum=0;
                                $con_num=$con_num;
                                foreach($conmment as $conm){
                                    $sum+=$conm->score;
                                }
                                $level = $sum/$con_num;

                                if($level%20!=0){
                                    for($i=1;$i<$level/20;$i++){
                                        echo '<img width="15" height="15" src="assets/img/xingxing1.png">';
                                    }
                                    echo '<img width="15" height="15" src="assets/img/xing.png">';
                                    for($i=1;$i<5-$level/20;$i++){
                                        echo '<img width="15" height="15" src="assets/img/xingxing.png">';
                                    }
                                }else{
                                    for($i=0;$i<$level/20;$i++){
                                        echo '<img width="15" height="15" src="assets/img/xingxing1.png">';
                                    }
                                    for($i=0;$i<5-$level/20;$i++){
                                        echo '<img width="15" height="15" src="assets/img/xingxing.png">';
                                    }
                                }
                                ?>

                            </span>
                        </div>
                        <div id="book-sub">
                            <?php if($this->session->user){
                                echo '<input type="submit" id="book-refer" value="马上预订">';

                            }else {echo '<span type="submit" id="book-refer" class="login_show">马上预订</span>';}?>

<!--                            <a href="javascript"></a>-->
                        </div>
                    </div>
                    </form>
                </div>
                <div id="service">
                    <a href="javascript:;"><img src="assets/img/service.png" width="20" height="20" alt="">联系客服</a>
                </div>
                <div id="recommend">
                    <h2>推荐房源</h2>

                    <?php
                    $rec=0;
                    if(count($recommend)<5){
                        $rec=count($recommend);
                    }else{
                        $rec=5;
                    }
                    for($i=0; $i<$rec;$i++) {?>
                        <a href="room/index/<?php echo $recommend[$i]->house_id;?>">
                            <div class="house">
                            <img src="<?php echo $recommend_img[$i]->img_src;?>" alt="">
                            <div class="brief">
                                <p ><span class="home-title"> <?php echo $recommend[$i]->title;?></span><?php echo $recommend[$i]->city.''.$recommend[$i]->street.''.$recommend[$i]->road;?></p>
                                <p><?php echo $recommend[$i]->house_describe;?></p>
                            </div>
                        </div>
                        </a>
                    <?php }?>
                    <p id="recommend-more"><a href="">查看更多》</a></p>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/header.js" ></script>
    <script src="assets/js/particulars.js"></script>
    <script src="assets/js/laydate/laydate.js"></script>
</body>
</html>