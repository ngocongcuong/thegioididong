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
	//kiểm tra người dùng muốn làm gì
	$id = $_GET['id']; // lấy id trên url
	$data = $db->get('sanpham', array('id_product'=>$id)); //lấy thông tin sản phẩm theo id
	switch ($_GET['method']) {
		case 'edit_sanpham':
			//kiểm tra người dùng ấn nút submit chưa
			if (isset($_POST['submit'])) {
				$catalogid	= $_POST['catalogid']; 
				$thuonghieu	= $_POST['thuonghieu'];
				$tensanpham	= $_POST['name'];
				$giasanpham	= $_POST['price'];
				$soluong	= $_POST['amount'];
				$mota 		= $_POST['mota_sp'];

				$error = array();
				if ($tensanpham == '') {
					$error['tensanpham'] = "Chưa nhập tên sản phẩm";
				}
				if ($giasanpham == '') {
					$error['giasanpham'] = "Chưa nhập giá sản phẩm";
				}
				if ($soluong == '') {
					$error['soluong'] = "Chưa nhập số lượng";
				}
				//kiểm tra xem còn lỗi ko
				if (!$error)
				{	
					//insert vào cơ sở dữ liệu
					$db->update('sanpham', array(
						
						'catalog_id'=>$catalogid,
						'thuonghieu'=>$thuonghieu,
						'name'		=>$tensanpham,
						'price_after'=>$giasanpham,
						'amount'	=>$soluong,
						'content'	=>$mota), array(
						'id_product'=>$id)
					);
					
				}
				if (!empty($_FILES['photo']))
				{//nếu tồn tại ảnh thì mới update ảnh
					$photo = $_FILES['photo'];
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
					//update ảnh vào thư mục img/sanpham
					if (!$error) { //nếu không có lỗi erro thì mới update đường dẫn ảnh
						move_uploaded_file($photo['tmp_name'], $target_file);
						$db->update('sanpham', array(
							'img_link'	=>$target_file),array(
							'id_product'=>$id)
						);
					}
				}
				if (isset($_FILES['img-product'])) {
					$img_product = $_FILES['img-product'];
					$names 	= $img_product['name'];
					$types 	= $img_product['type'];
					$tmp_names = $img_product['tmp_name'];
					$errors = $img_product['error'];
					$sizes 	= $img_product['size'];

					$total_img = count($names);
					$num_img = 0;
					for($i=0; $i<$total_img; $i++)
					{
						if ($error[$i] == 0)
						{
							$num_img++;
							$link = './public/img/slide-description-product/';
							$target_file = $link.$names[$i];
							//kiểm tra điều kiện upload
							//1 kích thước
							if ($sizes[$i] >5242880) {
								$error[$i] = "Dung lượng file quá lớn 5M";
							}
							//2 kiểu file
							$file_type = pathinfo($names[$i], PATHINFO_EXTENSION);
							$file_type_allow = array('jpg','png','jpeg','gif');
							if (!in_array(strtolower($file_type), $file_type_allow)) {
								$error[$i] = "File không hợp lệ";
							}
							//3 kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
							$num=1;
							$target_file = substr($target_file, 0, strrpos($target_file, '.'));
							while (file_exists($target_file.'.'.$file_type)) {
								$target_file .= $num;
								$num++;
							}
							$target_file.='.'.$file_type;
							//update ảnh vào thư mục img/sanpham
							if (!$error[$i]) { //nếu không có lỗi erro thì mới update đường dẫn ảnh
								move_uploaded_file($tmp_names[$i], $target_file);
								$db->insert('img_product', array(
									'img_link'	=>$target_file,
									'id_product'=>$id)
								);
							}
						}
					}
				}
				//chuyển về trang sản phẩm
				header('location: ?controller=product');
				
			}
			require_once('./view/v_edit_sanpham.php');
			break;
		case 'xoa_sanpham':
			$dlt = $db->delete('sanpham', array('id_product'=>$id));
			echo $dlt;
			header('location: ?controller=product');
			break;
	}
}




?>