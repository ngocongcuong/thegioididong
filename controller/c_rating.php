<?php
if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$rating = $_POST['rating'];
	$content = $_POST['content'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$id_product = $_POST['id_product'];
	$danhgia = $db->insert('danhgia',array(
			'name'=>$name,
			'rating'=>$rating,
			'content'=>$content,
			'tel'=>$tel,
			'email'=>$email,
			'id_product'=>$id_product
		));
	if ($danhgia) {
		echo "Đánh giá thành công<br>";
		echo "<a href=\"javascript:history.go(-1)\">Tiếp tục xem đánh giá</a>";
	}
	
}
?>