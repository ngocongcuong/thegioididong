<?php
if (isset($_SESSION['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	$data_nhanvien = $db->get('users', array());
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
	$data_nhanvien = $db->get('users', array());
}else{
	header('location: ?controller=login');
}
require_once('./view/v_nhanvien.php');
?>