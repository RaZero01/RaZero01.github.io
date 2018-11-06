<?php
require_once '../php/connections.php';
$link=mysqli_connect($host,$user,$password,$database)
or die("Ошибка".mysqli_error($link));
mysqli_set_charset($link,'utf8');
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET 'utf8'");
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci'");

$sql = "select * from doctors";
$result = mysqli_query($link, $sql)
or die("Error in Selecting " . mysqli_error($link));
$table = "<!DOCTYPE html>
<html lang=\"ru\">
<meta charset=\"UTF-8\"><table border=1 width = '600px' align=center>";
$color="#FFFFFF";
$table .= "<tr bgcolor=".$color.">";
$table .= "<td >"."<b>Фамилия</b>"."</td>";
$table .= "<td >"."<b>Имя</b>"."</td>";
$table .= "<td >"."<b>Отчество</b>"."</td>";
$table .= "<td >"."<b>Специализация</b>"."</td>";
$table .= "<td >"."<b>Квалификация</b>"."</td>";
$table .= "<td >"."<b>Зарплата</b>"."</td>";
$table .= "<td >"."<b>Дата рождения</b>"."</td>";
$table .= "<td >"."<b>Домашний адрес</b>"."</td>";
$table .= "<td >"."<b>Время работы</b>"."</td>";
$table .= "</tr>";
$k=1;
while($row = mysqli_fetch_object($result)) {
    $table.="<tr>";
    $table .= "<td >".$row->doctor_surname."</td>";
    $table .= "<td >".$row->doctor_name."</td>";
    $table .= "<td >".$row->doctor_patronymic."</td>";
    $table .= "<td >".$row->doctor_specialization."</td>";
    $table .= "<td >".$row->doctor_skill_level."</td>";
    $table .= "<td >".$row->salary."</td>";
    $table .= "<td >".$row->date_of_birth."</td>";
    $table .= "<td >".$row->home_address."</td>";
    $table .= "<td >".$row->work_time."</td>";
    $table .= "</tr>";
}
$table .= "</table></html>";
$fp = fopen('../dataOut/out.doc', 'w');
file_put_contents("../dataOut/out.doc",$table);
echo $table;
fclose($fp);
mysqli_close($link);
?>