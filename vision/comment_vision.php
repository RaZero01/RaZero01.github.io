<?php
$table = "<table border=1 width = '1000px' align=center>";
$color="#FFFFFF";
$table .= "<tr bgcolor=".$color.">";
$table .= "<td >"."<b>Имя</b>"."</td>";
$table .= "<td >"."<b>Отзыв</b>"."</td>";
$table .= "<td >"."<b>Дата</b>"."</td>";
$table .= "</tr>";
$k=1;
$json = file_get_contents('../php/backup_comments.json');
$data = json_decode($json);
foreach ($data as $row) {

 $table.="<tr bgcolor=".$color.">";
 $table .= "<td >".$row->name."</td>";
 $table .= "<td >".$row->comment."</td>";
 $table .= "<td >".$row->date."</td>";
 $table .= "</tr>";
      }
$table .= "</table>";
        echo $table;
?>
