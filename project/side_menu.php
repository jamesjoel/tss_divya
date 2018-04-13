<?php
$que_cate="SELECT * FROM category";
$obj_cate=mysql_query($que_cate);
?>
<ul>
	<?php
	while($data_cate=mysql_fetch_assoc($obj_cate))
	{ ?>

		<li><a href="index.php?product_category=<?php echo $data_cate['id']; ?>"><?php echo $data_cate['category_name'];?></a></li>
	<?php
	}
	?>
	
</ul>