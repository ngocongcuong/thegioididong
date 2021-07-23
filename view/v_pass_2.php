<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_v_login.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="fm-login">
	<form action="?controller=pass_2" method="POST" name="form3">
	<table>
		<tr>
			<th rowspan="4"><img width="245px" src="./public/img/lock.png"></th>
			<th></th>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td class="">
				<?php if (isset($dt_user))
				{
					foreach ($dt_user as $key => $value)
					{ ?>
				<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			</td>
		</tr>
		<tr>
			<td class="">
				<?php
						echo "Gửi mã tới địa chỉ ". $value['email'];
					}
				}
				?>
			</td>
		</tr>
	
		<tr>
			<td colspan="2">
				<input type="submit" name="guimail" value="Gửi mã">
			</td>
		</tr>
	</table>
	</form>
</div>
<script src="./public/style/email-validation.js"></script>
</body>
</html>