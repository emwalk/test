<html>
<head>

<style>
div
{
background:url(bridge1.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
h1 {font-size:100%;}
h1 {font-family:"Arial";}
</style>
</head>
<?php
echo"<body>
<div>
<br><br><br>";
	$FirstName=$_POST["fname"];
	$LastName=$_POST["lname"];
	$UserName=$_POST["username"];
	$Password=$_POST["password"];
	$ans=$_POST["answer"];
	$quest=$_POST["field"];

	if(empty($FirstName)===true||empty($LastName)===true || empty($UserName)===true || empty($Password)===true || empty($quest)===true || empty($ans)===true)
	{
		echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size=5 color=red face=Arial>Please fill in all the fields</font>";	
		include ('reregister.php');
	}
		
	else
	{
		include('prelogin.php');
	}
?>
</html>