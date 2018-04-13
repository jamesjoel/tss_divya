<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
		function show()
		{
			var a = Math.random()*1200;
			var b = Math.floor(a);

			var x = Math.random()*800;
			var y = Math.floor(x);
			
			document.getElementById("box").style.marginLeft=b+"px";
			document.getElementById("box").style.marginTop=y+"px";
		}
		
	</script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #14ACE1;
			border-radius: 100px;
		}
	</style>
</head>
<body id="body">
<div id="box" onmousemove="show()"></div>
</body>
</html>