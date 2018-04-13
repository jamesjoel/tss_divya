<?php
include('db.php');

if(! isset($_SESSION['backdoor']))
{
	header("location:login.php");
}
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
					<h3>Welcome : <?php echo $_SESSION['name'];?></h3>				
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