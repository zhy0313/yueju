<style>
    .clearpaddingleft{
        padding-left: 0px;
    }
    .panel-body{
        height:1000px;
    }
    .important{
        color: #000;
    }
    .progress{
        height: 4px;
        font-size: 0;
        line-height: 4px;
        background: orange;
        width: 0;
    }
    .list-group .list-group-item .score{
        padding:50px;
    }
    .list-group-item .score strong{
        color:#1caf9a;
    }
</style>
<base href="<?php echo site_url();?>">
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script src="plupload/js/plupload.full.min.js"></script>

<section class="panel">
    <header class="panel-heading">
        房源详细信息列表
    </header>
    <div class="panel-body">
        <form role="form" action="admin/do_add_house" method="post">
            <div class="form-group row ">
                <label for="title" class="col-sm-2">标题:</label>
                <div class="col-sm-10" id="show_title"></div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-2">城市:</label>
                <div class="col-sm-10" id="show_city"></div>
            </div>
            <div class="form-group row">
                <label for="street" class="col-sm-2">城区:</label>
                <div class="col-sm-10" id="show_street"></div>

            </div>
            <div class="form-group row">
                <label for="road" class="col-sm-2">街道:</label>
                <div class="col-sm-10" id="show_road"></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">房屋类型:</label>
                <div class="col-sm-10" id="show_type"></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">租赁类型:</label>
                <div class="col-sm-10" id="show_rent_type"></div>
            </div>
            <div class="form-group row">
                <label for="add_facilitys" class="col-sm-2">房屋设施:</label>
                <div class="col-sm-10" id="show_facilitys"></div>

            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">租金:</label>
                <div class="input-group col-sm-5 m-bot15 clearpaddingleft">
                    <span class="input-group-addon">￥</span>
                    <input type="text" class="form-control" name="show_price" readonly>
                    <span class="input-group-addon ">.00</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="add_isorder" class="col-sm-2 ">是否已租:</label>
                <div class="col-sm-10" id="show_isorder"></div>
            </div>
            <div class="form-group row">
                <div class="row col-lg-12" id="select_img">
                    <label for="add_isorder" class="col-sm-3 ">房源图片展示:</label>
                    <div class="col-sm-8" id="show_house_img"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="add_isorder" class="col-sm-2 ">房源描述:</label>
                <div class="col-sm-10" id="show_describe"></div>
            </div>
            <div class="row">
                <section class="panel">
                    <header class="panel-heading custom-tab ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#show_conmment" data-toggle="tab">房源评论</a>
                            </li>
                            <li class="" id="show_house_order">
                                <a href="#show_order" data-toggle="tab">房源订单</a>
                            </li>
                            <li class="" id="show_house_collect">
                                <a href="#show_collect" data-toggle="tab">房源收藏</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="show_conmment">

                            </div>
                            <div class="tab-pane" id="show_order">

                            </div>
                            <div class="tab-pane" id="show_collect">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
    </form>

    </div>
</section>
