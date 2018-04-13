<?php
include('../db.php');

// print_r($_POST);die;
// print_r($_FILES);

$img_name=$_FILES['p_image']['name'];
$img_size=$_FILES['p_image']['size'];
$img_tmp_name=$_FILES['p_image']['tmp_name'];





$arr=explode(".", $img_name);
$ext=end($arr);

$new_name=rand(10000, 100000).time().".".$ext;

if($ext=="jpg" || $ext=="png" || $ext=="jpeg" || $ext == "gif")
{
	if($img_size <= (1024*1024*2))
	{

		$a=$_POST['p_name'];
		$b=$_POST['p_price'];
		$c=$_POST['p_cate'];
		$d=$_POST['desc'];
		$e=$_POST['p_discount'];

		$que="INSERT INTO product (product_name, product_price, product_category, product_desc, product_discount, product_img) VALUES ('$a', '$b', '$c', '$d', '$e', '$new_name')";
		mysql_query($que);
		move_uploaded_file($img_tmp_name, "upload/".$new_name);


		header('location:add_product.php');
	}
	else
	{
		$_SESSION['msg']="This File is too large !";
		header('location:add_product.php');
	}
}
else
{
	$_SESSION['msg']="This File Type not allowed";
	header('location:add_product.php');

}





?>
