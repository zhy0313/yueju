<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/wechat/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="assets/css/wechat/wx_housecenter.css">
    <script src="assets/js/rem.js"></script>
    <title>房源中心</title>
    <style>

    </style>
</head>
<body>
<div id="all">
    <div id="header"><a id="h_shou">房源中心</a></div><!--   标题栏 -->
    <div id="sou">
        <div id="query"><!--查询框部分!-->
            <div id="query-body">
                <div id="select2"><span id="Sstreet">城市</span>
                    <ul>
                        <?php  foreach($house_all as $v2){?>
                            <li><?php echo $v2->city  ?></li>
                        <?php }?>
                    </ul>
                </div>
                <form action="wx_housecenter/find_house" data-role='none'method="post"data-ajax="false">
                    <input type="hidden" name="Sinput1" id="Sinput1" >
                    <input type="hidden" name="Sinput2" id="Sinput2">
                    <input data-role='none' type="hidden" name="price_a" id="price_a" >
                    <input type="hidden" name="price_b" id="price_b">
                    <input type="hidden" name="p_house_type" id="p_house_type" >
                    <input type="hidden" name="p_facility_type" id="p_facility_typ">
                    <input type="hidden" name="all_local" id="all_local">
                    <input data-role='none' type="text" name="other" value="&nbsp&nbsp添加搜素内容..." id="select-input" onfocus="javascript:if(this.value=='&nbsp&nbsp添加搜素内容...')this.value='';"onblur="javascript:if(this.value=='')this.value='&nbsp&nbsp添加搜素内容...';">
                    <div id="sub" ><input data-role='none' type="submit"  value="13"  id="s_sub"></div>
                    <img data-role='none' src="assets/img/s_sub.png" alt="" id="sub_img">
                    </form>
            </div>
        </div>
    </div>

</div>
<div id="h_select">
    <select class="h_s" id="hs1">
        <option value ="">街道</option>
        <?php  foreach($house_all as $v2){?>
            <option value =<?php echo $v2->street  ?>><?php echo $v2->street  ?></option>
        <?php }?>
    </select>
    <select class="h_s" id="hs2">
        <option id="price_1" class="price_same" value="">价格</option>
        <option id="price_2" class="price_same" value="1000以下">1000以下</option>
        <option id="price_3" class="price_same" value="1000-1500">1000-1500</option>
        <option id="price_4" class="price_same" value="1500-2000">1500-2000</option>
        <option id="price_5" class="price_same" value="2000以上">2000以上</option>
    </select>
    <select class="h_s" id="hs3">
        <option value ="">户型</option>
        <?php foreach($house_type as $t){?>
            <option value =<?php echo $t->name?> ><?php echo $t->name?> </option>
        <?php }?>
    </select>
    <select class="h_s" id="hs4">
        <option value ="">设备</option>
        <?php foreach($facility as $f){?>
            <option value =<?php echo $f->name?>><?php echo $f->name?></option>
        <?php }?>
        <option value ="volvo">设备</option>
        <option value ="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
</div>

<div id="all_information">
    <?php $num=$this_num;$n_num1=0?><!--     $num用于分页计数-->
    <?php  $h_r_num=0; foreach($hs_img as $ai){ $h_r_num++?><?php }?>
    <?php  foreach($hs_img as $ai) {
        if ($num == $this_num + $one_num) {
            break;
        }
        ?>
        <?php
        if ($n_num1 >= $num && $n_num1 < $this_num + $one_num) {
            ?>

            <div class="pic_d">
                <img class="pic_i" src=<?php echo $ai->img_src ?> alt="">
            </div>
            <?php
            $num++;
        }
        $n_num1++;
    }
    ?>
    <?php $num=$this_num;$n_num1=0?><!--     $num用于分页计数-->
    <?php  foreach($hs_title as $h_title) {
        if ($num == $this_num + $one_num) {
            break;
        }
        ?>
        <?php
        if ($n_num1 >= $num && $n_num1 < $this_num + $one_num) {
            ?>
            <span class="h_r_title"><?php echo $h_title['title']?></span>
            <?php
            $num++;
        }
        $n_num1++;
    }
    ?>
    <?php $num=$this_num;$n_num1=0?><!--     $num用于分页计数-->
    <?php  foreach($hs_city as $h_city) {
        if ($num == $this_num + $one_num) {
            break;
        }
        ?>
        <?php
        if ($n_num1 >= $num && $n_num1 < $this_num + $one_num) {
            ?>
            <span class="h_r_city"><?php echo $h_city['city']?></span>
            <?php
            $num++;
        }
        $n_num1++;
    }
    ?>
    <?php $num=$this_num;$n_num1=0?><!--     $num用于分页计数-->
    <?php  foreach($hs_des as $h_des) {
        if ($num == $this_num + $one_num) {
            break;
        }
        ?>
        <?php
        if ($n_num1 >= $num && $n_num1 < $this_num + $one_num) {
            ?>
            <span class="h_r_des"><?php echo $h_des['house_describe']?></span>
            <?php
            $num++;
        }
        $n_num1++;
    }
    ?>
</div>
<script src="assets/js/wechat/jquery-1.12.4.min.js"></script>
<script src="assets/js/wechat/jquery.mobile-1.4.5.min.js"></script>
<script src="assets/js/wechat/wx_house_center.js"></script>
</body>
</html>