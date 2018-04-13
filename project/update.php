<?php
include('db.php');

if(isset($_POST['submit']))
{
	$id = $_SESSION['id'];
	$a = $_POST['full_name'];
	$d = $_POST['add'];
	$e = $_POST['city'];
	$f = $_POST['gender'];
	$g = $_POST['contact'];


	$que="UPDATE user SET full_name='$a', address='$d', city='$e', gender='$f', contact='$g' WHERE id=$id";
	mysql_query($que);
	
}
header("location:profile.php");
?>