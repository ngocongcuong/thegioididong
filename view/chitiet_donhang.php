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
			<div>
				<h3>Chi tiết đơn hàng</h3>
				<h4>
					<?php foreach ($data_order as $key => $value) { ?>
					<ul>
						<li>Tên khách hàng: <?php echo $value['customer'] ?></li>
						<li>Số điện thoại: <?php echo $value['tel'] ?></li>
						<li>Địa chỉ: <?php echo $value['address'] ?></li>
						<li>Giá trị đơn hàng: <?php echo number_format($value['order_amount']) ?> vnđ</li>
						<li style="color: red;"><?php 
						echo $value['trangthai']==0? "Chưa duyệt":"Đã duyệt";
						 ?></li>
					</ul>
					<?php } ?>
				</h4>
			</div>
			<table class="tbl-nhanvien">
				<tr>
					<th>STT</th>
					<th>Hình ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Số lượng mua</th>
					<th>Số lượng còn</th>
					<th>Thành tiền</th>
					<th>Tùy chọn</th>
				</tr>
				<?php
					$stt = 1;  
					foreach ($data_order_detail as $key => $value) { 
							$data_sanpham = $db->get('sanpham',array('id_product'=>$value['id_product']));
				?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><img width="50px;" src="<?php echo $data_sanpham['0']['img_link']; ?>"></td>
					<td><?php echo $data_sanpham['0']['name']; ?></td>
					<td><?php echo number_format($data_sanpham[0]['price_after']); ?></td>
					<td><?php echo $value['qty']; ?></td>
					<td><?php echo $data_sanpham[0]['amount'] ?></td>
					<td><?php echo $value['amount']; ?></td>
					<td style="color: red;"><?php $id = $value['id_product']; if (isset($error[$id])) {
						echo $error[$id];
					} ?>
						<a href=""><i class="fas fa-edit"></i></a>
					</td>
				</tr>
			<?php $stt++; } ?>
			</table>
			<?php if ($data_order[0]['trangthai']==0) { ?>
				<a href="?controller=duyet_donhang&id_order=<?php echo $data_order[0]['id_order'] ?>">Duyệt đơn hàng này</a>
			<?php } ?>
			<a href="?controller=list_donhang">Trở về</a>
		</div>
	</div>
</div>


	<!--<a href="?controller=logout">Đăng xuất</a>-->
</body>
</html>