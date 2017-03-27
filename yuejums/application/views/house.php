<?php
    $type_id = $this->input->get('type_id');
    $search = $this->input->get('search');
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

    <title>Editable Table</title>

    <!--data table-->
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/right-dialog/jquery-right-dialog-1.1.css">
<!--    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
    <![endif]-->
    <style>
        /*样式微调*/
        .btn-group{
            margin-bottom: 20px;
        }
        .dataTables_info{
            margin-left: 20px;
        }
        .form-control-input{
            width:200px;
            display:inline;
        }
        .form-control-select{
            width:200px;
            display:inline;
        }
        .form-pos{
            margin-bottom: 20px;
        }
        .title:hover{
            color:#65cea7;
            cursor: pointer;
        }
    </style>
</head>

<body class="sticky-header">

<section>
    <?php include "common.php"?>

    <!-- main content start-->


        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                房源管理
            </h3>
            <ul class="breadcrumb">

            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            房源管理
                            <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">

                                <div class="space15"></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <button id="editable-sample_new" class="btn btn-primary">
                                            Add New <i class="fa fa-plus"></i>
                                        </button>
                                        <button id="editable-sample_del" class="btn btn-primary">
                                            Delete <i class="fa fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="col-lg-7 col-md-offset-3 form-pos">
                                        <form action="admin/house" method="get">
                                            <select name="type_id" id="type" class="form-control form-control-select">
                                                    <option value="0" >所有房源类型</option>
                                                    <?php foreach($types as $type){?>
                                                        <option value="<?php echo $type->type_id;?>" <?php echo $type->type_id==$type_id?'selected':''?>><?php echo $type->name;?></option>
                                                    <?php }?>
                                                </select>
                                                <input id="house_search" class="form-control form-control-input" type="text" name="search" placeholder="根据title模糊搜索"  value="<?php echo $search?>">
                                                <input class="btn btn-default btn-sm" type="submit" value="搜索" >
                                        </form>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
                                        <th>删除</th>
                                        <th>房源标题</th>
                                        <th>城市</th>
                                        <th>城区</th>
                                        <th>街道</th>
                                        <th>类型</th>
                                        <th>是否已租</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form id="del_some" action="admin/del_some" method="post">
                                    <?php foreach ($house as $v){?>
                                        <tr class="tt" >
                                            <td><input type="checkbox" name="deletes[]" value="<?php echo $v->house_id?>"></td>
                                            <td><a class="title" houseid="<?php echo $v->house_id?>"><?php echo $v->title?></a></td>
                                            <td><?php echo $v->city?></td>
                                            <td><?php echo $v->street?></td>
                                            <td><?php echo $v->road?></td>
                                            <td><?php echo $v->name?></td>
                                            <!--                                        <td>--><?php //echo $v->title?><!--</td>-->
                                            <!--                                        <td>--><?php //echo $v->price?><!--</td>-->
                                            <td><?php if($v->is_order==1){echo '是';}else{echo '否';}?></td>
                                            <td><a class="edit" href="javascript:;" houseid="<?php echo $v->house_id?>">Edit</a></td>
                                            <td><a class="delete" href="admin/del_house?del_id=<?php echo $v->house_id?>" >Delete</a></td>
                                        </tr>
                                    <?php }?>
                                    </form>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dataTables_info">共<?php echo count($house);?>条记录</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dataTables_paginate paging_bootstrap pagination">
                                            <ul>
                                                <?php echo $this->pagination->create_links();?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by <a href="http://www.mycodes.net/" target="_blank">源码之家</a>
        </footer>
        <!--footer section end-->


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

<!--data table-->


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<!--script for editable table-->
<script src="js/house.js"></script>
<script type="text/javascript" src="js/right-dialog/jquery-right-dialog-1.1.js"></script>
<script>
    $('#type').on('change',function(){
        var selectedId = $(this).find('option').eq(this.selectedIndex).val();
        var searched = $('#house_search').val();
        location.href = 'admin/house/'+'?search='+ searched +'&type_id='+selectedId;
    });
</script>
<!--<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>-->
<!--<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>-->
<!-- END JAVASCRIPTS -->


</body>
</html>
