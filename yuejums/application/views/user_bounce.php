
<style>
    .form-update{
        max-width: 380px;
        margin:0 120px;
        background: #fff;
        border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    /*.form-update .form-control {*/
       /*position: relative;*/
        /*font-size: 16px;*/
        /*height: auto;*/
        /*padding: 10px;*/
        /*-webkit-box-sizing: border-box;*/
        /*-moz-box-sizing: border-box;*/
        /*box-sizing: border-box;*/
    /*}*/

    .form-update .form-control:focus {
        z-index: 2;
    }

    .form-update input[type="text"], .form-update input[type="password"] {
        margin-bottom: 15px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        border: 1px solid #eaeaec;
        background: #eaeaec;
        box-shadow: none;
        font-size: 12px;
    }

    .form-update .btn-update {
        background: #6bc5a4;
        color: #fff;
        text-transform: uppercase;
        font-weight: normal;
        font-family: 'Open Sans', sans-serif;
        margin: 20px 0 5px;
        padding: 5px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        font-size: 30px;
    }


    .form-update .btn-update:hover {
        background: #688ac2;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .login-wrap {
        padding: 20px;
        position: relative;
    }

</style>
<div class="container">


        <form class="form-update" action="user/do_update" method="post">
            <div class="login-wrap">
            <!-- <input type="hidden" name="hid" value=""> -->
              <!--   用户名：<input type="text" class="form-control" placeholder="User Name" autofocus name="username" value=""> -->
                <!-- 密&nbsp;码：<input type="password" class="form-control" placeholder="Password" name="pasword">
                邮&nbsp;箱：<input type="text" class="form-control" placeholder="Email" name="email">
                电&nbsp;话：<input type="text" class="form-control" placeholder="Tel" name="tel">
                性&nbsp;别：<input type="text" class="form-control" placeholder="Sex" name="sex">
                出生年：<input type="text" class="form-control" placeholder="Birth-year" name="birth-year" >
                出生月：<input type="text" class="form-control" placeholder="Birth-month" name="birth-month">
                出生日：<input type="text" class="form-control" placeholder="Birth-day" name="birth-day"> -->


<!-- 
                <button class="btn btn-lg btn-update btn-block" type="submit">
                    <i class="fa fa-check"></i>
                </button> -->
</div>



</form>

</div>  