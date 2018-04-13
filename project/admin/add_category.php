<?php
include('../db.php');
if(! isset($_SESSION['backdoor_admin']))
{
	header("location:../index.php");
}
include('header.php');
?>

<div id="content">
	<div id="inside-content">
		<div id="login-box">
		<h3>Add Category</h3>
		<form action="save_category.php" method="post">
			
		<table align="center">
			<tr>
				<td>Category Name</td>
				<td><input type="text" name="c_name" placeholder="Category Name" class="input"></td>
			</tr>
			
			<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Add Category" class="btn">
					</td>
				</tr>
		</table>
		</form>
		</div>
	</div>
</div>
</body>
</html>