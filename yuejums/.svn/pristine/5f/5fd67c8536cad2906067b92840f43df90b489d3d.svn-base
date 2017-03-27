<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <base href="<?php echo site_url();?>">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>设施管理</title>

    <!--data table-->
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

<!--    <link href="css/style-responsive.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="js/right-dialog/jquery-right-dialog-1.1.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        .comment_selected{
            background-color: #65CEA7;
            color: #000000;
        }
        .cancel_page ul{
            list-style: none;
            float: right;

        }
        .cancel_page li{
            float: left;
            width: 50px;
            height: 35px;
            border: 1px solid #ccc;
            color: #65CEA7;
            line-height: 35px;
            text-align: center;
            margin-right: 3px;
        }
        .cancel_page li a{
            text-decoration: none;
            font-size: 16px;
            display: block;
            width: 50px;
            height: 35px;
        }
        .cancel_page li:hover{
            background: #65CEA7;
            color: #000;
        }
        .cancel_page li a:hover{
            color: #000;
        }
        .comment-search{
            border-radius: 2px;
        }
        .comment-lable{
            color: #1fb5ac;
            font-size: medium;
        }

    </style>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
   <?php include 'common.php'?>
            <!--notification menu end -->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            设施管理
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">
                                <div class="clearfix">
                                                        <div class="btn-group">
                                                            <button id="editable-sample_new" class="btn btn-primary">
                                    添加 <i class="fa fa-plus"></i>
                                                            </button>

                                                            <button style="margin-left: 10px;" id="message-dele" class="btn btn-primary">删除</button>
                                                        </div>


                                </div>
                                <!--                    <div style="margin-left: 684px;">-->
                                <!--                        <button id="sort">按收藏热度排序</button>-->
                                <!--                    </div>-->
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" class="check-all" /><strong>全选</strong>
                                        </span></th>
                                    <th>设施名称</th>
                                    <th>设施图片</th>
                                    <th>修改</th>
                                    <th>删除</th>
                                </tr>
                                </thead>
                                <form action="facility/del_some" method="post" id="del-some">
                                <tbody>
                                <?php foreach ($rs as $v){?>
                                    <tr class="ms">
                                        <td><input type="checkbox" name="del[] class='select_check"></td>
                                        <td><?php echo $v->name?></td>
                                        <td><img src="<?php echo $v->icon?>" alt=""></td>
                                        <td><a href="javascript:;" class="update" facility-id="<?php echo $v->facility_type_id;?>">修改</a></td>
                                        <td><a href="facility/del_facility/<?php echo $v->facility_type_id;?>">删除</a></td>
                                    </tr>
                                <?php }?>
                                </tbody></form>
                                <div class="cancel_page">
                                    <ul>
                                        <?php echo $this->pagination->create_links();?>
                                    </ul>
                                </div>
                            </table>

                            <!--                    <div class="row">-->
                            <!--                        <div class="col-lg-6">-->
                            <!--                            <div class="dataTables_info">共--><?php //echo count($house);?><!--条记录</div>-->
                            <!--                        </div>-->
                            <!--                        <div class="col-lg-6">-->
                            <!--                            <div class="dataTables_paginate paging_bootstrap pagination">-->
                            <!--                                <ul>-->
                            <!--                                    --><?php //echo $this->pagination->create_links();?>
                            <!--                                </ul>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                        </div>
                </div>
</section>
</div>
</div>
</div>
<!--body wrapper end-->

<!--footer section start-->
<footer style="text-align: center">
    2014 &copy; AdminEx by <a href="http://www.mycodes.net/" target="_blank">源码之家</a>
</footer>
<!--footer section end-->

</div>
<!-- main content end-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--data table-->


<!--common scripts for all pages-->

<!--script for editable table-->
<script src="js/facility.js"></script>
<script type="text/javascript" src="js/right-dialog/jquery-right-dialog-1.1.js"></script>


</body>
</html>
