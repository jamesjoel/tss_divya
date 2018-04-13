<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			document.getElementById("img").setAttribute("src", "2.jpg");
		}
	</script>
	<style type="text/css">
		#img{
			height: 400px;
			width: 300px;
			border:1px solid #CCC;
			border-radius: 10px;
			padding: 10px;
			margin: 10px;
		}
		.small_img{
			height: 100px;
			width: 100px;
			border:1px solid #CCC;
			border-radius: 5px;
			padding: 5px;
			margin: 5px;
			cursor: pointer;
		}
	</style>
	<script type="text/javascript">
		function change(a)
		{
			document.getElementById("img").setAttribute("src", a);
		}
	</script>
</head>
<body>
	<div style="margin: 50px auto; min-height: 600px; width: 650px; height: auto; border:1px solid #DDD; text-align: center;">
		<img id="img" src="1.jpg">
		<hr />
		<img src="1.jpg" class="small_img" onmouseover="change('1.jpg')">
		<img src="2.jpg" class="small_img" onmouseover="change('2.jpg')">
		<img src="3.jpg" class="small_img" onmouseover="change('3.jpg')">
		<img src="4.jpg" class="small_img" onmouseover="change('4.jpg')">
		<img src="5.jpg" class="small_img" onmouseover="change('5.jpg')">

	</div>
</body>
</html>