<?php
$data=array('name'=>"rohit", 'age'=>30, 'city'=>'mumbai');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center" width="500" height="200">
	<tr>
		<td>Name</td>
		<td>Age</td>
		<td>City</td>
	</tr>
	<?php
	echo "<tr>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['age']."</td>";
	echo "<td>".$data['city']."</td>";
	echo "</tr>";
	?>
</table>
</body>
</html>