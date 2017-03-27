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
</style>
<base href="<?php echo site_url();?>">
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script src="plupload/js/plupload.full.min.js"></script>

<section class="panel">
    <header class="panel-heading">
        请按表单输入房源信息
    </header>
    <div class="panel-body">
        <form id="edit_form" role="form" action="" method="post">
            <div class="form-group">
                <label for="title" class="col-sm-2 clearpaddingleft">标题</label>
                <input type="text" class="form-control" id="title" placeholder="输入房屋标题" name="add_title">
            </div>
            <div class="form-group">
                <label for="city" class="col-sm-2 clearpaddingleft">城市</label>
                <input type="text" class="form-control" id="city" placeholder="输入城市" name="add_city">
            </div>
            <div class="form-group">
                <label for="street" class="col-sm-2 clearpaddingleft">城区</label>
                <input type="text" class="form-control" id="street" placeholder="输入城区" name="add_street">
            </div>
            <div class="form-group">
                <label for="road" class="col-sm-2 clearpaddingleft">街道</label>
                <input type="text" class="form-control" id="road" placeholder="输入街道" name="add_road">
            </div>
            <div class="form-group">
                <label for="add_type" class="col-sm-3 clearpaddingleft">选择房屋类型</label>
                <div class="col-lg-3 clearpaddingleft">
                    <select class="form-control m-bot15" name="add_type" id="add_type">
                    </select>
                </div>
                <label for="add_rent_type" class="col-sm-3 clearpaddingleft">选择租赁类型</label>
                <div class="col-lg-3 clearpaddingleft">
                    <select class="form-control m-bot15" name="add_rent_type" id="add_rent_type">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="add_facilitys" class="col-sm-3 clearpaddingleft">请勾选房屋设施</label>
                <div class="col-sm-9 icheck clearpaddingleft" id="facilitys_select">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 clearpaddingleft">租金</label>
                <div class="input-group col-lg-3 m-bot15 clearpaddingleft">
                    <span class="input-group-addon">￥</span>
                    <input type="text" class="form-control" name="add_price" id="show_price">
                    <span class="input-group-addon ">.00</span>
                </div>
            </div>
            <div class="row">
                <label for="add_isorder" class="col-sm-2 ">是否已租</label>
                <div class="col-lg-2 clearpaddingleft">
                    <select class="form-control m-bot15" name="add_isorder" id="add_isorder">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="row col-lg-12" id="select_img">
                    <label for="add_isorder" class="col-sm-3 ">房源图片:</label>
                    <div class="col-sm-8" id="show_house_img"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row col-lg-12" id="select_img">
                    <input type="button" class="btn btn-primary" value="选择图片上传..." id="image" />
                    <input type="button" class="btn btn-primary" value="开始上传" id="upload-btn" />
                    <ul id="file-list">
                    </ul>
                </div>

            </div>
            <div class="row">
                <label class="col-lg-10 control-label clearpaddingleft" for="add_describe">房屋描述（可插入图片）</label>
                <div class="col-sm-10 clearpaddingleft">
                    <textarea rows="6" class="form-control" name="add_describe" id="add_describe" style="width:500px;height:200px;"></textarea>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4">
                    <input type="submit" value="更新房源信息" class="btn btn-primary">

                </div>
            </div>
    </div>
    </form>

    </div>
</section>
<script>
    //    var editor;
    //window.location.assign('admin/add_house');
    //    KindEditor.ready(function(K) {
    //        console.log(K);
    //    });
    //console.log(K);
    //    KindEditor.ready(function(K) {
    //        console.log(K);
    //        window.editor = K.create('#add_describe', {
    //            resizeType : 1,
    //            allowPreviewEmoticons : false,
    //            allowImageUpload : false,
    //            items : [
    //                'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
    //                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
    //                'insertunorderedlist', '|', 'emoticons', 'image', 'link']
    //        });
    //    });
</script>
<script>
    $(document).ready(function() {
        var uploader = new plupload.Uploader({
            runtimes: 'html5,flash,silverlight,html4',
            browse_button: 'image', // you can pass an id...
            container: document.getElementById('select_img'), // ... or DOM Element itself
            url: 'http://127.0.0.1/yuejums/admin/up_img',
            unique_names : true ,
            flash_swf_url: 'plupload/js/Moxie.swf',
            silverlight_xap_url: 'plupload/js/Moxie.xap',
            filters: {
                max_file_size: '3mb',
                mime_types: [
                    {title: "Image files", extensions: "jpg,gif,png"}
                ],
                prevent_duplicates : true //不允许队列中存在重复文件
            },
            resize : {
                width : 200,
                height : 200,
                quality : 90,
                crop: true, // crop to exact dimensions
                unique_names : true,

            },
            init: {
                PostInit: function () {
                    document.getElementById('file-list').innerHTML = '';

                    document.getElementById('upload-btn').onclick = function () {
                        uploader.start();
                        return false;
                    };
                },

                FilesAdded: function (up, files) {
                    plupload.each(files, function (file) {
                        document.getElementById('file-list').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                    });
                    for(var i = 0, len = files.length; i<len; i++){
                        !function(i){
                            previewImage(files[i],function(imgsrc){
                                $('#'+files[i].id).append('<input type="checkbox" name="select_main[]" value="'+ files[i].id+'">');
                                $('#'+files[i].id).append('<br/>');
                                $('#'+files[i].id).append('<img src="'+ imgsrc +'" />');
                                $('#'+files[i].id).append('<input class="form-control" type="text" name="img_des[]" placeholder="输入图片描述信息">')
                            })
                        }(i)
//                        console.log(up.getFile(files[i].id));

                    }
                },
                UploadComplete: function(up,files){
                    for (var i in files) {
                        var html = '<input name="img[]" type="hidden" value="'+files[i].target_name +'">';
                        $('#edit_form').append(html);
                    }
                },
                UploadProgress: function (up, file) {
                    document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
                },

                Error: function (up, err) {
//                    document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
                }
            }
        });
        function previewImage(file,callback){//file为plupload事件监听函数参数中的file对象,callback为预览图片准备完成的回调函数
            if(!file || !/image\//.test(file.type)) return; //确保文件是图片
            if(file.type=='image/gif'){//gif使用FileReader进行预览,因为mOxie.Image只支持jpg和png
                var fr = new mOxie.FileReader();
                fr.onload = function(){
                    callback(fr.result);
                    fr.destroy();
                    fr = null;
                }
                fr.readAsDataURL(file.getSource());
            }else{
                var preloader = new mOxie.Image();
                preloader.onload = function() {
                    preloader.downsize( 300, 300 );//先压缩一下要预览的图片,宽300，高300
                    var imgsrc = preloader.type=='image/jpeg' ? preloader.getAsDataURL('image/jpeg',80) : preloader.getAsDataURL(); //得到图片src,实质为一个base64编码的数据
                    callback && callback(imgsrc); //callback传入的参数为预览图片的url
                    preloader.destroy();
                    preloader = null;
                };
                preloader.load( file.getSource() );
            }
        }
        uploader.init();
    });
</script>
