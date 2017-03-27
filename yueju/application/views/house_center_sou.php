<!--房源中心代码段    原鑫-->
<base href="<?php echo  site_url()?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/house-center.css">
    <title>Document</title>
    <style>
        #all{
            color: black;
            background: #eff3f5;
            border: 0;
        }
    </style>
</head>
<body>
<div id="header">
    <div id="header-wrapper">
        <img id="logo" src="assets/img/house-title.png" alt="">
        <ul id="header-title">
            <li><a href="">首页</a></li>
            <li><a href="room/house_center">房源中心</a></li>
            <li><a href="">个人中心</a></li>
            <li><a href="">关于悦居</a></li>
            <li><a href="">登录/注册</a></li>
        </ul>
    </div>
</div>
<div id="main">
    <div id="main-wrapper">
        <div id="query"><!--查询框部分!-->
            <div id="query"><!--查询框部分!-->
                <div id="query-body">
                    <div id="select1"><span id="Scity"><?php echo $t_city?></span> <img id="logo2" src="assets/img/input1.png" alt="">
                        <ul>
                            <?php  foreach($house_all as $v){?>
                                <li><?php echo $v->city?></li>
                            <?php }?>
                        </ul>
                    </div>

                    <div id="select2"><span id="Sstreet"><?php echo $t_street?></span> <img id="logo2" src="assets/img/input1.png" alt="">
                        <ul>
                            <?php  foreach($house_all as $v2){?>
                                <li><?php echo $v2->street  ?></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <form action="house_zhong/find_house" method="post">
                    <input type="hidden" name="Sinput1" id="Sinput1" >
                    <input type="hidden" name="Sinput2" id="Sinput2">
                    <input type="hidden" name="price_a" id="price_a" >
                    <input type="hidden" name="price_b" id="price_b">
                    <input type="hidden" name="p_house_type" id="p_house_type" >
                    <input type="hidden" name="p_facility_type" id="p_facility_typ">
                    <input type="hidden" name="all_local" id="all_local">
                    <input type="text" name="other" value="添加搜素内容..." id="select-input" onfocus="javascript:if(this.value=='添加搜素内容...')this.value='';"onblur="javascript:if(this.value=='')this.value='添加搜素内容...';">
                    <div id="sub"><input type="submit" value="搜索" id="sou"> <img src="assets/img/housue-sousuo.png" alt=""></div>

            </div>
        </div>


        <!--        搜索框内容结束-->
        <!--        选项框开始-->
        <div id="change">
            <div id="price"><!--        价格-->
                <div id="price_1" class="price_same">价格区间：</div>
                <div id="price_2" class="price_same">1000以下</div>
                <div id="price_3" class="price_same">1000-1500</div>
                <div id="price_4" class="price_same">1500-2000</div>
                <div id="price_5" class="price_same">2000以上</div>
            </div>
            <div id="house_type">
                <div id="ht1">户&nbsp&nbsp型：</div>
                <?php foreach($house_type as $t){?>
                    <div class="h_same"><input  name="ht" type="checkbox" value=<?php echo $t->name?> /><?php echo $t->name?> </label></div>
                <?php }?>

            </div>
            <div id="fac_type">
                <div id="ft1">设&nbsp&nbsp备：</div>
                <?php foreach($facility as $f){?>
                    <div class="f_same"><input  name="ft" type="checkbox" value=<?php echo $f->name?> /><?php echo $f->name?> </label></div>
                <?php }?>
            </div>
        </div>
        <div id="all_or_local">
            <!--            <div id="local">限时优惠</div>-->
            <a href=<?php echo 'house_zhong'?>><div id="all">全部</div></a>
        </div>
        <!--        图片上左边显示标题title 右边显示街道-->
        <div id="h_picture">
            <?php  $h_r_num=0; foreach($hs_img as $ai){ $h_r_num++?><?php }?>
            <?php  foreach($hs_img as $ai){?>
                <div class="pic_d">
                    <img class="pic_i" src=<?php echo $ai->img_src?> alt="">
                </div>
            <?php }?>
            <?php   foreach($hs_title as $h_title){?>
                <span class="h_r_title"><?php echo $h_title['title']?></span>
            <?php }?>
            <?php  foreach($hs_city as $h_city){?>
                <span class="h_r_city"><?php echo $h_city['city']?></span>
            <?php }?>
            <?php  foreach($hs_des as $h_des){?>
                <span class="h_r_des"><?php echo $h_des['house_describe']?></span>
            <?php }?>
        </div>
        </form>

    </div>
</div>
<div id="foot">
    <div id="foot-wrapper">
        <div id="f_logo"></div>
        <div id="f_biao">
            <ul>
                <li><a href="">首页</a></li>
                <li><a href="">房源中心</a></li>
                <li><a href="">个人中心</a></li>
                <li><a href="">关于悦居</a></li>
            </ul>
        </div>
        <div id="f_ma"></div>
    </div>
</div>



<script src="assets/js/house_center.js"></script>
</body>
</html>