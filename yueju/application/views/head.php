<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/5
 * Time: 13:15
 */?>
<style>
    header {
        height: 60px;
        background: #fff;
        border-bottom:1px solid #e1e1e1;
        z-index:1000;
        width: 100%;
    }

    header .wrapper{
        width:1170px;
        margin: 0 auto;
        position: relative;
    }
    .LOGO_COM {
        width:100px;
        height:60px;
        float: left;
    }
    header #login-mune{
        float: right;
    }
    header #login-mune li a{
        text-decoration: none;
        color: #2b4056;
        font-size:14px;
        display: inline-block;
        height: 60px;
        line-height:60px;
    }
    header #login-mune li{
        float: left;
        margin: 0 0 0 50px;
        /*width: 150px;*/
    }
    #login{
        display: none;
        width: 100%;
        height:100%;
        z-index: 1000;
        display: none;
    }
    #do_login{
        position: fixed;
        top:150px;
        z-index: 1000;
        left:50%;
        width: 860px;
        height: 540px;
        background: #fff;
        border-radius: 15px;
        margin-left:-430px;

    }
    .user_login{
        padding-top:48px;
        padding-left:64px;
        padding-right:47px;
        margin-bottom:49px;
        width: 414px;
        float: left;
    }
    .user_login h3{
        font-size:24px;
        color: #2d3b4a;
        text-align: center;
        padding-bottom:25px;
    }
    #select-login{

        clear: both;
        height:52px;
    }
    #select-login span{
        display: inline-block;
        width: 196px;
        height: 48px;
        line-height:48px;
        text-align: center;
        float: right;
        border:1px solid #bad5cd;
        color: #8f9ba7;
        font-size:16px;
        background: #fff;
        border-radius: 8px;
        cursor: pointer;
    }
    #select-login span:first-child{
        margin-right:15px;
        float: left;
    }
    #select-login span.select{
        color: #28a88c;
        border:1px solid #30b295;
    }
    #select-login span:hover{
        color: #28a88c;
        border:1px solid #30b295;
    }
    .user_login .user-form li{
        background: url("assets/img/user.png") left no-repeat;
        -webkit-background-size:30px 30px;
        background-size:30px 30px;
        height:50px;
        margin-top:20px;
        border-bottom:1px solid #e1e1e1;
    }
    .user_login .user-form li:nth-child(2){
        background-image: url("assets/img/pass.png");
    }
    .user_login .select-user li input{
        width: 380px;
        float: right;
        height:50px;
        outline:none;
        border:none;
    }
    .user_login .select-user ul{
        margin-bottom:54px;
    }
    .btn.btn-default{
        width:100%;
        border: 1px solid #30b295;
        background: #39c6a7;
        color: #fff;
        font-size:24px;
        height: 60px;
    }
    .user_login .select-user{
        display: none;
        position: absolute;
    }
    .user_login .select-user:first-child{
        display: block;
    }
    .user_login div{
        position: relative;
    }
    .select-user{
        width: 100%;
    }
    #login-mask{
        display: none;
        width:100%;
        height: 100%;
        position: fixed;
        top:0;
        left:0;
        background: #555;
        opacity: 0.7;
        z-index: 999;
    }
    .login-right{
        width: 200px;
        margin-top:60px;
        padding-left:50px;
        padding-right:47px;
        margin-bottom:49px;
        float: right;
        border-left:1px solid #e1e1e1;
        height: 440px;
    }
    .login-right h3{
        font-size:24px;
        color: #2d3b4a;
        text-align: center;
        padding-bottom:55px;
    }
    .login-right span{
        font-size:18px;
        color: #8b959f;
    }
    .login-right div{
        margin-bottom:56px;
        height:65px;
    }
    .login-right div img{
        border-radius: 50%;
        margin-right:20px;
        float: left;
    }
    .login-right div span{
        float: right;
        height:65px;
        line-height:65px;
    }
    #login #login-close{
        height:32px;
        width:32px;
        border-radius: 50%;
        position: absolute;
        right:29px;
        top:29px;
        cursor: pointer;
    }

    /*.go_login a{*/
        /*display: inline-block;*/
        /*width:100px;*/
        /*border-right:1px solid #e1e1e1;*/
    /*}*/
    #user-img{
        height:30px;
        border-radius: 50%;
        width:30px;
        margin-top:15px;
        margin-right:10px;
    }
    #username{
        float: right;
    }
    #login-down{
        display: none;
        width: 150px;
        height:240px;
        position: absolute;
        right:0;
        top:60px;
        z-index: 1000;
        margin:0;
        background: #fff;
        border:1px solid #e1e1e1;
        border-bottom:none;
    }
    #login-down li{
        width:150px;
        background: #fff;
        height: 60px;
        margin:0;
        border-bottom:1px solid #e1e1e1;
    }
    header #login-down li a{
        text-decoration: none;
        color: #2b4056;
        width:150px;
        text-align: center;
        font-size:14px;
        display: inline-block;
        height: 60px;
        line-height:60px;
    }
    .down-mune-img{
        float: right;
        margin-top:25px;
        margin-left:10px;
    }
    .exit{
        background: #fff;
        border: none;
        color: #2b4056;
        width:150px;
        text-align: center;
        font-size:14px;
        height: 60px;
        line-height:60px;
        cursor: pointer;
    }
    footer{
        position: absolute;
        bottom:0;
        background: #152636;
        height: 170px;
        margin-top: 0px;
    }
</style>
<header id="header-login">
    <div class="wrapper">
        <img class="LOGO_COM" src="assets/img/logo.png">
        <div id="nav">
            <ul id="login-mune">
                <li><a href="home/first_page">首页</a></li>
                <li><a href="house_zhong/index">房源中心</a></li>
                <li><?php if($this->session->user){
                        echo '<a href="admin/order">个人中心</a></li>';
                    }else{
                        echo '<a href="javascript:;" id="login_show" class="show-llogin">个人中心</a></li>';
                    }?></li>
                <li><a href="admin/about">关于悦居</a></li>
                <?php if($this->session->user) {
                    echo '<li class="go_login"><a href="javascript:;" id="open-down"><img id="user-img" src="'.$this->session->user->img.'" alt=""><img class="down-mune-img" width="10" height="10" src = "assets/img/down.png"><span id="username">'.$this->session->user->username.'</span></a></li>';
                }else{
                    echo '<li class="go_login"><a id="login_show" class="show-login show-llogin"  href="javascript:;">登录</a> / <a  href="javascript:;">注册</a></li>';
                }?>


            </ul>
        </div>
        <form action="admin/exit_user">
            <input type="hidden" value="<?php echo $this->uri->uri_string();?>">
        <ul id="login-down"><li><a href="admin/order">我的订单</a></li><li><a href="admin/coollect">我的收藏</a></li><li><a href="">个人资料</a></li><li><input type="submit" class="exit" value="退出">退出</li></ul>
        </form>

    </div>
</header>
<div id="login-mask"></div>
<div id="login">
    <div id="do_login" >
        <div class="user_login">
            <h3>登录账号</h3>
            <div id="select-login"><span class="select">账号登录</span><span>短信登录</span></div>
            <div>
                <form role="form" class="select-user user-form" action="admin/do_login" method="post">
                    <ul>
                        <li><input type="text" class="form-control" id="exampleInputUser1" name="username" placeholder="用户名"></li>
                        <li><input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="密码"></li>
                        <li class="captcha"><input type="text" class="form-control" id="exampleInputPassword1" name="" placeholder="验证码"></li>
                        <input type="hidden" name="loginuri" value="<?php echo $this->uri->uri_string();?>">
                    </ul>
                    <button type="submit" class="btn btn-default">登&nbsp;&nbsp;录</button>
                </form>
                <form role="form" class="select-user" action="do_login" method="post">
                    <ul>
                        <li><input type="text" class="form-control" id="exampleInputUser1" name="usernaame" placeholder="用户名"></li>
                        <li><input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="密码"></li>
                    </ul>
                    <button type="submit" class="btn btn-default">登&nbsp;&nbsp;录</button>
                </form>
            </div>

        </div>
        <div class="login-right">
            <h3>合作网站帐号登录</h3>
            <div class="login-right-qq"><img src="assets/img/qq-img.png" width="65" height="65" alt=""><span>QQ帐号登录</span></div>
            <div class="login-right-weixin"><img src="assets/img/weixin-img.png" width="65" height="65" alt=""><span>微信账号登录</span></div>
            <div class="login-right-bottom"><a href=""><span>没有帐号？马上注册》</span></a></div>
        </div>
        <span id="login-close"><img src="assets/img/close.png" alt=""></span>
    </div>
</div>
<footer>
        <div class="footer-logo">
            <span>LOGO</span>
        </div>
        <div class="footer-pic">

        </div>
        <ul class="footer-menu">
            <li><a href="home/first_page">首页</a></li>
            <li><a href="house_zhong/index">房源中心</a></li>
            <li><?php if($this->session->user){
                    echo '<a href="admin/order">个人中心</a></li>';
                }else{
                    echo '<a href="javascript:;" id="login_show">个人中心</a></li>';
                }?></li>
            <li><a href="admin/about">关于悦居</a></li>
        </ul>
        <div class="scan-code">
            <span>扫描此二维码</span>
            <div class="QR-code"></div>
        </div>
</footer>
