<?php
//kiểm tra người dùng đã đăng nhập chưa
if (isset($_SESSION['ss_admin_nhanvien'])) {
	//Nếu người dùng đã đăng nhập rồi thì cho người dùng sang trang chủ
	header("location: ?controller=pageadmin");
}
//kiểm tra xem người dùng ấn nút đăng nhập chưa
if (isset($_POST['dangnhap'])) {
	//lấy dữ liệu
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	if (!empty($_POST['save'])) {
		$save 		= $_POST['save'];
	}
	//kiểm tra tài khoản và mật khẩu đăng nhập
	//bước 1 tạo 1 mảng chữa các lỗi
	$error = array();
	//bước 2 kiểm tra xem tài khoản có trống không?
	if ($username =='') {
		$error['username'] = "tài khoản không được để trống";
	}
	//bước 3 kiểm tra xem tài khoản có trống không?
	if ($password =='') {
		$error['password'] = "Mật khẩu không được để trống";
	}
	//bước 4 nếu không có lỗi kiểm tra tên đăng nhập có tồn tại?
	if (!$error) {
		$user = $db->get('users', array('username'=>$username));
		if (empty($user)) {
			$error['username'] = "tài khoản này không tồn tại";
		}else{
			//bước 5 tài khoản tồn tại thì kiểm tra mật khẩu
			if ($password != $user[0]['password']) {
				$error['password'] = "Mật khẩu bạn nhập sai";
			}
		}
	}
	//sau khi người dùng đã nhập đúng thì lưu id vào biến session
	if (!$error) {
		//gán id của người dùng vào ss
		if ($save == 'save-user') {
		$_SESSION['ss_admin_nhanvien'] = $user[0]['id'];
		//chuyển người dùng đến giao diện admin
		header("location: ?controller=pageadmin");
		}else{
		setcookie('ss_admin_nhanvien', $user[0]['id'], time() +600);
		header("location: ?controller=pageadmin");
		}
	}
}
require_once('./view/v_login.php');

?>