<?php 
    $keyword=$this->input->get('keyword');
    $cate_id=$this->uri->segment(3);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <base href="<?php echo site_url();?>">

    <link rel="shortcut icon" href="#" type="image/png">

    <title>UserControl</title>

    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />


    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/right-dialog/jquery-right-dialog-1.1.css">
    <link rel="stylesheet" type="text/css" href="css/user_bounce.css">
</head>
<body class="sticky-header">
<section>
    <?php include "common.php"?>
    <!-- main content start-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                用户管理
            </h3>
            <!-- <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Table</a>
                </li>
                <li class="active"> Editable Table </li>
            </ul> -->
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            &nbsp; &nbsp; &nbsp;
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <button id="pdel" class="btn btn-primary">
                                    批量删除 &nbsp;<i class="fa fa-trash-o"></i>
                                    </button>
                                </div>
                                <div class="pull-right">
                                    <form action="user/userall/<?php echo $cate_id;?>" method="get">
                                            <input type="text" name="keyword" class="search-control" placeholder="按用户名搜索...." value="<?php echo $keyword;?>">
                                            <input type="submit" class="seach-btn" value="搜索" id="del">
                                            
                                    </form>
                                </div>
                            </div>
                            </div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>头像</th>
                                    <th>用户名</th>
                                    <th>真实姓名</th>
                                    <th>电话</th>
                                    <th>邮箱</th>
                                    <th>修改</th>
                                    <th>删除</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach($categories as $category){
                                    ?>
                                    <tr class="">
                                        <td><input type="checkbox" name="checkbox" class="input1" value="<?php echo $category->user_id;?>"></td>
                                        <td><img src="<?php echo $category->img;?>"></td>
                                        <td><?php echo $category->username;?></td>
                                        <td><?php echo $category->rel_name;?></td>
                                        <td><?php echo $category->tel;?></td>
                                        <td><?php echo $category->email;?></td>
                                        <td><a class="edit" id="edit" contentId="<?php echo $category->user_id;?>">Edit</a></td>
                                        <td><a class="delete" href="user/del/<?php echo $category->user_id?>">Delete</a></td>
                                    </tr>



                                    <?php
                                }

                                ?>
                                </tbody>
                            </table>

                            <!--分页  开始        -->
                               <!-- 存在问题每个界面有的时候追加的比较慢好像是缓存的问题 -->
                               <div class="partpage">
                                    <ul>
                                         <?php echo $this->pagination->create_links();?>
                                    </ul>
                               </div>
                            <!--分页 结束        -->
                        </div>

             
</section>
</div>
</div>
</div>
<!--body wrapper end-->

<!-- main content end-->
</section>

<script src="js/jquery-1.10.2.min.js"></script>
<!--data table-->
<script type="text/javascript" src="js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

<script type="text/javascript" src="js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


<!--script for editable table-->
<script src="js/editable-table.js"></script>
<script type="text/javascript" src="js/right-dialog/jquery-right-dialog-1.1.js"></script>
<script src="js/user_edit.js"></script>

<!-- END JAVASCRIPTS -->
<script>
  
</script>

</body>
</html>