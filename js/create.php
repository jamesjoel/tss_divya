<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add()
		{
			var input = document.createElement("input");
			input.setAttribute('type', 'text');
			input.setAttribute('name', 'stu_name[]');


			var tr = document.createElement("tr");
			var td1= document.createElement("td");
			var td2= document.createElement("td");

			td1.innerHTML="Student Name";
			td2.appendChild(input);

			tr.appendChild(td1);
			tr.appendChild(td2);

			document.getElementById('tab').appendChild(tr);


		}
	</script>
</head>
<body>
	<button onclick="add()">Add More</button>
<form action="save.php" method="post">
<input type="submit" value="Save">
<table id="tab">
	<tr>
		<td>Student Name</td>
		<td><input type="text" name="stu_name[]"/></td>
		<td>Age</td>
		<td><input type="text" name="stu_name[]"/></td>
	</tr>

</table>
</form>
</body>
</html>