<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_v_login.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="fm-login">
	<form method="POST" action="?controller=newpass">
	<table>
		<tr>
			<th rowspan="4"><img width="245px" src="./public/img/lock.png"></th>
			<th></th>
		</tr>
		<tr>
			<td><p>Nhập mật khẩu mới</p></td>
		</tr>
		<tr>
			<td class="">
				<input type="hidden" name="id" value="<?php echo $id ?>">
			</td>
		</tr>
		<tr>
			<td class="">
				<input type="password" name="pass">
			</td>
		</tr>
	
		<tr>
			<td colspan="2">
				<input type="submit" name="submit-newpass" value="Đổi mật khẩu">
			</td>
		</tr>
	</table>
	</form>
</div>
<script src="./public/style/email-validation.js"></script>
</body>
</html>