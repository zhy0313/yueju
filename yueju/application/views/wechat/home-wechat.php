<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/wechat_home.css">
    <script src="assets/js/rem.js"></script>
<!--    <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css">-->

</head>
<body>

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
    </div>
    <div id="search">
        <div id="search-container">
            <form action="home/search_house" method="post">
                <div class="address">
                    <div id="select">
                        <span id="Sstreet">南岗区</span>
                                <span class="caret">
                                </span>
                        <ul>
                            <?php  foreach($house_all as $v2){?>
                                <li><?php echo $v2->street;?></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="Sinput1" id="Sinput1">
                <div class="search-icon">
                    <input type="text" name="search" placeholder="搜索房源..." class="search-ipt" >
                    <input type="submit" value="" id="sou" >
                </div>
            </form>
        </div>

    </div>
    </div>
    <div id="recommended-housing">
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
                        <h6><?php echo $recommend_house->house_describe;?> </h6>
                </div>
            <?php }?>
        </div>
    </div>
    <div id="security">
        <div class="we-wrapper">
            <div class="security-title">
                <h3>悦居便利你的生活</h3>
                <h5>便利你的家居生活</h5>
            </div>
            <div class="security-content">
                <div class="security1">
                    <div class="security1-pic">
                        <img src="assets/img/home/security1.png">
                    </div>
                    <span>安全交易</span>
                </div>
                <div class="security2">
                    <div class="security2-pic">
                        <img src="assets/img/home/security2.png">
                    </div>
                    <span>国企认证</span>
                </div>
                <div class="security3">
                    <div class="security3-pic">
                        <img src="assets/img/home/security3.png">
                    </div>
                    <span>其他认证</span>
                </div>
                <div class="security4">
                    <div class="security4-pic">
                        <img src="assets/img/home/security4.png">
                    </div>
                    <span>生活便捷</span>
                </div>
                <div class="security5">
                    <div class="security5-pic">
                        <img src="assets/img/home/security5.png">
                    </div>
                    <span>其他什么</span>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.1.1.min.js"></script>
<!--    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>-->
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
        var Sinput1 = document.getElementById('Sinput1');
        Sinput1.value = Sstreet.innerHTML;//获取城市和街道的搜素框    PS：已经隐藏
        var oSelect = document.getElementById('select');
        var oli = oSelect.getElementsByTagName('li');
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
                Sinput1.value = Sstreet.innerHTML;//获取城市和街道的搜素框    PS：已经隐藏
            }
        }
        /*****************jquery mobile触摸事件*********************/
//        var $imgs=$(oImgs);
//        $imgs.on("swipeleft",function(){
//            alert("You swiped left!");
//        });
        

        /*****************jquery mobile触摸事件*********************/
   </script>
</body>
</html>