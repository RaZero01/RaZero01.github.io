<?php
require_once 'connections.php';
$link=mysqli_connect($host,$user,$password,$database)
    or die("Ошибка".mysqli_error($link));
mysqli_set_charset($link,'utf8');
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET 'utf8'");
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci'");

$sql = "select * from doctors";
$result = mysqli_query($link, $sql)
or die("Error in Selecting " . mysqli_error($link));
$emparray = array();
while($row = mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
$fp = fopen('backup.json', 'w');
fwrite($fp, json_encode($emparray));
fclose($fp);
mysqli_close($link);
echo "<script> location.replace('../vision.html');</script>";
exit();
?>
