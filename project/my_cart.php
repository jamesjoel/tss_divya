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
					<a href="clear_cart.php">Clear Cart</a>
					<h3>Your Cart</h3>
					<?php
					$ids=$_COOKIE['cart'];
					$arr=explode(",", $ids);
					$total=0;
					foreach($arr as $x)
					{ 
						$data_cart=mysql_fetch_assoc(mysql_query("SELECT * FROM product WHERE id=$x"));
						$total += $data_cart['product_price'];
						?>



					<div id="login-box" style="width: 700px !important; min-height: 70px !important; margin: 10px auto !important">
						<div style="float: left; width: 100px; height: 62px; border:1px solid #CCC; padding: 2px;">
							<img src="admin/upload/<?php echo $data_cart['product_img']; ?>" height="60" width="96">
						</div>
						<div style="float: left; width: 550px; padding: 0px 10px;">
							<p style="float: left;"><?php echo $data_cart['product_name'];?></p>
							<p style="float: right; text-align: right;"><?php echo $data_cart['product_price'];?></p>

						</div>

					</div>
					<?php
					}
					?>
					<div style="width: 700px; height: 20px; background-color: #0075AD; padding: 5px; margin-bottom: 50px; color: #FFF">
						<h4 style="float: left; margin: 0; padding: 0;">Grand Total</h4>
						<h4 style="float: right; margin: 0; padding: 0;"><?php echo $total; ?>.00</h4>

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