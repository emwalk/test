<html>
<head>
<title>HOSPITALS</title>
<style>
div
{
background:url(whospital.jpg);
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
$query = mysql_query("SELECT * FROM hospitals");

echo"<body>
<h1 align=center><u> HOSPITALS </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Hospital_Name</th>
		<th>Hospital_Address</th>
		<th>Hospital_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Hospital_Name'];
			$address = $rows['Hospital_Address'];
			$latitude = $rows['Hospital_Latitude'];
			$longitude = $rows['Hospital_Longitude'];
			$phone = $rows['Hospital_PhoneNo'];
		
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