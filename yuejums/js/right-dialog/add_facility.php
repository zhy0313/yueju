<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/1/15
 * Time: 18:44
 */
?>
<style>
body{
    margin: 0;
    padding: 0;
    font-size: 20px;
}
#sub{
    margin-left: 275px;
}
</style>
<form action="facility/post_blog" method="post" enctype="application/x-www-form-urlencoded">
    设施名称：<input type="text" name="name" placeholder="请输入设施名"></br>
    设施图片：<input type="file"></br>
    <input type="submit" id="sub"></br>
</form>
<script>
  $(function(){
      $('#sub').on('click',function(){
//          alert(12315);
      });
  });
  var editor;
  KindEditor.ready(function(K) {
      editor = K.create('textarea[name="img_describe"]', {
          resizeType : 1,
          allowPreviewEmoticons : false,
          allowImageUpload : true,
          items : [
              'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
              'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
              'insertunorderedlist', '|', 'emoticons', 'image', 'link']
      });
  });
</script>



