<html>
<head>
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
</head>
<?php
echo"<body>
<div>
<br>";
echo"<h1 align=center><b><u> COMMENTS </u></b></h1>";
//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("comments");

$query1=mysql_query("SELECT COUNT(`UserComment`) FROM `usercomments`");
$val= mysql_result($query1,0);
if ($val<=5)
{
	//query the database
	$query = mysql_query("SELECT * FROM usercomments");

	echo"<body>
	<div>";
//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
			echo"<table cellpadding='6'>
		
		<br><br>";
			$user_name = $rows['UserName'];
			$comment = $rows['UserComment'];
		
		echo"<tr>";
		echo"<td> <b>".$user_name."</b></td> </tr>";
		echo"<tr> <td>".$comment."</td>";
		echo"</tr>";
		endwhile;
		
		echo"</table>";
		echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>";
}
else
{
//query the database
$query = mysql_query("SELECT * FROM usercomments");


//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
			echo"<table cellpadding='6'>
		
		<br><br>";
			$user_name = $rows['UserName'];
			$comment = $rows['UserComment'];
		
		echo"<tr>";
		echo"<td> <b>".$user_name."</b></td> </tr>";
		echo"<tr> <td>".$comment."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
}
?>
<a href="0.php">
Back
</div>
</body>
</html>