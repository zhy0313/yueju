<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/5
 * Time: 14:41
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url(); ?>">
    <title>我的收藏</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/left-sidebar.css">
    <link rel="stylesheet" href="assets/css/collect.css">
</head>
<body>
    <?php include "head.php";?>
    <div id="collect">
        <div class="wrapper">
            <?php include "left-sidebar.php"?>
            <div id="collect-information">
                <div id="inform">
                    <?php for($i=0;$i<count($rs_imgs);$i++){?>
                        <div class="informaton">
                            <a href="room/index/<?php echo $rs[$i]->house_id;?>">
                                <img src="<?php echo $rs_imgs[$i]->img_src;?>" alt="">
                                <!--                            <img src=""  alt="">-->
                                <div class="house">
                                    <h4><?php echo $rs[$i]->title;?></h4>
                                    <p>地址：<?php echo $rs[$i]->city.''.$rs[$i]->street.''.$rs[$i]->road.'';?></p>
                                    <p><?php echo $rs_num[$i];?>条评论</p>
                                    <p class="color">收藏时间：<?php echo $rs[$i]->collect_time;?></p>
                                </div>
                            </a>
                            <div>
                                <a href="javascript:;" class="cancela" collect-id = '<?php echo $rs[$i]->collect_id;?>'><button class="cancel">取消收藏</button></a>
                            </div>
                        </div>
                    <?php }?>

                </div>
                <div class="cancel_page">
                    <ul>
                        <?php echo $this->pagination->create_links();?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script>
        $(function(){
            var $sidebar = $("#sidebar"),
                $sidebarLi = $("li",$sidebar),
                $sidebarA = $('a',$sidebarLi);
            $sidebarLi.removeClass('left-sidebar-active');
            $sidebarLi.eq(1).addClass('left-sidebar-active');
            $sidebarA.removeClass('color');
            $sidebarA.eq(1).addClass('color');
            var $cancel = $(".cancel"),
                $collectInformation=$("#collect-information #inform");
                $cancelA = $(".cancela");
            $cancel.on('click',function(){
                var $id=$cancelA.eq($(this).index()).prop('collect-id');
                $.get('admin/collect_cancel',{'id':$id},function(res){
                    $('.informaton').remove();
                    $('.cancel_page').remove();
                    var page = '<div class="cancel_page"><ul><?php echo $this->pagination->create_links();?></ul></div>';
                    for(i=0;i<res.rs.length;i++){
                        var infor = '<div class="informaton"></div>',
                            inforA = "<a href='room/index/"+res.rs[i].house_id+"' class='informatona'></a>",
                            home = "<div class='house'></div>",
                            divButton = '<div><a href="javascript:;" class="cancela" collect-id = "'+res.rs[i].collect_id+'"><button class="cancel">取消收藏</button></a> </div>',
                            inforImg = '<img src="'+res.rs_imgs[i].img_src+'" alt="">',
                            hh = '<h4>'+res.rs[i].title+'</h4>',
                            houseP = '<p>地址：'+res.rs[i].city+''+res.rs[i].street+''+res.rs[i].road+'</p><p>'+res.rs_num[i]+'条评论</p><p class="color">收藏时间：'+res.rs[i].collect_time+'</p>';
                        $collectInformation.append(infor);
                        $('.informaton').eq(i).append(inforA).append(divButton);
                        var $inforA=$('.informatona');
                        console.log($inforA);
                        $inforA.eq(i).append(inforImg).append(home);
                        var  $house=$('.house');
                        $house.eq(i).append(hh).append(houseP);
                    }
                    $collectInformation.append(page);
                },'json');
            });
        });
    </script>
</body>
</html>
