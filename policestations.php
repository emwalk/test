<html>
<head>
<title>POLICE STATIONS</title>
<style>
div
{
background:url(wpolice.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("emergency");

//query the database
$query = mysql_query("SELECT * FROM policestations");

echo"<body>
<h1 align=center><u> POLICE STATIONS </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>PoliceStation_Name</th>
		<th>PoliceStation_Address</th>
		<th>PoliceStation_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['PoliceStation_Name'];
			$address = $rows['PoliceStation_Address'];
			$latitude = $rows['PoliceStation_Latitude'];
			$longitude = $rows['PoliceStation_Longitude'];
			$phone = $rows['PoliceStation_PhoneNo'];
		
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