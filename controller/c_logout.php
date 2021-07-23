<?php
unset($_SESSION['ss_admin_nhanvien']);
setcookie('ss_admin_nhanvien', $user[0]['id'], time() -1);
header("location: ?controller=login");

?>