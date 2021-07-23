<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	//lấy thông tin chi tiết sản phẩm trong database
	$productchitiet = $db->get('sanpham', array('id_product'=>$id));
	//lấy catalogid của product đó
	$catalog = $db->get('catalog', array('id'=>$productchitiet[0]['catalog_id']));
	//lấy dữ liệu những sản phẩm liên quan theo catalog id của sản phẩm đó chỉ lấy 4 sản phẩm
	$product_lienquan = $db->get_limit('sanpham', array('catalog_id'=>$productchitiet[0]['catalog_id']),5);
	//lấy thương hiệu ở bảng thương hiệu bằng productchitiet['thuonghieu']
	$thuonghieu = $db->get('thuonghieu', array('id'=>$productchitiet[0]['thuonghieu']));
}
require_once './view/giaodiensanpham.php';
?>