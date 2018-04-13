<?php
include('../db.php');




$a=$_POST['c_name'];
$id=$_POST['cid'];

$que="UPDATE category SET category_name='$a' WHERE id=$id";
mysql_query($que);
header('location:view_category.php');
?>
