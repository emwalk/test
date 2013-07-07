<html>
<head>
<title>GAS AGENCIES</title>
<style>
div
{
background:url(wlpg.jpg);
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
$query = mysql_query("SELECT * FROM gasagencies");

echo"<body>
<h1 align=center><u> GAS AGENCIES </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>GasAgency_Name</th>
		<th>GasAgency_Address</th>
		<th>GasAgency_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['GasAgency_Name'];
			$address = $rows['GasAgency_Address'];
			$latitude = $rows['GasAgency_Latitude'];
			$longitude = $rows['GasAgency_Longitude'];
			$phone = $rows['GasAgency_PhoneNo'];
		
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