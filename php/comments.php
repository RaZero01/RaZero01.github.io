<?php
require_once 'connections.php';
$link=mysqli_connect($host,$user,$password,$database)
    or die("Ошибка".mysqli_error($link));
mysqli_set_charset($link,'utf8');
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET 'utf8'");
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci'");
$name = $_POST['name'];
$comment = $_POST['comment'];
$date = $_POST['date'];
$query = "INSERT INTO comments VALUES ('$name','$comment',
'$date')";
$result = mysqli_query($link,$query) or die("Ошибка ".
    mysqli_error($link));
if($result){
    echo "<script> alert('Ваш отзыв отправлен');</script>";
    echo "<script> location.replace('../comments.html');</script>";
    mysqli_close($link);
    exit();
}
mysqli_close($link);
?>

