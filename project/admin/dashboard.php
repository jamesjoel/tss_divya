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
		<h3>Welcome : Admin</h3>
	</div>
</div>
</body>
</html>