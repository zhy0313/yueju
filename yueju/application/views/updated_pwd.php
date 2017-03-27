<base href="<?php echo site_url();?>">
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>密码修改</title>
	<link rel="stylesheet" type="text/css" href="assets/css/updated_pwd.css">
	<link rel="stylesheet" href="assets/css/left-sidebar.css">
</head>
<body>
<?php include 'head.php'?>
<script src="assets/js/header.js"></script>
	<div class="wrapper">
		<!-- 密码修改详情 -->
		<div class="updated_pwd">
			<div class="side"><?php include "left-sidebar.php"?></div>
			<div class="pwd_container">
				<div class="password_wrap">
					<!-- 密码修改start -->
					<div>
						<h2 class="data_tit">密码修改</h2>
						<span class="info_tit">已验证手机号</span>
						<span class="verified_tele">13845626253</span><br/>
						
						<!-- 发送验证码 -->
						<span class="info_tit">手机验证</span>
						<br/>
						<input class="verfied_num"/>
						<button class="btn_verified">发送验证码</button><br/>
						<!-- 发送验证码 -->

						<!-- 新密码输入 -->
						<span class="info_tit">输入新密码</span><br/>
						<input class="new_password"/><br/>
						<!-- 新密码输入 -->

						<!-- 图片验证码 -->
						<span class="info_tit">图片验证码</span><br/>
						<input class="verfied_num"/>
						<img class="btn_verified" src="">
						<br/>
						<!-- 图片验证码 -->

						<button type="submit" class="btn_submit">确定</button>
					</div>
					<!-- 密码修改end -->
				</div>
			</div>
		</div>
		<!-- 密码修改详情 -->
	</div>
	<!-- <div style="height: 40px;background-color: yellow;">footer</div> -->
</body>
</html>