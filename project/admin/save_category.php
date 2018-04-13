<?php
include('../db.php');

$a=$_POST['c_name'];

$que="INSERT INTO category (category_name) VALUES ('$a')";
mysql_query($que);
header('location:add_category.php');
?>
