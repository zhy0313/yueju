<base href="<?php echo site_url();?>">
<style>
	.div1{
		width: 100px;
		height: 100px;
		background: #ccc;
	}
	.edit{
		width: 350px;
		height: 500px;
		font-size: 1.6rem;
		margin: 20px;
	}
	.item{
		height: 30px;
	}
	.edit_form{
		margin: 0px;
		position: relative;
	}
	.edit_form p input{
		float: right;
	}
	.edit_form p{
		width: 80%;
	}
	.edit_form .yes{
		position: absolute;
		width: 100px;
		text-align: center;
		left: 50%;
		margin-left: -50px;
		clear: both;
	}
</style>
<!-- 发票编辑页面start -->
<div class="edit">
	<div class="post item"></div>
	<div class="item">订单号:<span class="invoice_number" name="invoice_number"></span></div>
	<div class="edit_num item"></div>
	<div class="edit_username item"></div>
	<!-- 价格：<input class="edit_price" type="text" name="edit_price"></input><br/> -->
	<div class="edit_price item" name="edit_price"></div><br/>
	<hr>
	<form method="post" action="invoice/order" class="edit_form">
		<p>发票标题：<input class="invoice_title" type="text" name="invoice_title"/></p>
		<br/>
		<p>发票号：<input class="invoice_num" type="text" name="invoice_num"/></p>
		<br/>
		<p>时间：<input class="edit_time" type="text" name="edit_time"/></p>
		<br/>
		<input type="submit" value="确定" class="yes"/>
	</form>
</div>
<!-- 发票编辑页面end -->
