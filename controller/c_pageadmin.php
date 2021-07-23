<?php
//kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['ss_admin_nhanvien'])) {
	//nếu đã đăng nhập thì lấy thông tin nhân viên theo ss
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
	
}else {
	//nếu chưa đăng nhập thì sẽ cho người dùng về trang login
	header('location: ?controller=login');
}
require_once('./view/v_pageadmin.php');

?>