<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #1452AC;
		}
	</style>
	<script type="text/javascript">
		var w = 200;
		var h = 200;
		var time="";
		function start()
		{
			w++;
			h++;
			document.getElementById("box").style.width=w+"px";
			document.getElementById("box").style.height=h+"px";
			time=setTimeout("start()", 10);
		}
		function pause()
		{
			clearTimeout(time);
		}
		function reset()
		{
			h=200;
			w=200;
			document.getElementById("box").style.width="200px";
			document.getElementById("box").style.height="200px";
		}

	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="reset()">Reset</button>
<div id="box"></div>
</body>
</html>