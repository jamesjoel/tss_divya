<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function show(n)
		{

			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;
			var x = parseInt(a);
			var y = parseInt(b);
			switch(n){
				case 1 : var c = x+y;
						break;
				case 2 : var c = x-y;
						break;
				case 3 : var c = x/y;
						break;
				case 4 : var c = x*y;
						break;
			}
			// alert("your ans is : "+c);
			document.getElementById("msg").innerHTML="Your ans is "+c;
		}
	</script>
</head>
<body>
First Num <input type="text" id="f_num"/>
<br />
<br />
Second Num <input type="text" id="s_num"/>
<br />
<button onclick="show(1)">+</button>
<button onclick="show(2)">-</button>
<button onclick="show(3)">/</button>
<button onclick="show(4)">x</button>
<h3 id="msg"></h3>
</body>
</html>