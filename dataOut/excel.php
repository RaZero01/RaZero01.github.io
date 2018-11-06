<?php
/**
 * Created by PhpStorm.
 * User: Lirveez
 * Date: 02.05.2018
 * Time: 1:08
 */

header("Content-Encoding: UTF-8");
mb_internal_encoding("UTF-8");
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
set_time_limit (0);
$excel = new COM("excel.application",NULL,65001);
$excel->DisplayAlerts = false;
$excel->Visible = 0;
$wkb = $excel->Workbooks->Add();

$sheet = $excel->Worksheets(1);
$sheet->activate;

$cell = $sheet->Cells(1,1);
$cell->Activate;
$data = "Фамилия";
iconv_set_encoding("ASCII",$data);
$cell->value =$data;
$cell = $sheet->Cells(1,2);
$cell->Activate;
$cell->value ="Имя";

$cell = $sheet->Cells(1,3);
$cell->Activate;
$cell->value ="Отчество";

$cell = $sheet->Cells(1,4);
$cell->Activate;
$cell->value ="Специализация";

$cell = $sheet->Cells(1,5);
$cell->Activate;
$cell->value ="Квалификация";

$cell = $sheet->Cells(1,6);
$cell->Activate;
$cell->value ="Зарплата";

$cell = $sheet->Cells(1,7);
$cell->Activate;
$cell->value ="Дата рождения";

$cell = $sheet->Cells(1,8);
$cell->Activate;
$cell->value ="Домашний адрес";

$cell = $sheet->Cells(1,9);
$cell->Activate;
$cell->value ="Время работы";
$a=1;
while($row = mysqli_fetch_object($result)) {
    $a++;
    $cell = $sheet->Cells($a,1);
    $cell->Activate;
    $cell->value =$row->doctor_surname;
    $cell = $sheet->Cells($a,2);
    $cell->Activate;
    $cell->value =$row->doctor_name;
    $cell = $sheet->Cells($a,3);
    $cell->Activate;
    $cell->value =$row->doctor_patronymic;
    $cell = $sheet->Cells($a,4);
    $cell->Activate;
    $cell->value =$row->doctor_specialization;
    $cell = $sheet->Cells($a,5);
    $cell->Activate;
    $cell->value =$row->doctor_skill_level;
    $cell = $sheet->Cells($a,6);
    $cell->Activate;
    $cell->value =$row->salary;
    $cell = $sheet->Cells($a,7);
    $cell->Activate;
    $cell->value =$row->date_of_birth;
    $cell = $sheet->Cells($a,8);
    $cell->Activate;
    $cell->value =$row->home_address;
    $cell = $sheet->Cells($a,9);
    $cell->Activate;
    $cell->value = $row->work_time."ч";
}

$filename = realpath("../dataOut/out.xlsx");
$wkb->SaveAs($filename);
//Quit MS Excel
$wkb->Close(false);
$excel->Workbooks->Close();
$excel->Quit();
unset($sheet);
unset($excel);
?>

