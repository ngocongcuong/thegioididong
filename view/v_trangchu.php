<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #white;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
	<link rel="stylesheet" type="text/css" href="./public/style/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./public/style/font-awesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="./public/style/css_header.css">
	<link rel="stylesheet" type="text/css" href="./public/style/grid.css"> <!-- thắng thêm -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<script src="./public/style/jssor.slider-28.1.0.min.js"></script>
    <script src="./public/style/js_sliderbanner.js"></script>
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

                                             <!-- kết thúc header -->


<div id="container">
	<div class="banner">
		
		<div id="jssor_1" style="position:relative;margin-top:10px;margin-bottom: 10px;left:0px;width:830px;height:350px;overflow:hidden;visibility:hidden;display: inline-block;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:830px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="./public/img/slide/sn-chung830-300-830x300.png" />
                <img data-u="thumb" src="./public/img/slide/sn-chung830-300-830x300.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/830-300-830x300-1.png" />
                <img data-u="thumb" src="./public/img/slide/830-300-830x300-1.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/830-300-830x300-4.png" />
                <img data-u="thumb" src="./public/img/slide/830-300-830x300-4.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/830-300-830x300-5.png" />
                <img data-u="thumb" src="./public/img/slide/830-300-830x300-5.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/830-300-830x300-6.png" />
                <img data-u="thumb" src="./public/img/slide/830-300-830x300-6.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/830-300-830x300-8.png" />
                <img data-u="thumb" src="./public/img/slide/830-300-830x300-8.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/renoz-830-300-830x300.png" />
                <img data-u="thumb" src="./public/img/slide/renoz-830-300-830x300.png" />
            </div>
            <div>
                <img data-u="image" src="./public/img/slide/sn-dh-830-300-830x300.png" />
                <img data-u="thumb" src="./public/img/slide/sn-dh-830-300-830x300.png" />
            </div>
            
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:830px;height:60px;background-color:yellow;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:160px;height:50px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:120px;left:0px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:120px;right:0px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
        </div><!--id="jssor_1-->
        <div class="banner-hot" style="display: flex;flex-wrap: wrap;width: 360px;height: 360px;float: right;margin-top: 10px;">
            <a style="margin-left: 8px;" href="#"><img src="./public/img/banner-hot/Group3913-340x340 .jpg" width="170px"></a>
            <a style="margin-left: 8px;" href="#"><img src="./public/img/banner-hot/laptopdesk-1-340x340-2.jpg" width="170px"></a>
            <a style="margin-left: 8px;" href="#"><img src="./public/img/banner-hot/laptopdesk-340x340-4.jpg" width="170px"></a>
            <a style="margin-left: 8px;" href="#"><img src="./public/img/banner-hot/4-340x340-340x340.jpg" width="170px"></a>
        </div>
	</div><!--banner-->
	<div class="san-pham-hot">
		<div><p class="san-sale"><i>Săn Sale Online Mỗi Ngày</i></p></div>
		<div class="slider">
			<div class="products">
				<?php
					foreach ($product as $key => $value) {		
				?>
				<div class="sph">
					<div class="item">
						<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
							<div class="item-label"><span>Trả góp 0%</span></div>
							<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
							<strong class="detail"><?php echo $value['name'] ?></strong>
							<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
							<p class="price"><s><?php echo number_format($value['price']) ?><sup><u>đ</u></sup></s></p>
							<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<button class="icon prew" type="button" onclick="back();"><i class="fas fa-chevron-left"></i></button>
			<button class="icon next" type="button" onclick="next();"><i class="fas fa-chevron-right"></i></button>
		</div>
	</div> 
	<!-- thắng làm ( điện thoại nổi bật) -->
			<div class="row">
				<div class="col-lg-6 menu-2">
					<b> ĐIỆN THOẠI NỔI BẬT</b>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=giaodienchitiet&id=52">Samsung Galaxy A52</a>
					</div>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=giaodienchitiet&id=43">Iphone 12 Pro Max 128GB</a>
					</div>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=find&catalog=1">Xem Tất Cả <?php echo $count1; ?> điện thoại</a>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($product2 as $key => $value) { ?>
				<div class="col-lg-2dot4">
					<div class="product">
						<div class="item">
							<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
								<div class="item-label"><span>Trả góp 0%</span></div>
								<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
								<strong class="detail"><?php echo $value['name'] ?></strong>
								<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
								<p class="price"><s><?php echo number_format($value['price']) ?><sup><u>đ</u></sup></s></p>
								<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
							</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div><hr>
			<div class="row">
				<div class="col-lg-6 menu-2">
					<b> LAPTOP NỔI BẬT</b>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=giaodienchitiet&id=75">Laptop Lenovo</a>
					</div>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=giaodienchitiet&id=76">Laptop HP</a>
					</div>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=find&catalog=3">Xem Tất Cả <?php echo $count2; ?> Laptop</a>
					</div>
				</div>
			</div>
			<div class="row">
					<?php
						foreach ($product3 as $key => $value) {		
					?>
					<div class="col-lg-2dot4">
						<div class="product">
							<div class="item">
								<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
									<div class="item-label"><span>Trả góp 0%</span></div>
									<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
									<strong class="detail"  style="font-size: 14px"><?php echo $value['name'] ?></strong>
									<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
									<p class="price"><s><?php echo number_format($value['price']) ?><sup><u>đ</u></sup></s></p>
									<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
								</a>
							</div>
						</div>
					</div>
					<?php } ?>
			</div><hr>
			<div class="row">
				<div class="col-lg-6 menu-2">
					<b> ĐỒNG HỒ NỔI BẬT</b>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=giaodienchitiet&id=23">Đồng Hồ Huawei</a>
					</div>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=giaodienchitiet&id=31">Đồng Hồ Mi Band 5</a>
					</div>
				</div>
				<div class="col-lg-2 menu-1">
					<div class="menu-1-content">
						<a href="?controller=find&catalog=4">Xem Tất Cả <?php echo $count3; ?> Đồng Hồ</a>
					</div>
				</div>
			</div>
			<div class="row">
					<?php
						foreach ($product4 as $key => $value) {		
					?>
					<div class="col-lg-2dot4">
						<div class="product">
							<div class="item">
								<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
									<div class="item-label"><span>Trả góp 0%</span></div>
									<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
									<strong class="detail"  style="font-size: 14px"><?php echo $value['name'] ?></strong>
									<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
									<p class="price"><s><?php echo number_format($value['price']) ?><sup><u>đ</u></sup></s></p>
									<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
								</a>
							</div>
						</div>
					</div>
					<?php } ?>
			</div><hr>



															<!-- phần kết quả tìm kiếm -->
	

	<?php
		if (isset($_GET['submit'])) {
			if(!empty($product_timkiem)) {
	echo '<div class="timkiem">';
		
				echo "<div class='result_'><h3 class='result_search'>Danh sách sản phẩm tìm thấy</h3></div>";
				foreach ($product_timkiem as $key => $value) {				
		?>
		<div class="product">
			<div class="item">
				<a href="?controller=giaodienchitiet&id=<?php echo $value['id_product'] ?>">
					<div class="item-label"><span>Trả góp 0%</span></div>
					<div class="item-img"><img src="<?php echo $value['img_link'] ?>"></div>
					<strong class="detail"><?php echo $value['name'] ?></strong>
					<p><span class="price_after"><?php echo number_format($value['price_after']) ?><sup><u>đ</u></sup></span></p>
					<p class="price"><s><?php echo number_format($value['price']) ?><sup><u>đ</u></sup></s></p>
					<a href="?controller=add_giohang&id=<?php echo $value['id_product'] ?>" class="add_to_card">Mua ngay</a>
				</a>
			</div>
		</div>
		<?php } echo "</div>"; } else {
				echo "<div class='result'><h3 class='result_search'>Không tìm thấy sản phẩm phù hợp</h3></div>";
		}} ?>
</div>										<!-- thẻ đóng div class container -->

<?php include 'footer.html'; ?> 				<!-- chèn thành phần footer -->

<script type="text/javascript">jssor_1_slider_init();
    </script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./public/style/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="./public/style/scr.js"></script>
</body>
</html>