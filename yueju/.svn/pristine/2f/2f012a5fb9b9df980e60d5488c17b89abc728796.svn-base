<base href="<?php echo site_url();?>">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人资料</title>
	<link rel="stylesheet" href="assets/css/person_data.css">
	<link rel="stylesheet" href="assets/css/left-sidebar.css">
</head>
<body>
	<?php include 'head.php'?>
	<div class="wrapper">
		<!-- 个人资料详情 -->
		<form method="post" action="personal/person">
		<div class="personal_data">
			<div class="side"><?php include "left-sidebar.php"?></div>
			<div class="data_container">
				<div class="data_wrap">
					<!-- 帐号信息start -->
					<div>
						<h2 class="data_tit">账号管理</h2>

						<!-- 用户名 -->
						<span class="info_tit info_username">用户名：</span>
						<input class="input_l" name="username" placeholder="您的用户名.."/>
						<!-- 用户名 -->

						<!-- 邮箱 -->
						<span class="info_tit">您的邮箱：</span>
						<input class="input_l" name="email" placeholder="邮箱.."/>
						<!-- 邮箱 -->

						<span class="info_tit">手机号：</span><br/>
						<input class="input_tele" name="tel"/>
						<button class="change_tele">更改手机号</button>

						<!-- 照片上传start -->
						<div class="photo">
							<div></div>
							<button class="btn_photo">上传照片</button>
						</div>
						<!-- 照片上传end -->

					</div>
					<!-- 帐号信息end -->

					<!-- 个人信息start -->
					<div>
						<h2 class="data_tit">个人信息</h2>

						<!-- 真实姓名 -->
						<span class="info_tit info_name">您的真实姓名：</span>
						<input class="input_l" name="rel_name" placeholder="名字"/>
						<!-- 真实姓名 -->

						<!-- 性别 -->
						<span class="info_tit">性别：</span>
						<input type="radio" name="sex" class="sex_item" checked="checked"/>男
						<input type="radio" name="sex" class="sex_item"/>女
						<br/>
						<!-- 性别 -->

						<span class="info_tit">身份证号：</span>
						<input class="input_l" placeholder="填写身份证号"/>

						<!-- 出生日期start -->
						<span class="info_tit">出生日期：</span><br/>
						<div class="birth">
							<input class="birth_y"/>
							<span>-</span>
							<input class="birth_m"/>
							<span>-</span>
							<input class="birth_d"/>
						</div>
						<!-- 出生日期end -->

						<span class="info_tit">所在城市：</span><br/>
						<div class="city">
							<input placeholder="请选择"/>
							<input placeholder="请选择"/>
						</div>
						<span class="info_tit">您的故乡：</span><br/>
						<div class="hometown">
							<input placeholder="请选择"/>
							<input placeholder="请选择"/>
						</div>
						<span class="info_tit">工作经历：</span><br/>
						<div>
							<input class="input_l input_gap"/>
							<input class="input_l"/>
						</div>
						<span class="info_tit">教育经历：</span><br/>
						<div>
							<input class="input_l input_gap"/>
							<input class="input_l input_gap"/>
						</div>
						<input type="submit" class="btn_submit"/>
					</div>
					<!-- 个人信息end -->
				</div>
				
			</div>
		</div>
		</form>
		<!-- 个人资料详情 -->
	</div>
<!--<script src="assets/js/header.js"></script>-->
</body>
</html>