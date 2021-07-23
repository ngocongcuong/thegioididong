<?php
//kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['ss_admin_nhanvien']) || isset($_COOKIE['ss_admin_nhanvien']))
{
	//nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	if (isset($_SESSION['ss_admin_nhanvien']))
	{
		$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	}
	else
	{
		$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
	}
	//kiểm tra có phải admin không
	if ($user[0]['lv']==1) {
		//kiểm tra người dùng muốn làm gì
		switch ($_GET['method']) {
			case 'edit_nhanvien':
			//lấy id ở url
			$id = $_GET['id'];
			//lấy dữ liệu người dùng theo id
			$data_nhanvien = $db->get('users', array('id'=>$id));
			//kiểm tra xem người dùng có ấn nút xác nhận chưa
			if (isset($_POST['sua'])) {
				$name = $_POST['name'];
				$gioitinh = $_POST['gt'];
				$namsinh = $_POST['ns'];
				$error= array();
				if ($name == '') {
					$error['name'] = "Họ tên trống";
				}
				if ($namsinh == '') {
					$error['namsinh'] = "Năm sinh trống";
				}
				if (!$error) {
					$edit=$db->update('users', array(
						'name'=>$name,
						'gioitinh'=>$gioitinh,
						'ns'=>$namsinh),
					array(
						'id'=>$id
					));
					echo $edit;
					header('location:?controller=nhanvien');
				}
			}
			require_once('./view/v_edit_nhanvien.php');
				break;
			case 'xoa_nhanvien':
				$id = $_GET['id'];
				$dlt = $db->delete('users', array('id'=>$id));
				header('location: ?controller=nhanvien');
				break;
			default:
				// code...
				break;
		}
	}else{
		//nếu không phải nhân viên thì cho về trang nhân viên
		header('location: ?controller=nhanvien');
	}
}
else
{
	//nếu chưa đăng nhập thi cho về trang login
	header('location: ?controller=login');
}



?>