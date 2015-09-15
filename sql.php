<?php
phpinfo();
$sql=mysql_connect("127.0.0.1:3306","root","");
$query=mysql_query("SELECT * FROM `sensors_values` ORDER BY `id` DESC LIMIT 50",sql);
echo $sql;