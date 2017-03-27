<!--created by zjl-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改评论</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/comment-wechat.css">
</head>
<body>
<div id="content">
    <div id="check-com">
        <div id="top-part">
                  <span class="house-img">
                  <img src="<?php echo $detail->img_src;?>">
                    </span>  
                  <span class="summary">
                      <p class="house-title"><b><?php echo $detail->title;?></b></p>
                      <p class="house-position">地址：<?php echo $detail->city;?><?php echo $detail->street;?><?php echo $detail->road;?></p>
                      <p class="house-desc"><?php echo $detail->name;?>-<?php echo $detail->count;?>条评论</p>
                      <p class="start-time">入住时间：<?php echo date("Y年m月d日",strtotime($detail->start_time));?></p>
                      <p class="end-time">结束时间：<?php echo date("Y年m月d日",strtotime($detail->end_time));?></p>
                      <hr/>
                  </span>
        </div>
        <div id="bottom-part">
            <form method="get" action="comment/w_do_revise">
                <input type="hidden" name="hid" value="<?php echo $detail->comment_id;?>">
            <p class="w-com-score">评论星级：
            <span class="star-tc" data-score="<?php echo $detail->score;?>"></span>
            </p>
            <p class="w-my-com">我的评论：</p>
            <textarea name="content" class="com-con"><?php echo $detail->content;?></textarea>
              <span class="w-btn-group">
                      <a href="comment/w_show" class="w-del-btn w-btn">取消</a>
                      <input type="submit" class="w-rev-btn w-btn inpt-btn" value="提交">
              </span>
            </form>
        </div>
    </div>
</div>
<script src="assets/js/rem.js"></script>
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/jquery.raty.js"></script>
<script src="assets/js/comment.js"></script>
</body>
</html>