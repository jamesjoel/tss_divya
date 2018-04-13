<?php
include('db.php');

if(isset($_POST['submit']))
{
	$a = $_POST['full_name'];
	$b = $_POST['username'];
	$c = $_POST['pass'];
	$c = md5($c);
	$d = $_POST['add'];
	$e = $_POST['city'];
	$f = $_POST['gender'];
	$g = $_POST['contact'];


	$que="INSERT INTO user (full_name, username, password, address, city, gender, contact) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
	mysql_query($que);
	
}
header("location:login.php");

?>