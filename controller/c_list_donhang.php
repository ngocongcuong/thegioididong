<?php
if (isset($_SESSION['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	$data_order_notdone = $db->get('order_',array('trangthai'=>0));
	$data_order_done    = $db->get('order_',array('trangthai'=>1));
	
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$data_order_notdone = $db->get('order_',array('trangthai'=>0));
	$data_order_done    = $db->get('order_',array('trangthai'=>1));
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
}else{
	header('location: ?controller=login');
}
require_once './view/list_donhang.php';
?>