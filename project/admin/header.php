<?php
// print_r($_SERVER);
$pagename=$_SERVER['PHP_SELF'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<h2>Administrator Panel</h2>
		<ul>
			<li><a href="dashboard.php"  <?php if(strstr($pagename, 'dashboard.php')){ echo "class='active'"; } ?> >Dashboard</a></li>
			<li><a href="add_product.php" <?php if(strstr($pagename, 'add_product.php')){ echo "class='active'"; } ?>>Add Product</a></li>
			<li><a href="view_product.php" <?php if(strstr($pagename, 'view_product.php')){ echo "class='active'"; } ?>>View Product</a></li>
			<li><a href="add_category.php" <?php if(strstr($pagename, 'add_category.php')){ echo "class='active'"; } ?>>Add Category</a></li>
			<li><a href="view_category.php"  <?php if(strstr($pagename, 'view_category.php')){ echo "class='active'"; } ?>>View Category</a></li>
			<li><a href="#">View Users</a></li>
			<li><a href="#">Account</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

</div>