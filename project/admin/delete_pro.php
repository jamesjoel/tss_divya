<?php
include('../db.php');
// print_r($_GET);
/*
 unlink(path)

*/
$a = $_GET['pid'];
$obj=mysql_query("SELECT * FROM product WHERE id=$a");
$data=mysql_fetch_assoc($obj);
$name=$data['product_img'];

unlink('upload/'.$name);

$que="DELETE FROM product WHERE id=$a";
mysql_query($que);
header("location:view_product.php");
?>