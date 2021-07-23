<?php
if (isset($_SESSION['ss_admin_nhanvien'])) {
	//nếu đã đăng nhập thì lấy thông tin nhân viên theo ss
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	$product=$db->get('sanpham', array());
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
	$product=$db->get('sanpham', array());
}else {
	//nếu chưa đăng nhập thì sẽ cho người dùng về trang login
	header('location: ?controller=login');
}
if ($user[0]['lv']==1) {
	if (isset($_POST['submit'])) {
		$catalogid	= $_POST['catalogid']; 
		$thuonghieu	= $_POST['thuonghieu'];
		$tensanpham	= $_POST['tensanpham'];
		$giasanpham	= $_POST['price'];
		$giasanpham_new = $_POST['price_after'];
		$soluong	= $_POST['amount'];
		$photo		= $_FILES['photo'];
		
		$error = array();
		if ($tensanpham == '') {
			$error['tensanpham'] = "Chưa nhập tên sản phẩm";
		}
		if ($giasanpham == '') {
			$error['giasanpham'] = "Chưa nhập giá sản phẩm";
		}
		if ($giasanpham_new == '') {
			$error['giasanpham_new'] = "Chưa nhập giá sản phẩm";
		}
		if ($soluong == '') {
			$error['soluong'] = "Chưa nhập số lượng";
		}
		$link = './public/img/sanpham/';
		$target_file = $link.$photo['name'];
		//kiểm tra điều kiện upload
		//1 kích thước
		if ($photo['size'] >5242880) {
			$error['photo'] = "Dung lượng file quá lớn 5M";
		}
		//2 kiểu file
		$file_type = pathinfo($photo['name'], PATHINFO_EXTENSION);
		$file_type_allow = array('jpg','png','jpeg','gif');
		if (!in_array(strtolower($file_type), $file_type_allow)) {
			$error['photo'] = "File không hợp lệ";
		}
		//3 kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
		$num=1;
		$target_file = substr($target_file, 0, strrpos($target_file, '.'));
		while (file_exists($target_file.'.'.$file_type)) {
			$target_file .= $num;
			$num++;
		}
		$target_file.='.'.$file_type;
		//kiểm tra xem còn lỗi ko
		if (!$error) {
			//update ảnh vào thư mục img/sanpham
			move_uploaded_file($photo['tmp_name'], $target_file);
			//insert vào cơ sở dữ liệu
			$db->insert('sanpham', array(
				'catalog_id'=>$catalogid,
				'thuonghieu'=>$thuonghieu,
				'name'		=>$tensanpham,
				'price'		=>$giasanpham,
				'price_after'=>$giasanpham_new,
				'amount'	=>$soluong,
				'img_link'	=>$target_file
			));
			//chuyển về trang sản phẩm
			header('location: ?controller=product');
		}
		//move_uploaded_file($photo['tmp_name'], './public/img/sanpham/'.$photo['name']);
		//echo "<pre>";
		//print_r($photo);
		//echo "</pre>";
	}
}else{
	header('location: ?controller=nhanvien');
}
require_once './view/v_admin_sanpham.php';
?>