<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
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
				<li></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>