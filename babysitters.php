<html>
<head>
<title>BABY SITTERS</title>
<style>
div
{
background:url(wbaby.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("household");

//query the database
$query = mysql_query("SELECT * FROM babysitters");

echo"<body>
<div>
<h1 align=center><u> BABY SITTERS </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Agency_Name</th>
		<th>Agency_Address</th>
		<th>Agency_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Agency_Name'];
			$address = $rows['Agency_Address'];
			$latitude = $rows['Agency_Latitude'];
			$longitude = $rows['Agency_Longitude'];
			$phone = $rows['Agency_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		echo"</table>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>";
?>
</body>
</div>
</html>