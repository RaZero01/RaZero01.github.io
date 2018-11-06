<?php
$table = "<table border=1 width = '1000px' align=center>";
$color="#FFFFFF";
$table .= "<tr bgcolor=".$color.">";
$table .= "<td >"."<b>Имя</b>"."</td>";
$table .= "<td >"."<b>Фамилия</b>"."</td>";
$table .= "<td >"."<b>Время работы</b>"."</td>";
$table .= "</tr>";
$k=1;
$json = file_get_contents('../php/backup.json');
$data = json_decode($json);
foreach ($data as $row) {

 $table.="<tr bgcolor=".$color.">";
 $table .= "<td >".$row->doctor_surname."</td>";
 $table .= "<td >".$row->doctor_name."</td>";
 $table .= "<td >".$row->work_time."</td>";
 $table .= "</tr>";
      }
$table .= "</table>";
        echo $table;
?>
