<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_page_admin.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="header">
	<ul class="tuychon">
		<li><i class="fab fa-microsoft"></i>Administrator</li>
		<li>
			<i class="fas fa-reply"></i>
			<a href="?controller=trangchu">Vào trang web</a>
		</li>
		<li><a href="">Liên hệ</a></li>
		<li><a href="">Đơn hàng</a></li>
		<li>
			<?php echo "Xin chào ".$user[0]['username']; ?>
			<ul class="sub">
				<li><a href="?controller=logout">Đăng xuất</a></li>
			</ul>
		</li>
	</ul>
</div>
<div class="container">
	<div class="menu">
		<ul class="menu-doc">
			<li class="chucnang"><i class="fas fa-home"></i><a href="">Trang chủ Admin</a></li>
			<li class="chucnang"><i class="fas fa-chart-pie"></i>Quản trị Danh mục<i class="fas fa-sort-down flright"></i>
				<ul class="sub2">
					<li><i class="fas fa-angle-right flleft"></i><a href="">Loại danh mục</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Sản phẩm</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Bài viết</a></li>
				</ul>
			</li>
			<li class="chucnang"><i class="fas fa-bars"></i>Quản trị giao diện<i class="fas fa-sort-down flright"></i>
				<ul class="sub2">
					<li><i class="fas fa-angle-right flleft"></i><a href="">Slider</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Hình ảnh</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Hỗ trợ trực tuyến</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Thông tin</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Nội dung khác</a></li>
				</ul>
			</li>
			<li class="chucnang"><i class="fas fa-dollar-sign"></i>Quản trị thông tin<i class="fas fa-sort-down flright"></i>
				<ul class="sub2">
					<li><i class="fas fa-angle-right flleft"></i><a href="?controller=list_donhang">Danh sách đơn hàng</a></li>
					<li><i class="fas fa-angle-right flleft"></i><a href="">Khách hàng Liên hệ</a></li>
				</ul>
			</li>
			<li class="chucnang"><i class="fas fa-file-alt"></i><a href="?controller=product">Quản lý sản phẩm</a><i class="fas fa-sort-down flright"></i></li>
			<li class="chucnang"><i class="far fa-user"></i>Cấu hình User<i class="fas fa-sort-down flright"></i>
				<ul class="sub2">
					<li><i class="fas fa-angle-right flleft"></i><a href="?controller=nhanvien">Quản lý user</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="box-main">
		<div class="navigation">
			
		</div>
		<div class="content">
			<h2>Đăng ký thành viên</h2>

			<form method="POST" action="?controller=add_nhanvien" name="form1" onsubmit="ValidateEmail(document.form1.email)">
				<table>
					<tr>
						<td>Tài khoản</td>
						<td><input type="text" name="username"><br>
							<p><?php if (isset($error['username'])) { echo $error['username'];} ?></p>
						</td>
					</tr>
					<tr>
						<td>Họ tên</td>
						<td><input type="text" name="name">
							<p><?php if (isset($error['name'])) { echo $error['name'];} ?></p>
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email">
							<p><?php if (isset($error['email'])) { echo $error['email'];} ?></p>
						</td>
					</tr>
					<tr>
						<td>Giới tính</td>
						<td>
							<select name="gioitinh">
								<option value="nam">Nam</option>
								<option value="nữ">Nữ</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Năm sinh</td>
						<td><input type="text" name="namsinh">
							<p><?php if (isset($error['namsinh'])) { echo $error['namsinh'];} ?></p>
						</td>
					</tr>
					<tr>
						<td>Loại tài khoản</td>
						<td>
							<select name="lv">
								<option value="1">Quản lý</option>
								<option value="2">Nhân viên</option>
							</select>
							<p><?php if (isset($error['lv'])) { echo $error['lv'];} ?></p>
						</td>
					</tr>
					<tr>
						<td>Mật khẩu</td>
						<td><input type="password" name="password">
							<p><?php if (isset($error['password'])) { echo $error['password'];} ?></p>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit-nhanvien" value="Thêm nhân viên"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>


	<!--<a href="?controller=logout">Đăng xuất</a>-->
<script src="./public/style/email-validation.js"></script>
</body>
</html>