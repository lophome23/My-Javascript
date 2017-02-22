<html>
<head>
	<title>Activity 8</title>
	<script language ="Javascript" type= "text/javascript">
<!--
	function getConfirmation(){
		var retval = confirm("Do you want to continue?");
		if(retval==true){
			document.write("You may proceed");
			return true
		}
		else{
			document.write("See you next time");
			return false;
		}
	}
//-->
</script>
</head>
<body>
<p>Click the following button to see the result:</p>
<form>
<input type="button" value="ClickMe" onclick="getConfirmation()"/>
</form>
</body>
</html>