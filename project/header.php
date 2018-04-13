

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<div id="top-header">
			<div id="left-top-header">
				<p>call us +91-9893630582</p>
			</div>
			<div id="right-top-header"></div>
		</div>
		<div id="bottom-header">
			<div class="bottom-header-left">
				<h1><a href="index.php">TSS.com</a></h1>
			</div>
			<div class="bottom-header-left">
				<a href="#">Contact Info</a>
				<p>call +91-99885588</p>
			</div>
			<div class="bottom-header-left">
				<a href="#">Free Shipping</a>
				<p>for order</p>
			</div>
			<div id="bottom-header-right">
				<ul>
					<?php
					if(isset($_SESSION['backdoor']))
					{ ?>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="profile.php">Profile</a>|</li>		
					<?php
					}else{ ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Signup</a>|</li>
					<?php
					}
					?>
					<?php
					$total=0;
					if(isset($_COOKIE['cart']))
					{
						$arr=explode(",", $_COOKIE['cart']);
						$total=count($arr);
					}
					?>
					<li><a href="my_cart.php">My Cart (<?php echo $total; ?>)</a>|</li>
				</ul>
			</div>
		</div>
	</div>
</div>