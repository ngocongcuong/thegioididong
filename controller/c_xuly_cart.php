<?php
$method = $_GET['method'];
$id = $_GET['id'];

switch ($method) {
	case 'prev':
		$_SESSION['qty'] -= 1;
		$_SESSION['cart'][$id]['sl'] -=1;
		if ($_SESSION['cart'][$id]['sl'] < 1) {
			unset($_SESSION['cart'][$id]);
		}
		if (empty($_SESSION['cart'])) {
			unset($_SESSION['cart']);
		}
		header('location: ?controller=giohang');
		break;
	case 'next':
		$_SESSION['qty'] += 1;
		$_SESSION['cart'][$id]['sl'] += 1;
		header('location: ?controller=giohang');
		break;
	case 'del':
		$_SESSION['qty'] -= $_SESSION['cart'][$id]['sl'];
		unset($_SESSION['cart'][$id]);
		if (empty($_SESSION['cart'])) {
			unset($_SESSION['cart']);
		}
		header('location: ?controller=giohang');
		break;
	default:
		header('location: ?controller=giohang');
		break;
}

?>