<?php
if (isset($_SESSION['ss_admin_nhanvien'])) {
	//nếu đã đăng nhập thì lấy thông tin nhân viên theo ss
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
	
}else {
	//nếu chưa đăng nhập thì sẽ cho người dùng về trang login
	header('location: ?controller=login');
}
if (isset($_POST['submit-nhanvien'])) {
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$name		= $_POST['name'];
	$gioitinh	= $_POST['gioitinh'];
	$namsinh	= $_POST['namsinh'];
	$lv			= $_POST['lv'];
	$email 		= $_POST['email'];
	$error = array();
	if ($username == '') {
		$error['username']	= "Chưa điền mật khẩu";
	}
	if ($name == '') {
		$error['name']		= "Họ tên trống";
	}
	if ($password == '') {
		$error['password']	= "Mật khẩu trống";
	}
	if ($namsinh < 1900 || $namsinh >2010) {
		$error['namsinh']	= "Năm sinh không hợp lệ";
	}
	if ($user[0]['lv'] > 1) {
		$error['lv']		= "Không đủ quyền";
	}
	if ($email == '') {
		$error['email'] 	= "Chưa điền email";
	}
	$data_nhanvien = $db->get('users', array());
	foreach ($data_nhanvien as $key => $value) {
		if ($username == $value['username']) {
			$error['username'] = "Tài khoản đã tồn tại";
		}
	}
	if (!$error) {
		$db->insert('users',array(
			'username'=>$username,
			'password'=>$password,
			'name'=>$name,
			'gioitinh'=>$gioitinh,
			'ns'=>$namsinh,
			'lv'=>$lv,
			'email'=>$email
		));
		header('location: ?controller=nhanvien');
	}
}
require_once './view/v_add_nhanvien.php';
?>