<?php
include('../db.php');
// print_r($_GET);
/*
 unlink(path)

*/
$a = $_GET['cid'];
$obj=mysql_query("DELETE FROM product WHERE product_category=$a");
$data=mysql_fetch_assoc($obj);

$que="DELETE FROM category WHERE id=$a";
mysql_query($que);
header("location:view_category.php");
?>