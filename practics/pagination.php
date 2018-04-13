<?php
mysql_select_db("epolitics", mysql_connect("localhost", "root", ""));

$que="SELECT * FROM statelist";
$obj=mysql_query($que);

$total_rec = mysql_num_rows($obj);



$rec_per_page=25;
$total_pages = $total_rec/$rec_per_page; // 40.145 = 41 , 40 = 40
$total_pages = ceil($total_pages);




$que_pagi="SELECT * FROM statelist LIMIT $rec_per_page";

if(isset($_GET['page']))
{
	$a = $_GET['page']; // 9
	$b = ($a-1)*$rec_per_page;
	$que_pagi = "SELECT * FROM statelist LIMIT $b, $rec_per_page";
}




$obj_pagi=mysql_query($que_pagi);





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.pages{
			text-decoration: none;
			border-radius: 3px;
			padding: 5px 8px;
			background-color: #f2f2f2;
			display: inline-block;
			margin:3px;
			color: #000;
		}
		.pages:hover{
			background-color: #ddd;
		}
		.active{
			
			background-color: #ddd !important;
		}
		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white;
		}
	</style>
</head>
<body>
<div style="width: 800px; padding: 15px; border-radius: 10px; margin:50px auto; min-height: 600px; height: auto; ">
	<?php
	if(($a-1)>0)
	{?>
		<a href="pagination.php?page=<?php echo $a-1;?>" class="pages">Pre</a>

	<?php
	}
	?>

	<?php
	for($i=1; $i<=$total_pages; $i++)
	{ 
		if($a==$i)
		{?>

			<a href="pagination.php?page=<?php echo $i; ?>" class="pages active"><?php echo $i; ?></a>
		<?php }
		else
		{ ?>
			<a href="pagination.php?page=<?php echo $i; ?>" class="pages"><?php echo $i; ?></a>

		<?php
		}
		?>

	<?php
	}
	?>
	<?php
	if(($a+1)<=$total_pages)
	{ ?>
		<a href="pagination.php?page=<?php echo $a+1;?>" class="pages">Next</a>

	<?php
	}
	?>


	<table id="customers">
		<tr>
			<th>#</th>
			<th>City Name</th>
			<th>State Name</th>
		</tr>
		<?php
		while($data=mysql_fetch_assoc($obj_pagi))
		{ ?>
			<tr>
				<td><?php echo $data['city_id'];?></td>
				<td><?php echo $data['city_name'];?></td>
				<td><?php echo $data['state'];?></td>
			</tr>
		<?php
		}
		?>

	</table>
</div>
</body>
</html>