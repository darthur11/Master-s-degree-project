﻿<?php 
include 'mysql_class.php';
?>
<?php  
header('Access-Control-Allow-Origin: *');  

function Request_Data() {
/*$DB = new mysql_db();
$DB->sql_connect('localhost', 'root', '', 'wsn_db');
$result=$DB->query("SELECT `senstype`, `sensnodeid`, `sensvalue`, `datetime` FROM `sensors_values` ORDER BY `id` DESC LIMIT 12");
$i=0;
while($row=$DB->fetch_row($result))
{
	$senstype[$i]=$row[0];
	$sensnode[$i]=$row[1];
	$sensvalue[$i]=$row[2];
	$datetime[$i]=$row[3];
	$i++;
}
$str='';
for($i=0;$i<count($senstype);$i++)
	{
	$str.=strval($senstype[$i]);
	if($sensnode[$i]<10)
		{
		$str.="0";
		$str.=strval($sensnode[$i]);
		}
	else 
		$str.=strval($sensnode[$i]);
	$str.='=';
	$str.=strval($sensvalue[$i]);
	$str.='&';
	}*/
echo $str;
}
function Request_weather() {

$city_id=36870; // id города
$data_file="http://export.yandex.ru/weather-ng/forecasts/$city_id.xml"; // адрес xml файла 

$xml = simplexml_load_file($data_file); // раскладываем xml на массив
echo "<div><b>Сейчас ". $xml->fact->temperature." &degC ".$xml->fact->weather_type."</b><br>";
echo "Завтра ".$xml->day[1]["date"].":<br>";
echo "Утро: ".$xml->day[1]->day_part[0]->temperature_from." - ".$xml->day[1]->day_part[0]->temperature_to." &degC ".$xml->day[1]->day_part[0]->weather_type."<br>";
echo "День: ".$xml->day[1]->day_part[1]->temperature_from." - ".$xml->day[1]->day_part[0]->temperature_to." &degC ".$xml->day[1]->day_part[1]->weather_type."<br>";
echo "Вечер: ".$xml->day[1]->day_part[2]->temperature_from." - ".$xml->day[1]->day_part[0]->temperature_to." &degC ".$xml->day[1]->day_part[2]->weather_type."<br>";
echo "Ночь: ".$xml->day[1]->day_part[3]->temperature_from." - ".$xml->day[1]->day_part[0]->temperature_to." &degC ".$xml->day[1]->day_part[3]->weather_type."<br></div>";

}
function Request_countdown() {
}

switch($_GET["request"]) {
	case "weather":
	Request_weather();
	break;
	case "countdown":
	Request_weather();
	break;
	default:
	break;
}
	
	

?>
