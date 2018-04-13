<?php
include('../db.php');
if(! isset($_SESSION['backdoor_admin']))
{
	header("location:../index.php");
}
include('header.php');

$obj_cate=mysql_query("SELECT * FROM category");


$a=$_GET['pid'];
$data_pro=mysql_fetch_assoc(mysql_query("SELECT * FROM product WHERE id=$a"));

?>

<div id="content">
	<div id="inside-content">
		<div id="login-box">
		<h3>Add More Images For <?php echo $data_pro['product_name'];?></h3>
		<form action="save_add_more.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="pid" value="<?php echo $a; ?>">
		<table align="center">
			
			<tr>
				<td>Product Image</td>
				<td><input type="file" name="p_image" class="input"></td>
			</tr>
			
			<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Add More Images" class="btn">
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