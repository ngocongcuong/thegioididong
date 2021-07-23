<?php
if (isset($_SESSION['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	$product=$db->get('sanpham', array());
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$product=$db->get('sanpham', array());
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
}else{
	header('location: ?controller=login');
}
require_once './view/v_admin_sanpham.php';
?>