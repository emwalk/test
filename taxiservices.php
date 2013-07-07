<html>
<head>
<title>TAXI SERVICES</title>
<style>
div
{
background:url(wtaxi.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("travelandtransport");

//query the database
$query = mysql_query("SELECT * FROM taxiservices");

echo"<body>
<h1 align=center><u> TAXI SERVICES </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
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