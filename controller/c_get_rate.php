<?php  
$id_product = $productchitiet[0]['id_product'];
$conn = mysqli_connect('localhost', 'root', '', 'quanlybanhang');
$sql = "SELECT AVG(rating) AS rate_avg FROM danhgia where id_product = $id_product";
$rate = mysqli_query($conn, $sql);

$get_rate = mysqli_query($conn, "SELECT * FROM danhgia where id_product = $id_product");
?>