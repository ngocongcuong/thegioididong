<?php
$db['giá'] = array(100,200);
$db['monitor'] = array(13,14,15);
var_dump($db);
echo "<br>";
foreach ($db as $key => $a) {
	echo "<br>$key";
	echo $a[0];
	foreach ($a as $key => $value) {
		echo "<br>$key $value";
	}
}
$limit = array(1,3);
var_dump($limit);
?>