<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}
		#box{
			height: 200px;
			width: 200px;
			background-color: #6589AC;
		}
	</style>
	<script type="text/javascript">
		var l = 0;
		function show()
		{
			l++;
			document.getElementById("box").style.marginLeft=l+"px";
			setTimeout("show()", 10);
		}
	</script>
</head>
<body>
	<button onclick="show()">OK</button>
<div id="box"></div>
</body>
</html>