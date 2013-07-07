<html>
<head>
<title>CHINESE</title>
<style>
div
{
background:url(wchinese.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("food");

//query the database
$query = mysql_query("SELECT * FROM chinese");

echo"<body>
<h1 align=center><u> CHINESE </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Chinese_Name</th>
		<th>Chinese_Address</th>
		<th>Chinese_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Chinese_Name'];
			$address = $rows['Chinese_Address'];
			$latitude = $rows['Chinese_Latitude'];
			$longitude = $rows['Chinese_Longitude'];
			$phone = $rows['Chinese_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</div>
</html>