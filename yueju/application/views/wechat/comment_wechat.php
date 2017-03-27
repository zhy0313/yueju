<!--created by zjl-->
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
	    <title></title>
        <base href="<?php echo site_url();?>">
        <link rel="stylesheet" type="text/css" href="assets/css/comment-wechat.css">
    </head>
    <body>
        <div id="header">
            
        </div>
        <div id="content">
            <?php
                foreach ($comments as $comment) {
                    ?>
                    <div id="check-com">
                        <div id="top-part">
                  <span class="house-img">
                  <img src="<?php echo $comment->img_src;?>">
                    </span>  
                  <span class="summary">
                      <p class="house-title"><b><?php echo $comment->title?></b></p>
                      <p class="house-position">地址：<?php echo $comment->city;?><?php echo $comment->street;?><?php echo $comment->road;?></p>
                      <p class="house-desc"><?php echo $comment->name;?>-<?php echo $comment->count;?>条评论</p>
                      <p class="start-time">入住时间：<?php echo date("Y年m月d日",strtotime($comment->start_time));?></p>
                      <p class="end-time">结束时间：<?php echo date("Y年m月d日",strtotime($comment->end_time));?></p>
                      <hr/>
                  </span>
                        </div>
                        <div id="bottom-part">
                            <p class="w-com-score">评论星级：
                                <span class="star" data-score="<?php echo $comment->score;?>"></span>
                            </p>
                            <p class="w-my-com">我的评论：</p>
                            <p class="w-com-con"><?php echo $comment->content;?></p>
                            <!--                  <div class="w-btn-group">-->
                      <span class="w-btn-group">
                      <a href="comment/w_delete/<?php echo $comment->comment_id;?>" class="w-del-btn w-btn">删除评论</a>
                      <a href="comment/display/<?php echo $comment->comment_id;?>" class="w-rev-btn w-btn">修改评论</a>
                      </span>

                            <!--                  </div>-->
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
        <script src="assets/js/rem.js"></script>
        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <script src="assets/js/jquery.raty.js"></script>
        <script src="assets/js/comment.js"></script>
    </body>
    </html>
