<?php
if (isset($_POST['btn-thanhtoan']) && $_POST['tenkhach'] != '' && $_POST['tel'] != '' && $_POST['diachi'] != '') {
	//lấy thông tin người dùng nhập vào ở form
	$tenkhach = $_POST['tenkhach'];
	$tel = $_POST['tel'];
	$diachi = $_POST['diachi'];
	$email = $_POST['email'];
	$id_order = 1;
	//lấy dữ liệu từ bảng order ra trước
	$data_order = $db->get('order_',array());
	//bước 2 lặp dữ liệu từ bảng để có 1 id không trùng lặp
	foreach ($data_order as $key => $value) {
		$id_order += $value['id_order'];
	}
	//thêm dữ liệu vào bảng order_detail
	foreach ($_SESSION['cart'] as $key => $value) {
		$db->insert('order_detail', array(
			'id_order'=>$id_order,
			'id_product'=>$value['id_product'],
			'qty'=>$value['sl'], 
			'price'=>$value['price_after'], 
			'amount'=>$value['sl'] * $value['price_after']));
	}
	//thêm dữ liệu vào bảng order
	// bước 1 lấy dữ liệu của các bảng order_detail theo id_order vửa tạo
	$data_order_detail = $db->get('order_detail', array('id_order'=>$id_order));
	//bước 2 tính tổng tiền
	$amount =0;
	foreach ($data_order_detail as $key => $value) {
		$amount += $value['amount'];
	}
	//bước 3 thêm dữ liệu vào bảng order
	$db->insert('order_', array(
		'id_order'=>$id_order,
		'customer'=>$tenkhach, 
		'address'=>$diachi, 
		'tel'=>$tel, 
		'order_amount'=>$amount,
		'trangthai'=>0));

	//gửi email cho người dùng <td><img id="anh-cart" src="'.$value['img_link'].'"></td>
		//Bước 1: chuẩn bị phần thông tin người nhận
		$content= '<p>Người nhận :'.$tenkhach.'</p>';
		$content.= '<p>Số điện thoại :'.$tel.'</p>';
		$content.= '<p>Địa chỉ người nhận :'.$diachi.'</p>';
		$content.= '<p>Tổng tiền :'.number_format($amount).'đ</p>';
		$content.= '<table class="mt-3 p-0 table table-borderless">
					<thead>
						<tr>	
							<th>Sản phẩm</th>
							
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
					   	</tr>	
					</thead>
					<tbody>';
		//Bước 2: Lặp các sản phẩm người dùng mua ra
		foreach ($_SESSION['cart'] as $key => $value)
		{
			$content.= '<tr>
							<td style="padding:10px">'.$value['name'].'</td>
							
							<td style="padding:10px">'.number_format($value['price_after']).'đ</td>
							<td style="padding:10px">'.$value['sl'].'</td>
							<td style="padding:10px">'.number_format($value['price_after']*$value['sl']).'đ</td>
						</tr>';
		}
		//Bước 3:đóng thẻ table
		$content.='</tbody>
		</table>';
//Bắt đầu gửi thư cho người mua
	$title = "Hóa đơn mua hàng tại Thế giới di động";
	$mail = $db->sendMail($title, $content, $tenkhach, $email,$diachicc='');
    if($mail==1)
    {
    	echo 'Mua hàng thành công ';
    	unset($_SESSION['cart']);
		unset($_SESSION['qty']);
    }
    else echo 'Co loi!';
}
header('location: ?controller=giohang');
?>