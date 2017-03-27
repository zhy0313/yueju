
<!---搜索结果页面   柳昊妍--->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
</head>
<body>
<?php include 'head.php'?>
<script src="assets/js/header.js"></script>
<div id="search-container">
    <div class="wrapper">
        <?php foreach($res as $v){?>
            <div class="house-detail">
                <img src="<?php echo $v->img_src;?>">
                <span><?php echo $v->title;?></span>
                <span><?php echo $v->street;?></span>
                <p><?php echo $v->house_describe;?></p>
            </div>
        <?php }?>
        
    </div>
</div>



<script type="text/javascript">
    /************************header固定顶部***********************/
    window.onscroll = function(){
        var iScrollTop = document.documentElement.scrollTop ||
            document.body.scrollTop;
        if(iScrollTop >= 50){
            var oTitle=document.getElementById('navContainer');
            oTitle.style.position="fixed"
            oTitle.style.left=0;
            oTitle.style.top=0;
        }
        else{
            var oTitle=document.getElementById('navContainer');
            oTitle.style.position="static";
        }
    }
</script>
</body>
</html>