<?php
session_start();
include('./controller/class.smtp.php');
include './controller/class.phpmailer.php';
require_once './model/m_database.php';
//tạo đối tượng $db
$db = new database();
//kiểm tra trên link có controller chưa
if (isset($_GET['controller'])) {
	//nếu có thì lấy giá trị đó
	$controller = $_GET['controller'];
} else $controller = 'trangchu';
//kiểm tra biến $controller bằng gì để require file tương ứng
switch ($controller) {
	case 'trangchu':
		require_once './controller/c_trangchu.php';
		break;
	case 'giohang':
		require_once './controller/c_giohang.php';
		break;
	case 'add_giohang':
		require_once './controller/c_add_giohang.php';
		break;
	case 'xuly_cart':
		require_once './controller/c_xuly_cart.php';
		break;
	case 'thanh-toan':
		require_once './controller/c_thanhtoan.php';
		break;
	case 'giaodienchitiet':
		require_once './controller/c_giaodienchitiet.php';
		break;
	case 'login':
		require_once './controller/c_login.php';
		break;
	case 'logout':
		require_once './controller/c_logout.php';
		break;
	case 'pageadmin':
		require_once './controller/c_pageadmin.php';
		break;
	case 'nhanvien':
		require_once './controller/c_nhanvien.php';
		break;
	case 'add_nhanvien':
		require_once './controller/c_add_nhanvien.php';
		break;
	case 'xuly_nhanvien':
		require_once './controller/c_xuly_nhanvien.php';
		break;
	case 'product':
		require_once './controller/c_admin_sanpham.php';
		break;
	case 'add_sanpham':
		require_once './controller/c_add_sanpham.php';
		break;
	case 'themsanpham':
		require_once './controller/c_add_sanpham.php';
		break;
	case 'xuly_sanpham':
		require_once './controller/c_edit_sanpham.php';
		break;
	case 'list_donhang':
		require_once './controller/c_list_donhang.php';
		break;
	case 'chitiet_donhang':
		require_once './controller/c_chitiet_donhang.php';
		break;
	case 'duyet_donhang':
		require_once './controller/c_duyet_donhang.php';
		break;
	case 'find':
		require_once './controller/c_find.php';
		break;
	case 'pass_1':
		require_once './controller/c_pass_search_email.php';
		break;
	case 'pass_2':
		require_once './controller/c_pass_sendmail.php';
		break;
	case 'pass_3':
		require_once './controller/c_pass_input_code.php';
		break;
	case 'newpass':
		require_once './controller/c_pass_newpass.php';
		break;
	case 'rating':
		require_once './controller/c_rating.php';
		break;
	default:
		echo "Lỗi trang";
		break;
}

?>