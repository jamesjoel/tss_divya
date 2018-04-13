<?php
include('db.php');
include('header.php');
$que="SELECT * FROM product";
$obj=mysql_query($que);

$que_cate="SELECT * FROM category";
$obj_cate=mysql_query($que_cate);

?>
<div id="content">
	<div id="inside-content">
		<?php
		include('menu.php');
		?>
		<div id="main-content">
			<div id="left-content">
				<h3>Product Category</h3>
				<?php
				include('side_menu.php');
				?>
			</div>
			<div id="right-content">
				<div id="slider"></div>
				<div id="right-content-bottom">
					<h3>Latest Product</h3>
					<h4>Help Page</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						

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