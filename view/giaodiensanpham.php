<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./public/style/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_header.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_chitiet_sp.css?v=<?php echo time(); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="header_item">
			<a href="./index.php" class="header_logo"><i class="icon-logo"></i></a>
			<div class="bordercol"></div>
			<a href="#" class="header_address">
				<p class="xemgiakm">Xem giá khuyến mãi tại</p>
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
</div>                                             <!-- kết thúc header -->

<div id="container">
	<div class="chitietsp">
		<div class="navigation">
			<a href=""><?php echo $catalog[0]['name']; ?></a>
			<i class="fas fa-chevron-right nutnavigation"></i>
			<a href="">
				<?php echo $catalog[0]['name'].' '.$thuonghieu[0]['name'];
				?>
			</a>
		</div>
		<h4>
			<?php 
				echo $catalog[0]['name'].' '.$productchitiet[0]['name'];
			 ?>
		</h4>
		<div class="box-main">
			<?php
			foreach ($productchitiet as $key => $value) {
			?>
			<div class="box-left">
				<div class="content-main">
					<img src="<?php echo $value['img_link'] ?>">
					<?php include 'mota_sanpham/Samsung Galaxy A52 5G/Samsung Galaxy A52 5G.html'; ?>
				</div>
				<div class="nut-hienthi">
					<button id="show-sp">Hiển thị thêm</button>
					<button id="hide-sp">Thu gọn</button>
				</div>
				<hr>
				<div class="danhgia">
					<form action="?controller=rating" method="post">
						<div>
							<h3>Đánh giá sản phẩm</h3>
							<span>Đánh giá chất lượng từ khách hàng</span>
							<?php include 'controller/c_get_rate.php'; ?>
							<?php foreach ($rate as $r => $val) {
							?>
							<div class="star-rating rateYo" data-rating='<?php echo $val["rate_avg"]; ?>'></div>
							Trung bình <?php echo substr($val["rate_avg"], 0, 3); ?>
							<hr>
							<?php } ?>
							<div>

								<?php foreach ($get_rate as $c => $coment) {
								 ?>
								<p><b><?php echo $coment['name'] ?></b></p>
								<div data-rateyo-star-width="16px" class="star-rating rateYo" data-rating='<?php echo $coment["rating"]; ?>'></div>
								<p><?php echo $coment['content']; ?></p>
							<?php } ?>
							</div>
						</div>
						<hr>
						<div>
							<input type="hidden" name="id_product" value="<?php echo $productchitiet[0]['id_product'] ?>">
							<textarea placeholder="Mời bạn chia sẻ thêm một số cảm nhận..." name="content" style="width: 700px;" required=""></textarea>
							<input type="text" name="name" placeholder="Họ và tên (bắt buộc)">
							<input type="text" name="tel" placeholder="Số điện thoại (bắt buộc)" required="">
							<input type="email" name="email" placeholder="Email (không bắt buộc)">
						</div>
						<div class="rateyo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5" data-rateyo-score="3"></div>
						<span class="result">0</span>
						<input type="hidden" name="rating">
						<div><input type="submit" name="add" value="Gửi đánh giá của bạn"></div>
					</form>
					<hr>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
				</div>
			</div><!--boxleft-->
			<div class="box-right">
				<table class="bangmotasp" style="width: 450px">
					<h3>Cấu hình chi tiết</h3>
					<tr>
						<td>Tên sản phẩm</td>
						<td><?php echo $value['name']; ?></td>
					</tr>
					<tr>
						<td>Màn hình</td>
						<td><?php echo $value['manhinh']; ?></td>
					</tr>
					<tr>
						<td>Camera sau</td>
						<td><?php echo $value['camerasau']; ?></td>
					</tr>
					<tr>
						<td>Camera trước</td>
						<td><?php echo $value['cameratruoc']; ?></td>
					</tr>
					<tr>
						<td>Bộ vi xử lý</td>
						<td><?php echo $value['chip']; ?></td>
					</tr>
					<tr>
						<td>Ram</td>
						<td><?php echo $value['ram']; ?></td>
					</tr>
					<tr>
						<td>Bộ nhớ trong</td>
						<td><?php echo $value['rom']; ?></td>
					</tr>
					<tr>
						<td>Pin, sạc</td>
						<td><?php echo $value['pin'].', '.$value['sac']; ?></td>
					</tr>
					<tr>
						<td colspan="2"><a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="buy-chitiet">Mua ngay</a></td>
					</tr>
				</table>
			</div><!--box right-->
			<?php } ?>
			<div class="products lienquan">
				<?php foreach ($product_lienquan as $key => $value) {
				?>
				<div class="product">
					<div class="item">
						<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
							<div class="item-label"><span>Trả góp 0%</span></div>
							<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
							<P><?php if($productchitiet[0]['id_product'] == $value['id_product']) echo "Bạn đang xem"; ?></P>
							<strong class="detail"><?php echo $value['name'] ?></strong>
							<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
							<p class="price"><s><?php echo number_format($value['price']) ?><sup><u>đ</u></sup></s></p>
							<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div><!--box main-->
	</div>
</div>

<?php include 'footer.html'; ?> 				<!-- chèn thành phần footer -->

<script src="./public/style/js_chitietsp.js"></script>
<script type="text/javascript">
	$('.rateYo').each(function() {
  $(this).rateYo({
    halfStar: true,
    rating: this.dataset.rating,
    readOnly: true
  });
});
</script>
</body>
</html>