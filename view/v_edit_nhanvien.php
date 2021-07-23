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
			<form method="POST" action="?controller=xuly_nhanvien&method=edit_nhanvien&id=<?php echo $data_nhanvien[0]['id']; ?>">
				<table>
					<caption>Cập nhật thông tin nhân viên</caption>
					<tr>
						<th>Thông tin cũ</th>
						<th>Thông tin mới</th>
					</tr>
					<tr>
						<td>Tài khoản</td>
						<td><?php echo $data_nhanvien[0]['username'] ?></td>
					</tr>
					<tr>
						<td>Tên</td>
						<td>
							<input type="text" name="name" value="<?php echo $data_nhanvien[0]['name']; ?>">
							<?php if (isset($error['name'])) {
								echo "<br>".$error['name'];
							} ?>
						</td>
					</tr>
					<tr>
						<td>Giới tính</td>
						<td>
							<select name="gt">
								<option value="nam">Nam</option>
								<option value="nữ" <?php if ($data_nhanvien[0]['gioitinh'] == 'nữ') echo 'selected'; ?>>Nữ</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Năm sinh</td>
						<td>
							<input type="text" name="ns" value="<?php echo $data_nhanvien[0]['ns']; ?>">
							<?php if (isset($error['namsinh'])) {
								echo "<br>".$error['namsinh'];
							} ?>
						</td>
					</tr>
					<tr>
						<td>
							<a style="border: 1px solid black;" href="?controller=nhanvien">Hủy</a>
						</td>
						<td>
							<input type="submit" name="sua" value="Sửa">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>


	<!--<a href="?controller=logout">Đăng xuất</a>-->
</body>
</html>