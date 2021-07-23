<?php

if (isset($_POST['guimail']))
{
	$id = $_POST['id'];
	$dt_user = $db->get('users',array('id'=>$id));
	$code = rand(100000, 999999);
	$title = 'Đổi mật khẩu thế giới di động';
    $content = $code;
    $nTo = $dt_user[0]['name'];
    $mTo = $dt_user[0]['email'];
    $diachicc = 'skybn81993@gmail.com';
    //test gui mail
    $mail = $db->sendMail($title, $content, $nTo, $mTo,$diachicc='');
    if($mail==1)
    {
    	$db->update('users', array('code'=>$code), array('id'=>$id));
    	echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
    	require_once './view/v_pass_3.php';
    }
    else echo 'Co loi!';
}

?>