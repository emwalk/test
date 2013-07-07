<html>
  <head>
	<title></title>
	<style>
div
{
background:url(bridge1.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
h1 {font-size:250%;}
h1 {font-family:"Comic Sans MS";}
</style>
  <head>
  <body>
  <div>
	<?php 
	
	//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("userdata");
		 $name  = $_POST['realname'];
		 $pass  = $_POST['mypassword']; 
		

		if(empty($name)===true || empty($pass)===true)
		{
			echo"<font size=6 color=red>Please Fill In All The Fields</font>";
			include('login.php');
		}
		else 
		{
			$query1=mysql_query("SELECT `UserPassword` from `users` where `UserName`='$name'");
			$val=mysql_result($query1,0);
			if($pass==$val)
			{
			include('Epxt1afterlogin.php');
			}
			else
			{
			echo"<font size=6 color=red>Invalid Username or Password</font>";
			include('login.php');
			}
		}
		echo"<br>";
  ?>
  </div>
 </body>
</html>