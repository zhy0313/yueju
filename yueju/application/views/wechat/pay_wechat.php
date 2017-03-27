<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="assets/css/pay_wechat.css">
	<title>订单提交页</title>
	<script src="assets/js/rem.js"></script>
</head>
<body>
	<div id="gap"></div>
	<div id="order-suc">
		<div class="one">支付成功!</div>
		<div class="two">点击此, 跳转个人中心!</div>
	</div>
	<div class="line1"></div>
	<div class="order-num">订单编号:&nbsp;&nbsp;893219387918237</div>
	<div class="line2"></div>
	<div id="order-people">预订人信息</div>
	<div id="peoplemes">
		<span class="item1">真实姓名</span>
		<span class="item2"><?php echo $this->session->userdata('name');?></span>
		<span class="item3">手机号</span>
		<span class="item4"><?php echo $this->session->userdata('phone_num');?></span>
	</div>
	<div class="line3"></div>
	<div id="order-fee">
		<div class="title">订单费用信息</div>
		<div class="house">房租</div>
		<span class="l1">日均价</span>
		<span class="l2">预定数</span>
		<span class="l3">天数</span>
		<span class="l4">优惠</span>
		<span class="l5">总价</span>
		<span id="fee-acci">住宿旅客意外险</span>
		<span class="acci1">日均价</span>
		<span class="acci2">预定数</span>
		<span class="acci3">天数</span>
		<span class="acci4">优惠</span>
		<span class="acci5">总价</span>
		<span class="r1"><?php echo $price;?>元</span>
		<span class="r2">2天</span>
		<span class="r3">3天</span>
		<span class="r4">100元</span>
		<span class="r5">6700元</span>
		<span class="accir1">3200元</span>
		<span class="accir2">2天</span>
		<span class="accir3">3天</span>
		<span class="accir4">100元</span>
		<span class="accir5">6700元</span>
	</div>
	<div class="line4"></div>
	<div id="on-money">在线收取押金: 1000元</div>
	<span id="order-total">订单总金额:</span>
	<span id="total-yuan">¥3400元</span>
	<div class="line5"></div>
	<div class="live-mes">入住信息</div>
	<div class="house-mes">房源信息</div>
	<div class="house-more"><?php echo $address;?></div>
	<span class="house-mes1">整租</span>
	<span class="house-mes2">一间</span>
	<div class="live2">入住信息</div>
	<span class="live"><?php echo $start;?>入住</span>
	<span class="leave"><?php echo $end;?>退房</span>
	<div class="liveinto">共两晚</div>
	<div class="line6"></div>

	<script src="assets/js/zepto.min.js"></script>
	<script src="assets/js/pay_wechat.js"></script>
</body>
</html>












