<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: black;
		}
	</style>
	<script type="text/javascript">
		function show()
		{
			document.getElementById("box").style.backgroundColor="red";
			document.getElementById("box").style.height="500px";
			document.getElementById("box").style.width="500px";
		}
	</script>
</head>
<body>
	<button onclick="show()">OK</button>
<div id="box"></div>
</body>
</html>