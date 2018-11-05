<?php
$json = file_get_contents('../php/backup.json');
$data = json_decode($json);
$time = array('6:00','7:00','8:00','9:00','10:00','11:00','12:00','13:00','14:00',
    '15:00','16:00','17:00','18:00','19:00','20:00','21:00');
$datarray = array_fill_keys($time,0);
foreach ($data as $row) {
    preg_match_all('|\d+|', $row->work_time, $matches);
    foreach ($time as $value){
        preg_match_all('|\d+|', $value, $valint);
        if (($valint[0][0]>=$matches[0][0])&&($valint[0][0]<=$matches[0][1])){
            $datarray[$value]++;
        }
    }
}


echo " 
 <script >
    google.charts.load(\"current\", {packages:[\"corechart\",\"line\"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
          var data = google.visualization.arrayToDataTable([
                  ['Время', 'Количество работников'],
                  ['6:00',".$datarray['6:00']."],
['7:00',".$datarray['7:00']."],
['8:00',".$datarray['8:00']."],
['9:00',".$datarray['9:00']."],
['10:00',".$datarray['10:00']."],
['11:00',".$datarray['11:00']."],
['12:00',".$datarray['12:00']."],
['13:00',".$datarray['13:00']."],
['14:00',".$datarray['14:00']."],
['15:00',".$datarray['15:00']."],
['16:00',".$datarray['16:00']."],
['17:00',".$datarray['17:00']."],
['18:00',".$datarray['18:00']."],
['19:00',".$datarray['19:00']."],
['20:00',".$datarray['20:00']."],
['21:00',".$datarray['21:00']."],
]);
   
             
          var options = {
              title: 'Количество работников штата в течение дня',
          legend: { position:'none'},
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
       
        chart.draw(data, options);
      }
    </script>
    <div id=\"chart_div\" style=\"width: 900px; margin:0; 
    height: 500px;\"></div>";
?>


