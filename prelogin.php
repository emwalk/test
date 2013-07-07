<html>
<head>
<title>Success!</title>
<style>
div
{
background:url(bridge1.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
h1 {font-size:200%;}
h1 {font-family:"Arial Black";}
</style>
</head>
<?php
echo"<body>
<div>
<br><br><br><br><br>
<h1 align=center>Your account has been created! </h1>
<br><br>
<br>";
	$FirstName=$_POST["fname"];
	$LastName=$_POST["lname"];
	$UserName=$_POST["username"];
	$Password=$_POST["password"];
	$quest=$_POST["field"];
	$ans=$_POST["answer"];
	//connect to the server
	$connect = mysql_connect("localhost","root","");

	//connect to the datatbase
	mysql_select_db("userdata");
		
	$queryins = mysql_query("INSERT INTO users (FirstName,LastName,UserName,UserPassword,Active,SecQuest,Answer) VALUES
                 ('$FirstName','$LastName','$UserName','$Password',0,'$quest','$ans')");
	
	echo"<h2 align=center>
	WELCOME $FirstName $LastName TO ALL ABOUT NUMBERS!!!
	<br><br>
	<a href=login.php>
	<b>Click to login</b>
	</a>
	</h2>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	</body>";
	
	
?>
</html>