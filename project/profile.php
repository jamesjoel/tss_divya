<?php
include('db.php');

if(! isset($_SESSION['backdoor']))
{
	header("location:login.php");
}
include('header.php');
$que_user="SELECT * FROM user WHERE id=".$_SESSION['id'];
$obj_user=mysql_query($que_user);
$data_user=mysql_fetch_assoc($obj_user);
// print_r($data_user);
?>

<div id="content">
	<div id="inside-content">
		<div id="menu">
		<?php
		include('menu.php');
		?>
		</div>
		<div id="main-content">
			<div id="left-content">
				<h3>Product Category</h3>
				<?php
				include('side_menu.php');
				?>
			</div>
			<div id="right-content">
				<div id="right-content-bottom">
					<h3><?php echo $_SESSION['name'];?>'s Profile</h3>				
					<table id="profile_tab" align="center">
						<tr>
							<td>Full Name</td>
							<td><?php echo $data_user['full_name'];?></td>
						</tr>
						<tr>
							<td>Profile Picture</td>
							<td><img src="images/avatar.png" height="50" width="50" /></td>
						</tr>
						<tr>
							<td>Username/Email</td>
							<td><?php echo $data_user['username'];?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $data_user['address'];?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><?php echo $data_user['city'];?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $data_user['gender'];?></td>
						</tr>
						<tr>
							<td>Contact</td>
							<td><?php echo $data_user['contact'];?></td>
						</tr>
					</table>
					<a href="update_profile.php">Update Profile</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>