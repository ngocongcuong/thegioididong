<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		.lg-th {
			vertical-align: middle;
		}
		.fin-submit {
			margin-top: 20px;
			width: 200px;
			font-size: 20px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./public/style/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_header.css?v=<?php echo time(); ?>">
	<script type="./public/ckeditor/ckeditor.js"></script>
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
				<li><a href="?controller=find&catalog=6"><i class="icon-sanpham"></i><span>Phụ kiện </span><i class="fas fa-sort-down"></i></a></li>
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

                                             <!-- kết thúc header -->


<div id="container">
	<div class="find-box">
		<form method="POST" action="?controller=find&catalog=<?php echo $catalog; ?>">
		<div class="find-top">
			<h3>Chọn hãng sản xuất</h3>
			<input type="checkbox" id="checkbox1" name="thuonghieu[]" value="1"><label for="checkbox1"><img class="lg-th" src="./public/img/logo/apple-7HolmJ.png"></label><input type="checkbox" id="checkbox2" name="thuonghieu[]" value="2"><label for="checkbox2"><img class="lg-th" src="./public/img/logo/samsung-2XG2f2.png"></label>
			<input type="checkbox" id="checkbox3" name="thuonghieu[]" value="3"><label for="checkbox3"><img class="lg-th" src="./public/img/logo/oppo-0bI09D.png"></label><input type="checkbox" id="checkbox4" name="thuonghieu[]" value="4"><label for="checkbox4"><img class="lg-th" src="./public/img/logo/vivo-7y2a02.png">
			</label><input type="checkbox" id="checkbox5" name="thuonghieu[]" value="5"><label for="checkbox5"><img class="lg-th" src="./public/img/logo/xiaomi-68M4uk.png"></label><input type="checkbox" id="checkbox6" name="thuonghieu[]" value="6"><label for="checkbox6"><img class="lg-th" src="./public/img/logo/realme-46XwW1.png"><br>

			</label><input type="checkbox" id="checkbox7" name="thuonghieu[]" value="7"><label for="checkbox7"><img class="lg-th" src="./public/img/logo/vsmart-0jxkWi.png"></label><input type="checkbox" id="checkbox8" name="thuonghieu[]" value="8"><label for="checkbox8"><img class="lg-th" width="160" src="./public/img/logo/google-logo-vector.png">
			</label><input type="checkbox" id="checkbox9" name="thuonghieu[]" value="9"><label for="checkbox9"><img class="lg-th" src="./public/img/logo/nokia-AC0wAF.png"></label><input type="checkbox" id="checkbox10" name="thuonghieu[]" value="10"><label for="checkbox10"><img class="lg-th" src="./public/img/logo/huawei-iy92IH.png"></label><br><br>
			<h3>Chọn mức giá</h3>
			<table>
				<tr>
					<td><input type="radio" name="price" value="1">Dưới 2 triệu</td>
					<td><input type="radio" name="price" value="2">Từ 2 đến 4 triệu</td>
					<td><input type="radio" name="price" value="3">Từ 4 đến 7 triệu</td>
					<td><input type="radio" name="price" value="4">Từ 7 đến 10 triệu</td>
				</tr>
				<tr>
					<td><input type="radio" name="price" value="5">Từ 10 đến 15 triệu</td>
					<td><input type="radio" name="price" value="6">Từ 15 đến 20 triệu</td>
					<td><input type="radio" name="price" value="7">20 triệu trở lên</td>
				</tr>
			</table>
			<input class="fin-submit" type="submit" name="find" value="Lọc sản phẩm">
		</div>
		<div class="find-bot">
			
		</div>
		</form>
	</div>
	<div class="dssp">
		<?php 
		foreach ($data_sanpham as $key => $value) {
		?>
		<div class="product">
			<div class="item">
				<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
					<div class="item-label"><span>Trả góp 0%</span></div>
					<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
					<strong class="detail"><?php echo $value['name'] ?></strong>
					<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
					<p class="price"><s><?php echo number_format($value['price']) ?></s><sup><u>đ</u></sup></p>
					<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
				</a>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="pagination">
		<?php
		//phần hiển thị phân trang
		//bước 7 : HIỂN THỊ PHÂN TRANG
		//nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
		if ($current_page > 1 && $total_page >1) {
			echo '<a href="?controller=find&catalog='.($catalog).'&page='.($current_page-1).'">Prev</a> | ';
		}
		//lặp khoảng giữa
		for ($i= 1; $i <= $total_page; $i++)
		{ 
			// nếu là trang hiện tại thì hiển thị thẻ span
			//ngược lại hiển thị thẻ a
			if ($i == $current_page) {
				echo '<span>'.$i.'</span> | ';
			}
			else{
				echo '<a href="?controller=find&catalog='.($catalog).'&page='.$i.'">'.$i.'</a> | ';
			}
		}
		//nếu current_page < $total_page và total_page > 1 mới hiển thị nút next
		if ($current_page < $total_page && $total_page >1) {
			echo '<a href="?controller=find&catalog='.($catalog).'&page='.($current_page+1).'">Next</a> | ';
		}
		?>
	</div>
</div>	<!-- thẻ đóng div class container -->
<?php include 'footer.html'; ?> 				<!-- chèn thành phần footer -->


<script src="./public/style/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="./public/style/scr.js"></script>
</body>
</html>