<?php
include('db.php');
include('header.php');
$que="SELECT * FROM product";
if(isset($_GET['product_category']))
{
	$que="SELECT * FROM product WHERE product_category=".$_GET['product_category'];
	
}

$obj=mysql_query($que);

// print_r($_COOKIE);

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

					<?php
					while($data=mysql_fetch_assoc($obj))
					{
					?>

					<div class="product-box">
						<div class="product-img">
							<img src="admin/upload/<?php echo $data['product_img']; ?>" />
							<b><?php echo $data['product_name'];?></b>
						</div>
						<div class="product-desc">
							<div class="product-desc-left">
								<p class="old_price">Rs. <?php echo $data['product_price'];?></p>
								<?php
								$p=$data['product_price'];
								$d=$data['product_discount'];
								$dis_price = ($p*$d)/100;
								$sell_price=$p-$dis_price;
								?>
								<p>Rs. <?php echo $sell_price;?>.00</p>
							</div>
							<div class="product-desc-right">
								<a href="#">Buy</a>
								<a href="add_to_cart.php?pid=<?php echo $data['id'] ?>">Add To Cart</a>
							</div>
						</div>
					</div>
					<?php
					}
					?>
					

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