<?php
require_once '../php/connections.php';
$link=mysqli_connect($host,$user,$password,$database)
or die("Ошибка".mysqli_error($link));
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '')
        { unset($login);} }
if (isset($_POST['password'])) {
    $password=$_POST['password'];
    if ($password =='') {
        unset($password);} }
if (isset($_POST['password_conf'])) {
    $password_conf=$_POST['password_conf'];
    if ($password_conf =='') {
        unset($password_conf);} }
if (empty($login) or empty($password) or empty($password_conf))
{
    echo "<script>
    alert(\"Неверные данные\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$password_conf = stripslashes($password_conf);
$password_conf = htmlspecialchars($password_conf);
$login = trim($login);
$password = trim($password);
$password_conf = trim($password_conf);

$query = "SELECT id FROM users WHERE login='$login'";
$result = mysqli_query($link,$query);
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
    echo "<script>
    alert(\"Логин занят\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}
if($password!=$password_conf){
    echo "<script>
    alert(\"Пароли не совпадают\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}
$result2 = mysqli_query ($link,"INSERT INTO users (login,password) VALUES('$login','$password')");

if ($result2=='TRUE')
{
    echo "<script>
    alert(\"Регистрация прошла успешно\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}
else {
    echo "<script>
    alert(\"Ошибка\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}
?>