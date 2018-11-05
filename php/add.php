<?php
require_once 'connections.php';
$link=mysqli_connect($host,$user,$password,$database)
    or die("Ошибка".mysqli_error($link));
mysqli_set_charset($link,'utf8');
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET 'utf8'");
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci'");
$id = $_POST['ID'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$patronomic = $_POST['patronomic'];
$spec = $_POST['spec'];
$skill = $_POST['skill'];
$exp = $_POST['exp'];
$diploma = $_POST['diploma'];
$epml = $_POST['empl'];
$salary = $_POST['salary'];
$kids = $_POST['kids'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$work_time = $_POST['work_time'];
$branch_ID = $_POST['branch_ID'];
$query = "INSERT INTO doctors VALUES ('$id','$surname',
'$firstname','$patronomic',
'$spec','$skill','$exp','$diploma','$epml','$salary',
'$kids','$birth',
'$address','$work_time','$branch_ID')";
$result = mysqli_query($link,$query) or die("Ошибка ".
    mysqli_error($link));
if($result){
    echo "<script> alert('Данные успешно добавлены');</script>";
    echo "<script> location.replace('../doctor.html');</script>";
    mysqli_close($link);
    exit();
}
mysqli_close($link);
?>

