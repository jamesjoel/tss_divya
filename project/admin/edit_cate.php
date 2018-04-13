<?php
include('../db.php');
if(! isset($_SESSION['backdoor_admin']))
{
	header("location:../index.php");
}
include('header.php');

$a=$_GET['cid'];
$obj_cate=mysql_query("SELECT * FROM category WHERE id=$a");
$data_cate=mysql_fetch_assoc($obj_cate);
// print_r($data_cate);

?>

<div id="content">
	<div id="inside-content">
		<div id="login-box">
		<h3>Edit Category</h3>
		<form action="update_category.php" method="post">
			<input type="hidden" name="cid" value="<?php echo $a; ?>"/>
		<table align="center">

			<tr>
				<td>Category Name</td>
				<td><input type="text" name="c_name" value="<?php echo $data_cate['category_name']; ?>" placeholder="Category Name" class="input"></td>
			</tr>
			
			<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Update Category" class="btn">
					</td>
				</tr>
		</table>
		</form>
		</div>
	</div>
</div>
</body>
</html>