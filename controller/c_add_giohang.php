<?php
//lấu id trên url
$id = $_GET['id'];
//lấy dữ liệu các sản phẩm từ bảng theo id vừa lấy đc
$product = $db->get('sanpham', array('id_product'=>$id));
//xử lý session giỏ hàng
//b1 kiểm tra xem session['cart'] đã tồn tại mặt hàng nào chưa
if (isset($_SESSION['cart'])) {
		$_SESSION['qty'] += 1; //tăng tổng sl sản phẩm hiển thị trên icon giỏ hang
	//nếu đã tồn tại sesion['cart'] thì kiểm tra san phâm đã tồn tại trong giỏ hàng chưa
	if (isset($_SESSION['cart'][$id])) {
		//nếu sản phẩm đã tồn tại thì chỉ cần thêm số lượng
		$_SESSION['cart'][$id]['sl'] += 1;
	}
	else {
		//nếu sp chưa tồn tại thì thêm thông tin vào giỏ hàng
		$_SESSION['cart'][$id]['id_product']=$product[0]['id_product'];
		$_SESSION['cart'][$id]['sl']=1;
		$_SESSION['cart'][$id]['price_after']=$product[0]['price_after'];
		$_SESSION['cart'][$id]['img_link']=$product[0]['img_link'];
		$_SESSION['cart'][$id]['name']=$product[0]['name'];
	}
}
else {
	//nếu chưa có session['cart'] thì tạo và thêm thông tin vào giỏ hàng
		$_SESSION['cart'][$id]['id_product']=$product[0]['id_product'];
		$_SESSION['cart'][$id]['sl']=1;
		$_SESSION['cart'][$id]['price_after']=$product[0]['price_after'];
		$_SESSION['cart'][$id]['img_link']=$product[0]['img_link'];
		$_SESSION['cart'][$id]['name']=$product[0]['name'];
		$_SESSION['qty'] = 1;
		}
header('location: ?controller=trangchu');
?>