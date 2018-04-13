<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			height: 100px;
			width: 100px;
		}
		#box1{
			background-color: #368982;
		}
		#box2{
			background-color: #ACED01;
		}
		#box3{
			background-color: #FAE012;
		}
	</style>
	<script type="text/javascript">
		var w = 100;
		function show1()
		{
			document.getElementById("box1").style.backgroundColor="red";
		}
		function show2()
		{
			w++;
			document.getElementById("box2").style.width=w+"px";
		}
		function show3()
		{
			document.getElementById("box2").style.width="100px";
			w=100;
		}
		function show4()
		{
			document.getElementById("first").style.borderColor="red";
		}
		function show5()
		{
			document.getElementById("first").style.borderColor="green";
		}

	</script>
</head>
<body>
<input type="text" id="first" onfocus="show4()" onblur="show5()" onkeydown="show1()" onkeypress="show2()" onkeyup="show3()"/>
<br />
<br />
<input type="text" id="second"  />
<br />
<br />
<input type="text" id="third" />
<br />
<br />
<div id="box1"></div>
<div id="box2"></div>
<div id="box3"></div>
</body>
</html>