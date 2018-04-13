<?php
include('../db.php');
if(! isset($_SESSION['backdoor_admin']))
{
	header("location:../index.php");
}
include('header.php');
$que_cate="SELECT * FROM category";
$obj_cate=mysql_query($que_cate);
?>

<div id="content">
	<div id="inside-content">
		<div id="login-box">
		<h3>Veiw Category</h3>
		<table align="center" id="tab">
			<tr>
				<th>#</th>
				<th>Category Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			$x=1;
			while($data_cate=mysql_fetch_assoc($obj_cate))
			{ ?>
				<tr>
					<td><?php echo $x;?></td>
					<td><?php echo $data_cate['category_name'];?></td>
					
					<td><a href="edit_cate.php?cid=<?php echo $data_cate['id']; ?>" class="edit_btn">Edit</a></td>
					<td><a href="delete_cate.php?cid=<?php echo $data_cate['id']; ?>" class="del_btn">Delete</a></td>
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