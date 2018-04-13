<?php
include('../db.php');
if(! isset($_SESSION['backdoor_admin']))
{
	header("location:../index.php");
}
include('header.php');

$obj_cate=mysql_query("SELECT * FROM category");

?>

<div id="content">
	<div id="inside-content">
		<div id="login-box">
		<h3>Add Product</h3>
		<form action="save_product.php" method="post" enctype="multipart/form-data">
			
		<table align="center">
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="p_name" placeholder="Product Name" class="input"></td>
			</tr>
			<tr>
				<td>Product Image</td>
				<td><input type="file" name="p_image" class="input"></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="p_price" placeholder="Price" class="input"></td>
			</tr>
			<tr>
				<td>Product Category</td>
				<td><select class="input" name="p_cate">
						<option>Select</option>
						<?php
						while($data_cate=mysql_fetch_assoc($obj_cate))
						{ ?>
							<option value="<?php echo $data_cate['id'];?>"><?php echo $data_cate['category_name'] ?></option>
						<?php
						}
						?>
				</select></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="desc" rows="7" cols="30"></textarea></td>
			</tr>
			<tr>
				<td>Product Discount</td>
				<td><input type="text" name="p_discount" placeholder="Discount" class="input"></td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Add Product" class="btn">
					</td>
				</tr>
		</table>
		</form>
		<p class="error">
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
		</p>
		</div>
	</div>
</div>
</body>
</html>