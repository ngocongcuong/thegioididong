<?php
$id_order = $_GET['id_order'];
if (isset($_SESSION['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	$data_order        = $db->get('order_',array('id_order'=>$id_order));
	$data_order_detail = $db->get('order_detail',array('id_order'=>$id_order));
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$data_order        = $db->get('order_',array('id_order'=>$id_order));
	$data_order_detail = $db->get('order_detail',array('id_order'=>$id_order));
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
}else{
	header('location: ?controller=login');
}
require_once './view/chitiet_donhang.php';

?>