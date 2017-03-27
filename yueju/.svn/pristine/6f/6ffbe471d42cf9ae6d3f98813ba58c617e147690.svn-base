<!--created by zjl-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>评论管理</title>
    <base href="<?php echo site_url();?>">
	<link rel="stylesheet" type="text/css" href="assets/css/common.css">
	<link rel="stylesheet" type="text/css" href="assets/css/comment.css">
</head>
<body>
	<?php include "head.php";?>
	<div id="content">
		<div class="wrapper">
			<div id="sidebar">
				<ul class="menu"> 
					<li class="list">
						<span class="sidebar-icon order"></span>
                            <a href="javascript:;" class="sidebar-mess">订单管理</a>
						<div class="rectangle"></div>
					</li>
					<li class="list">
						<span class="sidebar-icon collect"></span>
						<a href="javascript:;" class="sidebar-mess">我的收藏</a>
						<div class="rectangle"></div>
					</li>
					<li class="list">
						<span class="sidebar-icon info"></span>
						<a href="javascript:;" class="sidebar-mess">消息通知</a>
						<div class="rectangle "></div>
					</li>
					<li class="list">
						<span class="sidebar-icon comment"></span>
                              <a href="comment/show" class="sidebar-mess active">我的评论</a>
						<div class="rectangle chosestyle"></div>
					</li>
					<li class="list">
						<span class="sidebar-icon profile"></span>
						<a href="javascript:;" class="sidebar-mess">个人资料</a>
						<div class="rectangle "></div>
					</li>
					<li class="list">
						<span class="sidebar-icon password"></span>
                              <a href="javascript:;" class="sidebar-mess">密码设置</a>
						<div class="rectangle "></div>
					</li>
				</ul>
			</div>
			<div id="main-con">
					<ul id="comment-lists">
						<?php
						foreach ($comments as $comment) {
							?>
							<li class="comment-list">
								<div class="com-content">
								<span class="left">
									<img class="com-img" src="<?php echo $comment->img_src;?>">
									<p class="star-letter">评论星级：</p>
									<div class="star" style="width: 120px;"
										 data-score="<?php echo $comment->score;?>"></div>
								</span>
								<span class="right">
									<span class="com-desc">
									<p class="com-title"><b><?php echo $comment->title;?></b></p>
									<p class="com-abstract"><?php echo $comment->name;?>-<?php echo $comment->count;?>条评论</p>
									<p class="com-time">入住时间:<?php echo date("Y年m月d日",strtotime($comment->start_time));?>-- 离开时间：<?php echo date("Y年m月d日",strtotime($comment->end_time));?></p>
									<hr/>
									</span>
									<span class="com-detail">
										<p class="com-letter"><b>我的评论:</b></p>
										<span class="com-space">
										<div class="com-passage"><?php echo $comment->content;?></div>
										</span>
									<span class="com-btngroup">
										<a href="comment/delete/<?php echo $comment->comment_id;?>" class="com-cancel com-btn">删除评论</a>
										<a href="javascript:;" class="com-revise com-btn" reviseId="<?php echo $comment->comment_id;?>">修改评论</a>
									</span>
									</span>
									
								</span>
								</div>
							</li>
							<?php
								}
							?>
						<div class="page-num">
							<ul class="each-page">
								<?php echo $this->pagination->create_links();?>
							</ul>
						</div>
<!--					
					</ul>
				<!--		弹层开始-->

		</div>
		</div>
	</div>
	<div id="mask">
		<div class="wrapper">
			<div class="com-tanc">
				<div class="container">
					<div class="com-left-img">
						<img class="com-left-img" src="assets/img/images.png">
					</div>
					<div class="com-right">
						<p class="com-title"><b class="bcom-title"></b></p>
						<p class="com-abstract c-abstract"></p>
						<p class="com-time-tc"></p>
						<hr/>
						<form action="comment/do_revise" method="get">
							<input class="hcom-id" type="hidden" name="hid" value="">
							<p class="com-starnum"><b>评论星级:</b>
								<span class="star-tc" data-score=""></span>
							</p>
							<p class="mycomment"><b>我的评论:</b></p>
							<textarea class="com-content" name="content" ></textarea>
										<span class="com-btngroup">
										<a href="javascript:;" class="mask-com-cancel com-btn">取消</a>
										<input type="submit" class="mask-com-revise com-btn" value="提交">
										</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.1.1.min.js"></script>
		<script src="assets/js/jquery.raty.js"></script>
	<script src="assets/js/comment.js"></script>
</body>
</html>