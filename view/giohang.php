<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./public/style/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./public/style/css_giohang.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_header.css">
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="header_item">
			<a href="./index.php" class="header_logo"><i class="icon-logo"></i></a>
			<div class="bordercol"></div>
			<a href="#" class="header_address">
				<p>Xem giá khuyến mãi tại</p>
				<span>La Khê, Hà Đông</span>
			</a>
			<form method="get" action="index.php" name="frm-search" class="frm-search">
				<input type="hidden" name="controller" value="trangchu">
				<input type="search" name="keyword" placeholder="Bạn tìm gì..." value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
				<input type="submit" name="submit" value="">
			</form>
			<a href="?controller=giohang" class="header_cart">
				<?php
					if (isset($_SESSION['qty']) && $_SESSION['qty']>0) {
						echo "<p class='qty'>".$_SESSION['qty']."</p>";
					} else {
						echo "<i class='icon-cart'></i>";
					}
				?>
				<span>Giỏ hàng</span>
			</a>
			<a href="?controller=lich-su-mua-hang" class="header_history">Lịch sử mua hàng</a>
			<div class="bordercol"></div>
			<a href="" class="header_hot">
				<p class="dotnew"><span class="animation"></span></p>
				<span class="tro-gia">Trợ giá mùa dịch giảm đến 50%</span>
			</a>
			<div class="header_listtop">
				<div class="bordercol"></div>
				<div class="divitem">
					<a href="">24<br>Công nghệ</a>
				</div>
				<div class="bordercol"></div>
				<div class="divitem">
					<a href="">Hỏi Đáp</a>
				</div>
				<div class="bordercol"></div>
				<div class="divitem">
					<a href="">Game App</a>
				</div>
			</div>
		</div>
	</div>

	<div class="header_bottom">
		<div class="header_center">
			<ul class="main_menu">
				<li><a href="?controller=find&catalog=1"><i class="icon-sanpham"></i><span>Điện thoại</span></a></li>
				<li><a href="?controller=find&catalog=3"><i class="icon-sanpham"></i><span>Laptop</span></a></li>
				<li><a href="?controller=find&catalog=2"><i class="icon-sanpham"></i><span>Table</span></a></li>
				<li><a href="?controller=find&catalog=6"><i class="icon-sanpham"></i><span>Phụ kiện</span><i class="fas fa-sort-down"></i></a></li>
				<li><a href="?controller=find&catalog=4"><i class="icon-sanpham"></i><span>Đồng hồ thông minh</span></a></li>
				<li><a href="?controller=find&catalog=5"><i class="icon-sanpham"></i><span>Đồng hồ thời trang</span></a></li>
				<li><a href="?controller=find&catalog=7"><i class="icon-sanpham"></i><span>PC, Máy in</span></a></li>
				<li><a href="?controller=find&catalog=8"><span>Máy cũ giá rẻ</span></a></li>
				<li><a href=""><span>Sim, Thẻ cào</span></a></li>
				<li><a href=""><span>Trả góp, điện nước</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
	<?php
		$amount = 0;
		if (isset($_SESSION['cart'])) { ?>
	<table>
		<caption><h3>Giỏ hàng</h3></caption>
		<tr>
			<th>Hình ảnh</th>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
			<th>Tùy chọn</th>
		</tr>
		<?php
		foreach ($_SESSION['cart'] as $key => $value) {
			$amount += $value['sl'] * $value['price_after'];
		?>
		<tr>
			<td><img width="100px" src="<?php echo $value['img_link'] ?>"></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo number_format($value['price_after']); ?></td>
			<td><?php echo $value['sl']; ?></td>
			<td><?php echo number_format($value['sl'] * $value['price_after']).' đ'; ?></td>
			<td>
				<a class="bt sub" href="?controller=xuly_cart&method=prev&id=<?php echo $value['id_product'] ?>"><i class="fas fa-minus"></i></a>
				<a class="bt add" href="?controller=xuly_cart&method=next&id=<?php echo $value['id_product'] ?>"><i class="fas fa-plus"></i></a>
				<a class="bt del" href="?controller=xuly_cart&method=del&id=<?php echo $value['id_product'] ?>"><i class="fas fa-trash"></i></a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<div>
		<h2>Tổng tiền: <?php echo number_format($amount); ?><sup><u>vnđ</u></sup></h2>
	</div>
	<div class="frmtt">
		<p>THÔNG TIN KHÁCH HÀNG</p>
		<form name="frm-thanhtoan" action="?controller=thanh-toan" method="post">
			<input type="text" name="tenkhach" placeholder="Họ và Tên" required="">
			<input type="text" name="tel" placeholder="Số điện thoại" required="">
			<input type="text" name="diachi" placeholder="Địa chỉ" required="">
			<input type="email" name="email" placeholder="Email" required="">
			<input type="submit" name="btn-thanhtoan" value="Thanh toán">
		</form>
	</div>
	<?php } //thẻ đóng if
	 else { ?>
		<div class="cartempty">
			<i class="cartnew-empty"></i>
			<p>Không có sản phẩm nào trong giỏ hàng</p>
			<a href="?controller=trangchu" class="backhome">VỀ TRANG CHỦ</a>
			<p>Khi cần trợ giúp vui lòng gọi <a href="tel:18006996">1800.6996</a> hoặc <a href="tel:0962531262">0962.531.262</a> (7h30-22h)</p>
		</div>
	<?php }?>
</div>
</body>
</html>