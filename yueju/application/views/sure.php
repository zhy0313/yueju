<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/sure_order.css">
	<title>确认订单</title>
</head>
<body>
<?php include 'head.php'?>
<script src="assets/js/header.js"></script>
	<div id="order-state">
		<div class="wrapper">
			<div class="line"></div>
			<img src="assets/img/order1.jpg"class="write-order">
			<img src="assets/img/order3.jpg"class="is-order1">
			<img src="assets/img/order2.jpg"class="is-order2">
			<img src="assets/img/order1.jpg"class="pay-cash">
			<img src="assets/img/order1.jpg"class="order-finish">
			<span class="word1">填写订单</span>
			<span class="word2">订单确认</span>
			<span class="word3">支付定金</span>
			<span class="word4">订单完成</span>
		</div>
	</div>
	<div id="group-one">
		<div class="wrapper">
			<span class="word-suc">订单提交成功!</span>
			<span class="word-is">确认后，我们后发送短信通知您支付订金</span>
		</div>
	</div>
	<div id="group-three">
		<div class="wrapper">
			<div class="order-num">订单编号: 2193979323423</div>
			<div class="line"></div>
			<div class="live-mes">入住信息:</div>
			<div id="house">
				<span class="house1">房源信息:</span>
				<span class="house2"><?php echo $address;?></span>
				<span class="house3">整租</span>
				<span class="house4">一间</span>
			</div>
			<div id="live">
				<span class="live1">入住信息:</span>
				<span class="livetime1"><?php echo $start;?>入住</span>
				<span class="to">-</span>
				<span class="livetime2"><?php echo $end;?>退房</span>
				<span class="livetotal">共晚</span>
			</div>
			<div class="line1"></div>
			<div id="will-order">预订信息:</div>
			<div class="will-more">
				<span class="will-na">姓名: </span>
				<span class="will-name"><?php echo $username;?></span>
				<span class="will-num">电话: </span>
				<span class="will-number"><?php echo $this->session->userdata('phone_num');?></span>
			</div>
			<div class="line2"></div>
			<div id="order-fee">订单费用:</div>
			<div>
				<div>
					<span class="house-fee">房租费用:</span>
					<span class="house-price">¥<?php echo $price;?></span>
				</div>
				<div>
					<span class="insurance">保险:</span>
					<span class="ins-price">¥20.00</span>
				</div>
				<div>
					<span class="get">在线收取押金:</span>
					<span class="get-price">¥200.00</span>
				</div>
			</div>
			<div class="line3"></div>
			<div class="pay-way">支付方式:</div>
			<div>
				<input class="input-we" type="radio" name="way"><span class="wechat">微&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;信</span>
				<input class="input-ali" type="radio" name="way"><span class="alipay">支付宝</span>
			</div>
			<div class="line4"></div>
			<a id="pay-btn" href="order/go_pay">去支付</a>
		</div>
	</div>
	<div id="help">
		<div class="wrapper">
			<div class="help-que">帮助问题:</div>
			<div class="queone">1.我的订单要在多长时间之内才能处理?</div>
			<div class="quetwo">2.我的订单被接受了以后，我该怎么做?</div>
			<a href="javascript:;" class="more">更多帮助&gt;</a>
		</div>
	</div>
	<div id="footer">
		<div class="footer-logo">
			<span>LOGO</span>
		</div>
		<div class="footer-pic">

		</div>
		<ul class="footer-menu">
			<li><a href="">首页</a></li>
			<li><a href="">房源中心</a></li>
			<li><a href="">个人中心</a></li>
			<li><a href="">关于悦居</a></li>
		</ul>
		<div class="scan-code">
			<span>扫描此二维码</span>
			<div class="QR-code"></div>
		</div>
	</div>

	<script src="assets/js/jquery-2.2.4.min.js"></script>
<!--	<script src="assets/js/order.js"></script>-->
</body>
</html>