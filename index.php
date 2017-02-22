<html>
<head>
<style>
	body{
		background-color: black;
		color: Orange;
	}
	
</style>
	<title>Activity 7</title>
	<script language ="Javascript" type= "text/javascript">
<!--
	function over(){
		document.write("<div onmouseout = 'out()'>Mouse Over </div>" )
	}
	function out(){
		location.reload("Mouse Over") //or document.write but much better yung location.reload
	}
//-->
</script>
</head>
<body>
<P>Bring your mouse cursor inside the div element to see the result:
</P>
<div onmouseover ="over()" onmouseover = "out()">
<h2> This is inside the division</h2>
</div>
</body>
</html>