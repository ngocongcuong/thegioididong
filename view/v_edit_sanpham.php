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
			<form method="POST" enctype="multipart/form-data" action="?controller=xuly_sanpham&method=edit_sanpham&id=<?php echo $data[0]['id_product']; ?>">
				<table>
					<caption>Cập nhật thông tin sản phẩm</caption>
					<tr>
						<th>Thông tin cũ</th>
						<th>Thông tin mới</th>
					</tr>
					<tr>
						<td>ID sản phẩm</td>
						<td><?php echo $data[0]['id_product'] ?></td>
					</tr>
					<tr>
						<td>Tên sản phẩm</td>
						<td>
							<input type="text" name="name" value="<?php echo $data[0]['name']; ?>">
							<?php if (isset($error['name'])) {
								echo "<br>".$error['name'];
							} ?>
						</td>
					</tr>
					<tr>
						<td>Danh mục</td>
						<td>
							<select name="catalogid">
								<option value="1">Điện thoại</option>
								<option value="2">Máy tính bảng</option>
								<option value="3">Laptop</option>
								<option value="4">Đồng hồ thông minh</option>
								<option value="5">Đồng hồ thời trang</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Thương hiệu</td>
						<td>
							<select name="thuonghieu">
								<option value="1">APPLE</option>
								<option value="2">SAMSUNG</option>
								<option value="3">OPPO</option>
								<option value="4">VIVO</option>
								<option value="5">XIAOMI</option>
								<option value="6">REALME</option>
								<option value="7">Vsmart</option>
								<option value="8">GOOGLE</option>
								<option value="9">NOKIA</option>
								<option value="10">HUAWWEI</option>
								<option value="11">MOBELL</option>
								<option value="12">ITEL</option>
								<option value="13">MASSTEL</option>
								<option value="14">ENERGIZER</option>
								<option value="15">ASUS</option>
								<option value="16">HP</option>
								<option value="17">LENOVO</option>
								<option value="18">ACER</option>
								<option value="19">DELL</option>
								<option value="20">LG</option>
								<option value="21">MSI</option>
								<option value="22">CANON</option>
								<option value="23">SONY</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Giá trị sản phẩm</td>
						<td><input type="text" name="price" value="<?php echo $data[0]['price_after']; ?>"></td>
					</tr>
					<tr>
						<td>Số lượng</td>
						<td><input type="text" name="amount" value="<?php echo $data[0]['amount']; ?>"></td>
					</tr>
					<tr>
						<td><label for="fileSelect">Chọn ảnh:</label></td>
						<td><input type="file" name="photo" id="fileSelect"></td>
					</tr>
					<tr>
						<td>
							<input type="button" name="" value="Hủy" onclick="?controller=product">
						</td>
						<td>
							<input type="submit" name="submit" value="Sửa">
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