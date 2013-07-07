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
	session_start();
	//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("userdata");

if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$password_hash=md5($password);
 
	//echo $password_hash;
	
	if(!empty($username)&&!empty($password))
	{
		$query = mysql_query("SELECT * FROM users WHERE UserName ='$username' AND UserPassword ='$password'");
 
		$data = mysql_fetch_array($query);
 
		//$test=$data['UserPassword'];
 
		//$query_run=$query;
		$query_num_rows = mysql_num_rows($query);
		//echo $query_num_rows;
			if($query_num_rows==0)
			{
				echo"<br><br>";
				echo "<font color=red>Invalid username/password combination</font>";
				include('login.php');
			}
			else if($query_num_rows==1)
			{
				include('Epxt1afterlogin.php');

			}

	}
	else
	{
		echo"<br><br>";
		echo "<font color=red>Please fill in all the fields</font>";
		include('login.php');
	}
  
}
?>
  </div>
 </body>
</html>