<!------页面头部     柳昊妍 ---->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>header</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>
<div id="navContainer">
    <div id="nav">
        <div class="wrapper">
            <div class="nav-logo">
                LOGO.COM
            </div>
            <ul class="nav-menu">
                <li><a href="home/first_page">首页</a></li>
                <li><a href="">房源中心</a></li>
                <li><a href="">个人中心</a></li>
                <li><a href="">关于悦居</a></li>
                <li><a href="">登录/注册</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login">
        <div class="login-left">
            <span>登陆账号</span>
            <div class="login-left-button1"><span>帐号登陆</span></div>
            <div class="login-left-button2"><span>短信登录</span></div>
            <div class="login-left-center">
                <input class="input1" type="text" name="" value="手机号码">
                <input class="input2" type="text" name="" value="手机验证码">
                <input class="input3" type="text" name="" value="验证码">
            </div>
            <div class="yanzhengma"><img src="img/yanzhengma.png" alt="无法显示图片"></div>
            <img class="imgzu" src="img/zu1.png" alt="无法显示图片">
            <div class="login-left-bottom">立即登录</div>
        </div>
        <div class="login-center"></div>
        <div class="login-right">
            <div class="login-right-top"><span>合作网站帐号登录</span></div>
            <div class="login-right-qq"><span>QQ帐号登录</span></div>
            <div class="login-right-weixin"><span>微信账号登录</span></div>
            <div class="login-right-bottom"><span>没有帐号？马上注册》</span></div>
        </div>
    </div>
<script type="text/javascript">
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