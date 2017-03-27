
<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/1
 * Time: 14:27
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <base href="<?php echo site_url(); ?>">

    <link rel="shortcut icon" href="#" type="image/png">

    <title>Profile</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/message.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">
<?php include "common.php" ?>
<!-- left side start-->


<!-- header section end-->

<!-- page heading start-->
<!--<div class="page-heading">-->
<!--Page Tittle goes here-->
<!--</div>-->
<!-- page heading end-->

<!--body wrapper start-->
<div class="wrapper">
    <div class="message">
        <section class="mail-list">
            <ul class="message-mune">

                <li>
                                      <span class="">
                                      <input type="checkbox" class="check-all"/>
                                          <strong>全选</strong>
                                      </span>
                </li>
                <li>
                    <a href="javascript:;" id="message-dele">删除</a>
                </li>
                <li>
                    <a href="javascript:;">添加</a>
                </li>
            </ul>
            <hr>
            <form action="message/del_some" method="post" id="del-some">
                <ul class="list-group ">
                    <?php
                    foreach ($blogs as $val){
                        ?>
                        <li class="list-group-item">
                                                        <span class="pull-left chk">
                                                            <input type="checkbox" name="box[]" />
                                                        </span>
                            <div class="sender">
                                <a class="thumb pull-left" href="#"> <img src="<?php echo $val->img; ?>"> <strong><?php echo $val->username; ?></strong></a>
                            </div>

                            <div class="message-del">
                                <a class="del-btn" href="message/del_message/<?php echo $val->message_id;?>" delid="<?php echo $val->message_id;?>"> 删除 </a>
                            </div>
                            <div class="message-con">
                                <p class="content"><?php echo $val->content; ?></p>
                                <p class="message-time"> <span>留言时间：<?php echo $val->addtime; ?></span></p>
                            </div>
                            <input type="hidden" class="message-hide" value="<?php echo $val->message_id; ?>">
                        </li>
                    <?php }?>
                </ul>
            </form>
            </ul>
            <div class="cancel_page">
                <ul>
                    <?php echo $this->pagination->create_links();?>
                </ul>
            </div>
        </section>
    </div>
</div>
<!--footer section start-->
<footer class="">
</footer>


</div>
</section>

<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--google map-->


<!--common scripts for all pages-->
<script src="js/message.js"></script>
<script>
</script>

</body>
</html>
