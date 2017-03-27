<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/15
 * Time: 23:36
 */?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .admin-img{
            width: 20px;
            height: 20px;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
        .admin-img:hover{
            transform: scale(6);
        }
        td{
            text-align: center;
        }
        tr th{
            text-align: center;
        }
    </style>
</head>
<body>
<?php include "common.php" ?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    管理员管理
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group">
                                <button id="editable-sample_new" class="btn btn-primary">
                                    添加管理员 <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>管理员名</th>
                                <th>管理员等级</th>
                                <th>管理员头像</th>
                                <th>修改</th>
                                <th>删除</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($blogs as $admin_val) {?>
                                <tr class="">
                                    <td><?php echo $admin_val->name;?></td>
                                    <td><?php echo $admin_val->is_super_admin;?></td>
                                    <td><img src="<?php echo $admin_val->img_src;?>" class='admin-img' alt=""></td>
                                    <td><a class="edit" href="javascript:;" admin-id = '<?php echo $admin_val->admin_id; ?>'>修改</a></td>
                                    <td><a class="delete" href="admin/del_admin/<?php echo $admin_val->admin_id;?>">删除</a></td>

                                </tr>
                            <?php  }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--<script src="js/bootstrap.js"></script>-->
<script src="js/admin.js"></script>
<script type="text/javascript" src="js/right-dialog/jquery-right-dialog-1.1.js"></script>
</body>
</html>
