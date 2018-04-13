<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			setTimeout("demo()", 3000);
		}
		function demo()
		{
			alert("Hello");
			setTimeout("demo()", 1000);
		}
	</script>
</head>
<body>
<button onclick="show()">OK</button>
</body>
</html>