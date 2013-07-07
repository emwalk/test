<html>
<head>
<title>24 HOUR CHEMISTS</title>
<style>
div
{
background:url(wchemist.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("medical");

//query the database
$query = mysql_query("SELECT * FROM chemists");

echo"<body>
<h1 align=center><u> 24 HOUR CHEMISTS </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>24HourChemist_Name</th>
		<th>24HourChemist_Address</th>
		<th>24HourChemist_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['24HourChemist_Name'];
			$address = $rows['24HourChemist_Address'];
			$latitude = $rows['24HourChemist_Latitude'];
			$longitude = $rows['24HourChemist_Longitude'];
			$phone = $rows['24HourChemist_PhoneNo'];
		
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