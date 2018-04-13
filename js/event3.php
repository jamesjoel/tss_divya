<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var h=200;
		var w=200;
		function show1()
		{
			document.getElementById('box').style.backgroundColor="#663355";
		}
		function show2()
		{
			h++;
			w++;
			document.getElementById("box").style.height=h+"px";
			document.getElementById("box").style.width=w+"px";
		}
		function show3()
		{
			document.getElementById('box').style.backgroundColor="#14ACE1";
			document.getElementById('box').style.height="200px";
			document.getElementById('box').style.width="200px";
			h=200;
			w=200;
		}
	</script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #14ACE1;
		}
	</style>
</head>
<body id="body">
<div id="box" onmouseover="show1()" onmousemove="show2()" onmouseout="show3()"></div>
</body>
</html>