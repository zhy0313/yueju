<!-- 首页  柳昊妍-->
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
<?php include "head.php"?>
    <div id="banner">
        <div id="container">
            <div id="imgs">
                <img src="assets/img/home/banner1.png" alt="" class="selected">
                <img src="assets/img/home/banner2.jpg" alt="">
                <img src="assets/img/home/banner3.jpg" alt="">
                <img src="assets/img/home/banner4.jpg" alt="">
            </div>
            <ul id="tab">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
            <div id="arrows">
                <span id="prev">&lt;</span>
                <span id="next">&gt;</span>
            </div>
        </div>
        <div class="search">
            <form action="home/search_house" method="post">
                <div class="address">
                        <div id="select">
                            <span id="Sstreet">南岗区</span>
                            <span class="caret">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            <ul>
                                <?php  foreach($house_all as $v2){?>
                                    <li><?php echo $v2->street;?></li>
                                <?php }?>
                            </ul>
                        </div>


            </div>
<!--            <form action="home/search_house" method="post">-->
                <input type="hidden" name="Sinput2" id="Sinput2">
                <input type="text" name="title" placeholder="输入想要搜索的结果..." class="search-ipt" >
                <div class="search-info">
                    <input type="submit" value="搜索" id="sou" >
                    <img src="assets/img/home/home-search.png" alt="">
                </div>
            </form>


        </div>
    </div>
    <div id="recommended-housing">
        <div class="wrapper">
            <div class="housing-title">
                <h3>推荐房源</h3>
                <h5>选择一个您合适的短租生活</h5>
            </div>
            <div class="house-detail">
                <?php foreach($recommend_houses as $recommend_house){?>
                    <div class="house-detail1">
                        <img src="<?php echo $recommend_house->img_src;?>">
                        <h4><?php echo $recommend_house->title;?></h4>
                        <h5><?php echo $recommend_house->street;?></h5>
                        <h6><?php echo $recommend_house->house_describe;?></h6>
                    </div>
                <?php }?>
            </div>
        </div>
   </div>
    <div id="security">
        <div class="wrapper">
            <div class="security-title">
                <h3>悦居便利你的生活</h3>
                <h5>便利你的家居生活</h5>
            </div>
            <div class="security-content">
                <div class="security1">
                    <div class="security1-pic"></div>
                    <span>安全交易</span>
                </div>
                <div class="security-trade">
                    <h3>线上交易更安全</h3>
                    <h5>我们打造了安全可靠又灵活方便的第三方担保支付系统，而且支持多种付款和收款方式。房客不是直接支付给房东，而是由悦居代为担保，入住完成后才支付给房东。</h5>
                    <h3>保护房客的资金安全</h3>
                    <h5>1、虚假房源可获赔：如果入住时发现房间和网上描述不符，投诉客服如情况属实，原定金全部退还，并赔偿房客首日房款。</h5>
                    <h5>2、无法入住有支援：如果入住时发现房东没有预留房间，投诉客服如情况属实，原定金全部退还，并赔偿房客首日房款；如果入住时发现联系不上房东，客服会帮助房客预定同等短租房或酒店，并补偿差价，保障当天正常入住。</h5>
                    <h5>3、乱收费用赔双倍：如果房东抬高房价，或者收取额外未约定的费用，向客服投诉后会保障给房客双倍赔偿。</h5>
                    <h5>4、取消订单不担心：如房客计划有变需取消入住，或提前退房，在我们第三方担保的机制下，保证房客在合理约定的违约金之外，顺利拿回剩余定金。</h5>
                </div>
                <div class="security2">
                    <div class="security2-pic"></div>
                    <span>国企认证</span>
                </div>
                <div class="security3">
                    <div class="security3-pic"></div>
                    <span>其他认证</span>
                </div>
                <div class="security4">
                    <div class="security4-pic"></div>
                    <span>生活便捷</span>
                </div>
                <div class="security5">
                    <div class="security5-pic"></div>
                    <span>其他什么</span>
                </div>
            </div>
        </div>
    </div>
    <div id="media">
        <div class="wrapper">
            <div class="media-content">
                <div class="introduce-media">
                    <video width="650" height="404" border-radius="5px" controls poster="assets/img/home/video.png">
                        <!-- source的src是加视频连接，poster是覆盖视频上的图片 -->
                        <source src="assets/img/home/01.mp4">
                        <object>实现flash插件的播放，如果屏蔽IE9以下则不需要</object>
                    </video>
                </div>
                <div class="introduce-pic">
                    <div class="introduce-pic1">
                        <img src="assets/img/home/introduce1.png">
                    </div>
                    <div class="introduce-pic2">
                        <img src="assets/img/home/introduce2.png">
                    </div>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/header.js"></script>
<script type="text/javascript" src="assets/js/home.js"></script>
<script type="text/javascript" >
    var oImgs=document.getElementById('imgs');
    var oTab=document.getElementById('tab');
    var aLi = oTab.getElementsByTagName('li');
    var aImg=oImgs.getElementsByTagName('img');
    var oPrev=document.getElementById('prev');
    var oNext=document.getElementById('next');
    var oContainer=document.getElementById('container');
    var nowIdx=0;
    function changeImg(idx){
        nowIdx=idx;
        for(var j=0;j<aImg.length;j++){
            aLi[j].style.background='#39c6a7';
            aImg[j].style.display='none';
        }
        aLi[nowIdx].style.background=' #000';
        aImg[nowIdx].style.display='block';
    }
    for(var i=0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onmouseover=function(){
           changeImg(this.index);
        };
    };
    oPrev.onclick=oNext.onclick=function(){
        if(this==oPrev){
            nowIdx--;
            if(nowIdx<0){
                nowIdx=aLi.length-1;
            }
        }
        else{
            nowIdx++;
            if(nowIdx>aLi.length-1){
                nowIdx=0;
            }
        }
        changeImg(nowIdx);
    };
    var timer=setInterval(function(){
        oNext.onclick();
    },2000);
    oContainer.onmouseover=function(){
        clearInterval(timer);
    };
    oContainer.onmouseout=function(){
        timer=setInterval(function(){
            oNext.onclick();
        },2000);
    };

    /********搜索*********/
    var Sstreet = document.getElementById('Sstreet');
    var Sinput2 = document.getElementById('Sinput2');
    Sinput2.value = Sstreet.innerHTML;//获取城市和街道的搜素框    PS：已经隐藏
    var oSelect = document.getElementById('select');
    var oli = select.getElementsByTagName('li');
    var biao =0;
    var biao2 =0;
    oSelect.onclick =function(){
        if(biao2==0){
            for(var j = 0 ;j<oli.length;j++)
            {
                oli[j].style.display = 'block';
            }
            biao2 ++;
        }
        else{
            for(var j1 = 0 ;j1<oli.length;j1++)
            {
                oli[j1].style.display = 'none';
            }
            biao2=0;
        }

    };
    for(var num = 0 ;num<oli.length;num++){
        (function (){
            var p = num;
            oli[p].onmousemove=function(){
                this.style.background = "gray";
                //alert(p);
            }})();

        oli[num].onmouseout =function(){
            this.style.background = 'black';
        }
        oli[num].onclick=function(){
            Sstreet.innerHTML=this.innerHTML;
            for(var j2 = 0 ;j2<oli.length;j2++)
            {
                oli[j2].style.display = 'none';
            }
            Sinput2.value = Sstreet.innerHTML;//获取城市和街道的搜素框    PS：已经隐藏
        }
    }
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