<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_v_login.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="fm-login">
	<form action="?controller=pass_1" method="POST" name="form2" onsubmit="ValidateEmail(document.form2.email)">
	<table>
		<tr>
			<th rowspan="4"><img width="245px" src="./public/img/lock.png"></th>
			<th>Tìm tài khoản của bạn</th>
		</tr>
		<tr>
			<td>Vui lòng nhập email để tìm kiếm tài khoản của bạn</td>
		</tr>
		<tr>
			<td class="">
				<input type="text" name="email" placeholder="email">
			</td>
		</tr>
		<tr>
			<td class="">
				<?php
				if (isset($error)) {
					echo $error;
				}?>
			</td>
		</tr>
	
		<tr>
			<td colspan="2">
				<input type="submit" name="timkiem" value="Tìm kiếm">
			</td>
		</tr>
	</table>
	</form>
</div>
<script src="./public/style/email-validation.js"></script>
</body>
</html>