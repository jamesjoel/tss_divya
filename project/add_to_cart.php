<?php
$id=$_GET['pid'];
if(isset($_COOKIE['cart'])) // second time and ...
{
	$oldid = $_COOKIE['cart'];	
	$newid = $oldid.",".$id;
	setcookie("cart", $newid, time()+3600);
}
else // first time
{
	setcookie("cart", $id, time()+3600);
}
header("location:index.php");
?>