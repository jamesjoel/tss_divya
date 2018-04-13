<?php

mysql_select_db("tss_divya", mysql_connect("localhost", "root", ""));
$arr=$_POST['stu_name'];
foreach($arr as $x)
{
	mysql_query("INSERT INTO student (name) VALUES ('$x')");
}
echo "Data Saved";
?>