<?php
include('../db.php');
if(! isset($_SESSION['backdoor_admin']))
{
	header("location:../index.php");
}
include('header.php');
$que_pro="SELECT * FROM product";
if(isset($_GET['ordertype']))
{
	$a=$_GET['ordertype'];
	$que_pro="SELECT * FROM product ORDER BY $a ASC";
	
}







$obj_pro=mysql_query($que_pro);
?>

<div id="content">
	<div id="inside-content">
		<div id="login-box">
		<h3>Add Product</h3>
		Sort By : <a href="view_product.php?ordertype=product_price">Price</a>&nbsp;&nbsp;&nbsp;<a href="view_product.php?ordertype=product_name">Name</a>
		<table align="center" id="tab">
			<tr>
				<th>#</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Category</th>
				<th>Discount</th>
				<th>Image</th>
				<th>Add More</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			$x=1;
			while($data_pro=mysql_fetch_assoc($obj_pro))
			{ ?>
				<tr>
					<td><?php echo $x;?></td>
					<td><?php echo $data_pro['product_name'];?></td>
					<td><?php echo $data_pro['product_price'];?></td>
					<td><?php echo $data_pro['product_category'];?></td>
					<td><?php echo $data_pro['product_discount'];?></td>

					<td><img src='upload/<?php echo $data_pro['product_img'];?>' height="50" width="50"/></td>
					<td><a href="add_more.php?pid=<?php echo $data_pro['id'];?>">More</a></td>
					<td><a href="edit_pro.php?pid=<?php echo $data_pro['id']; ?>" class="edit_btn">Edit</a></td>
					<td><a href="delete_pro.php?pid=<?php echo $data_pro['id']; ?>" class="del_btn">Delete</a></td>
				</tr>
			<?php
			$x++;
			}
			?>
		</table>
		</div>
</div>
</body>
</html>