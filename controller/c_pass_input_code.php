<?php
if (isset($_POST['submit-code']))
{
	$id = $_POST['id'];
	$code = $_POST['code'];
	$dt_user = $db->get('users',array('id'=>$id));
	if ($code == $dt_user[0]['code']) {
		require_once './view/v_pass_new.php';
	}else
	{
		echo 'Nhập mã sai';
		require_once './view/v_pass_3.php';
	}
}
?>