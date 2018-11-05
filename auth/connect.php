<?php
session_start();
require_once '../php/connections.php';
$link=mysqli_connect($host,$user,$password,$database);
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password))

{
    echo "<script>
    alert(\"Введите информацию\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);

$result = mysqli_query($link,"SELECT * FROM users WHERE login='$login'");
//извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password']))
{
    echo "<script>
    alert(\"Несуществующий логин\");
    </script>";
    echo "<script> location.replace('../index.html');</script>";
    exit();
}
else {
    if ($myrow['password']==$password) {
        $_SESSION['login']=$myrow['login'];
        $_SESSION['id']=$myrow['id'];
        echo "<script>
    alert(\"Вы успешно вошли на сайт!\");
    </script>";
        echo "<script> location.replace('../auth.html');</script>";
        exit();
    }
    else {
        //если пароли не сошлись
        echo "<script>
    alert(\"Проверьте логин или пароль\");
    </script>";
        echo "<script> location.replace('../index.html');</script>
<script>showLinks();</script>";
        exit();
    }
}
?>