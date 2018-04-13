<?php
include('db.php');
include('header.php');
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
					<h3>Registartion</h3>
					<div id="login-box">
						<h4>User Signup</h4>
						<form action="save.php" method="post">
						<table align="center">
							<tr>
								<td>Full Name</td>
								<td><input type="text" class="input" name="full_name" placeholder="Full Name"></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" class="input" name="username" placeholder="Username/Email"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" class="input" name="pass" placeholder="Password"></td>
							</tr>
							<tr>
								<td>Re-Password</td>
								<td><input type="password" class="input" placeholder="Re-Password"></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><textarea rows="5" cols="30" name="add"></textarea></td>
							</tr>
							<tr>
								<td>City</td>
								<td><select class="input" name="city">
									<option>Select</option>
									<option>Indore</option>
									<option>Ujjain</option>
									<option>Bhopal</option>
									<option>Mumbai</option>
								</select></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>Male<input type="radio" name="gender" value="male" />
									Female<input type="radio" name="gender" value="female" /></td>
							</tr>
							<tr>
								<td>Contact</td>
								<td><input type="text" class="input" name="contact" placeholder="Contact"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="submit" name="submit" value="Signup" class="btn">
								</td>
							</tr>

						</table>
					</form>
					</div>
					
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