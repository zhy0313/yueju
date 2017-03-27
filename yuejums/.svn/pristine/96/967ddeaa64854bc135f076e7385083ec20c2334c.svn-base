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
                <label for="name" class="col-sm-2 clearpaddingleft">管理员名</label>
                <input type="text" class="form-control" id="adminname" placeholder="输入用户名" name="name">
            </div>
            <div class="form-group">
                <label for="old_pass" class="col-sm-2 clearpaddingleft">输入密码</label>
                <input type="password" class="form-control" id="old_pass" placeholder="输入密码" name="old_pass">
            </div>
            <div class="form-group">
                <label for="new_pass" class="col-sm-2 clearpaddingleft">新密码</label>
                <input type="password" class="form-control" id="new_pass" placeholder="输入新密码" name="new_pass">
            </div>
            <div class="form-group">
                <label for="real_pass" class="col-sm-2 clearpaddingleft">确认密码</label>
                <input type="password" class="form-control" id="rea_pass" placeholder="重新输入新密码" name="real_pass">
            </div>

            <div class="row">
                <label for="add_isorder" class="col-sm-2 ">超级管理员</label>
                <div class="col-lg-2 clearpaddingleft">
                    <select class="form-control m-bot15" name="is_super" id="is_super">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="row col-lg-12" id="select_img">
                    <label for="add_isorder" class="col-sm-3 ">管理员头像:</label>
                    <div class="col-sm-8" id="show_house_img"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row col-lg-12" id="select_img">

                </div>

            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4">
                    <input type="submit" value="更新管理员信息" class="btn btn-primary">

                </div>
            </div>
    </div>
    </form>

    </div>
</section>
<script>
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
