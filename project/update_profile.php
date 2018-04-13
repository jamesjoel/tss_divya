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
					<form action="update.php" method="post">
					<table id="profile_tab" align="center">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="full_name" value="<?php echo $data_user['full_name'];?>" /></td>
						</tr>
						<tr>
							<td>Profile Picture</td>
							<td><img src="images/avatar.png" height="50" width="50" /></td>
						</tr>
						<tr>
							<td>Username/Email</td>
							<td><input disabled="disabled" type="text" name="username" value="<?php echo $data_user['username'];?>" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="add"><?php echo $data_user['address'];?></textarea></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="input" name="city">
									<option>Select</option>
									<option <?php if($data_user['city']=='Indore'){ echo "selected='selected'"; }?> >Indore</option>
									<option <?php if($data_user['city']=='Ujjain'){ echo "selected='selected'"; }?>>Ujjain</option>
									<option <?php if($data_user['city']=='Bhopal'){ echo "selected='selected'"; }?>>Bhopal</option>
									<option <?php if($data_user['city']=='Mumbai'){ echo "selected='selected'"; }?>>Mumbai</option>
								</select></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male<input type="radio" <?php if($data_user['gender']=='male'){ echo "checked='checked'"; } ?> name="gender" value="male" />
									Female<input type="radio" <?php if($data_user['gender']=='female'){ echo "checked='checked'"; } ?> name="gender" value="female" /></td>
						</tr>
						<tr>
							<td>Contact</td>
							<td><input type="text" name="contact" value="<?php echo $data_user['contact'];?>" /></td>
						</tr>
						<tr>
								<td colspan="2" align="center">
									<input type="submit" name="submit" value="Update" class="btn">
								</td>
							</tr>
					</table>
				</form>
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