<?php
include('../db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<h2>Administrator Panel</h2>
	</div>
</div>
<div id="content">
	<div id="inside-content">
		<div id="login-box">
			<h3>Admin Login</h3>
			<form action="auth.php" method="post">
				
			<table align="center">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" placeholder="Username" class="input"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" placeholder="Password" class="input"></td>
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
</body>
</html>