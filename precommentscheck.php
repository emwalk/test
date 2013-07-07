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
	$UserId=$_POST["userid"];
	$UserName=$_POST["username"];
	$UserComment=$_POST["usercomment"];
	if(empty($UserId)===true||empty($UserName)===true || empty($UserComment)===true)
	{
		echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size=5 color=red face=Arial>Please fill in all the fields</font>";	
		include ('reprecomments.php');
	}
		
	else
	{
		include('comments1.php');
	}
?>
</html>