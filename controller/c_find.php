<?php
if (isset($_GET['catalog'])) {
	$catalog = $_GET['catalog'];
}
$data_sanpham = $db->get('sanpham', array('catalog_id'=>$catalog));
$total_records = count($data_sanpham);
$current_page = isset($_GET['page'])? $_GET['page'] : 1;
$limit = 20;
// BƯỚC 4 : TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records/$limit);
// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page) {
	$current_page = $total_page;
}
else if ($current_page < 1)
{
	$current_page =1;
}
// tìm start
$start = ($current_page -1) * $limit;
$limits[0] = $start;
$limits[1] = $limit;
$data_sanpham = $db->get_find_limit('sanpham', array('catalog_id'=>$catalog), array(), array(), $limits);
if (isset($_POST['find']))
{
	$phanloai = array();
	if (!empty($_POST['thuonghieu']))
	{
		$phanloai['thuonghieu'] = $_POST['thuonghieu'];
	}
	$find= array();
	if (!empty($_POST['price']))
	{
		$price = $_POST['price'];
		switch ($price) {
			case 1:
				$b = 1; $e =2000000;
				break;
			case 2:
				$b = 2000000; $e =4000000;
				break;
			case 3:
				$b = 4000000; $e =7000000;
				break;
			case 4:
				$b = 7000000; $e =10000000;
				break;
			case 5:
				$b = 10000000; $e =15000000;
				break;
			case 6:
				$b = 15000000; $e =20000000;
				break;
			case 7:
				$b = 20000000; $e =1000000000;
				break;
			default:
				// code...
				break;
		}
		$find['price_after'] = array($b, $e);
	}
	$data_sanpham = $db->get_find_limit('sanpham', array(
											'catalog_id'=>$catalog),
											$phanloai,
											$find,
											$limits);
}
require_once './view/v_find.php';
?>