<?php
              
if(isset($_GET['textdata']))
{
$data=$_GET['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
