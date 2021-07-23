<?php
if (isset($_POST['timkiem']))
{
	$email = $_POST['email'];
	$error = '';
	$dt_user = array();
	if ($email != '') {
		$dt_user = $db->get('users',array('email'=>$email));
		if (count($dt_user) == 0)
		{
			$error = "Không có tài khoản nào phù hợp";
		}else
		{
			require_once './view/v_pass_2.php';
		}
	}
}

require_once './view/v_pass_1.php';
?>