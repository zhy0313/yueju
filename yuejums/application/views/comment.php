<!DOCTYPE html>
<html lang="en">
<?php
    $title=$this->input->get('title');
    $name=$this->input->get('username');
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <base href="<?php echo site_url();?>">
    <link rel="shortcut icon" href="#" type="image/png">
    <title>comment</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link href="css/comment_style.css" rel="stylesheet">
    <link rel="stylesheet" href="js/right-dialog/jquery-right-dialog-1.1.css">
</head>
<body class="sticky-header">
<section>
    <!-- left side start-->
    <?php include 'common.php';?>
    <!-- main content start-->
            <div class="mail-box">
                <section class="mail-box-info">
                    <header class="header">
                        <div class="user-search pull-right">
                            <form method="get" action="comment/paging">
                                <input type="text" name="username" placeholder="用户名称" value="<?php echo $name;?>" id="nameput">
                                <input type="text" name="title" class="search-control" id="houseput" placeholder="房源名称" value="<?php echo $title;?>">
                                <input type="submit" value="查询" class="search-button" id="housebtn">
                            </form>
                        </div>
                        <div class="btn-toolbar">
                            <div class="btn-group select">
                                <button  class="btn btn-primary btn-sm " id="pdel">
                                    <span style="width: 70px;">批量删除</span>
                                    <i class="fa fa-trash-o"></i>
                                    <!--                                    <span class="caret"></span>-->
                                </button>
                            </div>
                        </div>
                    </header>
                    <section class="mail-list">
                        <ul class="list-group " id="addli">
                            <?php
                            foreach ($pages as $page ) {
                                ?>
                                <li class="list-group-item" >
                                     <span class="pull-left chk" >
                                          <input class="input1" type = "checkbox"  value="<?php echo $page->comment_id;?>" />
                                     </span >
                                    <a class="thumb pull-left " href = "javascript:;" ><img src = "<?php echo $page->img;?>" > </a >
                                    <small class="pull-right text-muted" ></small >
                                    <a href = "javascript:;" class="dialog" contentId="<?php echo $page->comment_id;?>" >
                                        <strong > <?php echo $page->username;?></strong >
                                        <span class="score"><strong>score:</strong><?php echo $page->score;?></span>
                                        <span class="house-title"><strong>house:</strong><?php echo $page->title;?></span>
                                        <span class="score"><?php echo $page->conmment_date;?></span>
                                        <br/>
                                    <span class="content_com" > <?php echo $page->content?> </span >
                                    <br/>
                                        <div id="img-show">
                                        <img class="img-size" src="<?php echo $page->img_first_thumb;?>">
                                        <img class="img-size" src="<?php echo $page->img_second_thumb;?>">
                                        <img class="img-size" src="<?php echo $page->img_third_thumb;?>">
                                        </div>
                                    </a>
                                    <a  id="delete_com" href="comment/delete/<?php echo $page->comment_id;?>">删除</a>
                                </li >
                                <?php
                            }
                            ?>
                        </ul>
                    </section>
                    <span id="number">共<?php echo count($pages);?>条记录</span>
                    <!--                    <span id="page-num">-->
                    <div class="cancel_page">
                        <ul>
                            <?php echo $this->pagination->create_links();?>
                        </ul>
                    </div>
                </section>
            </div>
    <!-- main content end-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
 <script src="js/jquery-1.10.2.min.js"></script>
 <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
 <script src="js/jquery-migrate-1.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/modernizr.min.js"></script>
 <script src="js/jquery.nicescroll.js"></script>
 <script src="js/scripts.js"></script>
 <script src="js/right-dialog/jquery-right-dialog-1.1.js"></script>
 <script src="js/comment_page.js"></script>
<!--common scripts for all pages-->
</body>
</html>

