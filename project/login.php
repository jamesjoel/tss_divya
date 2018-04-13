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
					<h3>User Login</h3>
					<div id="login-box">
						<h4>Login for New User</h4>
						<form action="auth.php" method="post">
							
						<table align="center">
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" class="input" placeholder="Username/Email"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" class="input" placeholder="Password"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="submit" value="Login" class="btn">
								</td>
							</tr>

						</table>
						<p class="error">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
							
						}
						?>
						</p>
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