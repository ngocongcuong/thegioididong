<?php
$id_order = $_GET['id_order'];
if (isset($_SESSION['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_SESSION['ss_admin_nhanvien']));
	$data_order_notdone = $db->get('order_',array('trangthai'=>0));
	$data_order_done    = $db->get('order_',array('trangthai'=>1));
}else if (isset($_COOKIE['ss_admin_nhanvien'])) {
	$user = $db->get('users', array('id'=>$_COOKIE['ss_admin_nhanvien']));
	$data_order_notdone = $db->get('order_',array('trangthai'=>0));
	$data_order_done    = $db->get('order_',array('trangthai'=>1));
}else{
	header('location: ?controller=login');
}
//lấy thông tin sản phẩm
$error = array();
$data_order_detail = $db->get('order_detail', array('id_order'=>$id_order));
$data_order        = $db->get('order_',array('id_order'=>$id_order));
	//cập nhật trạng thái đơn hàng trong bảng order
	
foreach ($data_order_detail as $key => $value)
{
	$data_sanpham = $db->get('sanpham', array('id_product'=>$value['id_product']));
	if ($data_sanpham[0]['amount'] - $value['qty'] < 0)
	{
		$id = $value['id_product'];
		$error[$id] = "Số lượng còn ".$data_sanpham[0]['amount'];
	}
}
if(!$error) {$db->update( 'order_', array('trangthai'=>1), array('id_order'=>$id_order) );
header('location: ?controller=list_donhang');}
//$db->update( 'sanpham',
		//array('amount'=>( $data_sanpham[0]['amount'] - $value['qty']) ),
		//array('id_product'=>$value['id_product']) );
require_once './view/chitiet_donhang.php';
?>