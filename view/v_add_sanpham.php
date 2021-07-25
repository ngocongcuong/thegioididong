<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_page_admin.css?v=<?php echo time(); ?>">
	<script src="./public/ckeditor/ckeditor.js"></script>
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
			<!----------------------------------------------------------------thêm sản phẩm--------->
			<div>
			<div class="box-addsp">
			<form class="add-sp" action="?controller=themsanpham" method="POST" enctype="multipart/form-data">
				<h2>Thêm sản phẩm mới</h2>
				<span class="lb-ip">Tên sản phẩm</span><input type="text" name="tensanpham">
				<p class="css-er"><?php if (isset($error['tensanpham'])) { echo "<br>".$error['tensanpham'];} ?></p><br>
				<span class="lb-ip">Giá trị ban đầu</span><input type="text" name="price"><br>
				<p class="css-er"><?php if (isset($error['giasanpham'])) { echo "<br>".$error['giasanpham'];} ?></p><br>
				<span class="lb-ip">Giá trị hiện tại</span><input type="text" name="price_after"><br>
				<p class="css-er"><?php if (isset($error['giasanpham_new'])) { echo "<br>".$error['giasanpham_new'];} ?></p><br>
				<span class="lb-ip">Số lượng</span><input type="text" name="amount">
				<p class="css-er"><?php if (isset($error['soluong'])) { echo "<br>".$error['soluong'];} ?></p><br>
				<span>Danh mục</span><select name="catalogid" class="slc-add left">
					<option value="1">Điện thoại</option>
					<option value="2">Máy tính bảng</option>
					<option value="3">Laptop</option>
					<option value="4">Đồng hồ thông minh</option>
					<option value="5">Đồng hồ thời trang</option>
				</select><br><br>
				<span>Thương hiệu</span><select name="thuonghieu" class="slc-add right">
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
				</select><br><br>
				<label for="fileSelect">Filename:</label>
				<input type="file" name="photo" id="fileSelect">
				<p class="css-er"><?php if (isset($error['photo'])) { echo $error['photo'];} ?></p><br>
				<span class="lb-ip">Ảnh mở hộp<br>(Chọn nhiều ảnh)</span><input type="file" name="img-product[]" multiple="multiple"><br><br>
				<span class="lb-ip">Mô tả chi tiết</span>
				<textarea class="ckeditor" name="mota_sp" id="mota_sp">
					mô tả chi tiết
				</textarea>
				<input type="submit" name="submit" value="Thêm sản phẩm"><br>
			</form>
			</div>
			</div>
			<!----------------------------------------------------------------thêm sản phẩm--------->
		</div>
	</div>
</div>


	<!--<a href="?controller=logout">Đăng xuất</a>-->
<script type="text/javascript">/*kết nối ckfinder với ckeditor*/
	CKEDITOR.replace( 'mota_sp', {
	filebrowserBrowseUrl: './public/ckfinder/ckfinder.html',
	filebrowserUploadUrl: './public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
	} );
</script>
</body>
</html>