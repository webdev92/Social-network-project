<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#wrapper{
	border:black solid 5px;
	height:500px;
	width:600px;
	padding:20px;
	}
#innerWrapTop{
	
	border:black solid 4px;
	height:40px;
	border-radius:20px;
	background:#00F;}
.texts{
	
	width:350px;
	height:25px;
	margin-top:60px;
	font-size:22px;
	}
#submit{
	
	margin-top:20px;
	background:#00F;
	border:black solid 3px;
	border-radius:15px;
	height:30px;
	width:60px;
	font-family:"Comic Sans MS", cursive;
	font-weight:700}
#submit:hover {
	height:34px;
	width:64px;
	}
</style>
</head>

<body>
<div id="wrapper">
<div id="innerWrapTop">
</div>
<form method="post" action="valsignup.php" name="form">
<input type="text" name="id"  class="texts" placeholder="User name"/><br /><div id="error1"></div>
<input type="text" name="fname" class="texts" placeholder="First Name"/><br /><div id="error2"></div>
<input type="password" name="password" class="texts" placeholder="Password"/><br /><div id="error3"></div>
<input type="submit" id="submit" onclick="val()"/>
</form>
</div>
<script>
function val(){
	var x = document.forms.form.id.value;
	var y = document.forms.form.fname.value;
	var g = document.forms.form.password.value;
	
	    if(x == "" || x == null || y == "" || y == null || g == "" || g == null){
			alert("Cannot leave empty fields!");
			}
	}
</script>
</body>
</html>