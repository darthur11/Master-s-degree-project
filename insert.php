<?php 
include 'mysql_class.php';
?>
<?php
$patt1="/\_/";
$patt2="/\-/";
$input_str=$_GET["str"];	
$splittedelem=preg_split($patt1,$input_str);
for($i=0;$i<count($splittedelem);$i++)
{
$temp=preg_split($patt2,$splittedelem[$i]);
	$senstype[$i]=substr($temp[0],0,1);
	$sensnode[$i]=substr($temp[0],1,2);
	$sensvalue[$i]=$temp[1];
}
	$DB = new mysql_db();
    $DB->sql_connect('localhost', 'root', '', 'wsn_db');
    for($i=0;$i<count($sensnode);$i++)
		$DB->query("INSERT INTO `sensors_values` (`sensnodeid`, `senstype`, `sensvalue`, `datetime`)
VALUES ('$sensnode[$i]', '$senstype[$i]', '$sensvalue[$i]', now());");
    $DB->sql_close();
?>
