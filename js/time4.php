<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #000;
		}
	</style>
	<script type="text/javascript">
		function show()
		{
			var str="";
			for(var i=1; i<=6; i++)
			{
				var a = Math.random()*15;
				var b = Math.floor(a); // randome <= 15 4
				if(b==10)
					str += "A";
				else if(b==11)
					str += "B";
				else if(b==12)
					str += "C";
				else if(b==13)
					str += "D";
				else if(b==14)
					str += "E";
				else if(b==15)
					str += "F";
				else
					str += b;




			}
			document.getElementById("box").style.backgroundColor="#"+str;
			setTimeout("show()", 10);
			
		}
	</script>
</head>
<body>
<div onclick="show()" id="box"></div>
</body>
</html>