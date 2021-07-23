<?php
//kiểm tra xem có tồn tại keyword trên tranh url không
if (isset($_GET['keyword']) && $_GET['keyword'] != null) {
	$keyword = $_GET['keyword'];
	//nếu tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
	$product_timkiem = $db->get_like('sanpham', 'name', $keyword);
} else {
	$product = $db->get('sanpham',array());
}
//lấy dữ liệu trong bảng quanlybanhang
$product = $db->get_limit('sanpham',array(), 15);
//
$product2 = $db->get_limit_desc('sanpham',array('catalog_id'=>1),'id_product',10);
$product3 = $db->get_limit_desc('sanpham',array('catalog_id'=>3),'id_product',5);
$product4 = $db->get_limit_desc('sanpham',array('catalog_id'=>4),'id_product',5);
$product5 = $db->get('sanpham',array('catalog_id'=>1));
$product6 = $db->get('sanpham',array('catalog_id'=>3));
$product7 = $db->get('sanpham',array('catalog_id'=>4));
$count1 = count($product5);
$count2 = count($product6);
$count3 = count($product7);
require_once './view/v_trangchu.php';

?>