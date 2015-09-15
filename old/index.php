<?php 
include 'mysql_class.php';
?>
<?php  

$DB = new mysql_db();
$DB->sql_connect('localhost', 'root', '', 'wsn_db');
$result=$DB->query("SELECT `sensvalue`, `datetime` FROM `sensors_values` ORDER BY `datetime` LIMIT 5000");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="refresh" content="10">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
		var time=Date.now();
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Значение датчика вибраций'
        },
        xAxis: {
            type: 'datetime',
			//floor: time-24*3600*1000
			},
        yAxis: {
            title: {
                text: 'Показания датчика'
            },
            min: 0
        },
        tooltip: {
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },

        series: [{
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: [
<?php
while($row=$DB->fetch_row($result))
{
echo '[';
$date=new DateTime($row[1]);
print($date->format('U')*1000);
echo ',';
print($row[0]);
echo '],';
echo "\n";
}
echo '['; echo $date->format('U')*1000; echo ',0]'; echo "\n";
?>
                 
            ]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<form action="http://192.168.1.101" method="POST">
<input type="form" name="salut" value="1">

<input type="form" name="picture" value="1">

<input type="form" name="bomb" value="1">
<input type="submit" value="submit" name="submit">
</form>
	</body>
</html>


<?php
$DB->sql_close();
?>
