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
		h1 {font-size:100%;}
		h1 {font-family:"Arial";}
		h2 {font-size:250%;}
		h2 {font-family:"Algerian";}
	</style>
  <head>
  <div>
  <body>
  <?php
  
  session_start();
	//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("userdata");

if(isset($_POST['username'])&&isset($_POST['field'])&&isset($_POST['answer']))
{
	$username = $_POST['username'];
	$quest = $_POST['field'];
	$ans=$_POST['answer'];
	//$password_hash=md5($password);
 
	//echo $password_hash;
	
	if(!empty($username)&&!empty($quest))
	{
		$query = mysql_query("SELECT * FROM users WHERE UserName ='$username' AND SecQuest ='$quest' AND Answer='$ans'") or die(mysql_error()); 
 
		$data = mysql_fetch_array($query);
 
		//$test=$data['UserPassword'];
 
		//$query_run=$query;
		$query_num_rows = mysql_num_rows($query);
		//echo $query_num_rows;
			if($query_num_rows==0)
			{
				echo"<br><br>";
				echo "<font color=red>Invalid username/security question combination</font>";
				include('forgotpassword.php');
			}
			else if($query_num_rows==1)
			{
				$query1 = mysql_query("SELECT UserPassword FROM users WHERE UserName ='$username' AND SecQuest ='$quest' AND Answer='$ans'") or die(mysql_error());
				$result=mysql_result($query1,0);
				echo'<font color=red>Your password is:</font>'.$result;
				include('login.php');

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
  </body>
  </div>
</html>