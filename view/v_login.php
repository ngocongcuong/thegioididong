<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_v_login.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="fm-login">
	<form action="?controller=login" method="POST" >
	<table>
		<tr>
			<th rowspan="4"><img width="245px" src="./public/img/lock.png"></th>
			<th>ĐĂNG NHẬP HỆ THỐNG</th>
		</tr>
		<tr>
			<td class="taikhoan">
				<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="Tài khoản">
			</td>
		</tr>
		<tr>
			<td class="taikhoan">
				<i class="fas fa-key"></i>
				<input type="password" name="password" placeholder="Mật khẩu">
			</td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="save" value="save-user">Ghi nhớ
				<a href="?controller=pass_1">Quên mật khẩu?</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="dangnhap" value="Đăng nhập">
			</td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>