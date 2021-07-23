<?php
if (isset($_POST['submit-newpass'])) {
	$id = $_POST['id'];
	$pass = $_POST['pass'];
	$doimatkhau = $db->update('users', array('password'=>$pass), array('id'=>$id));
	if ($doimatkhau) {
		echo "Đổi mật khẩu thành công";
		require_once './view/v_login.php';
	}
}

?>