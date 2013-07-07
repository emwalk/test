<html>
<head>
<title>JAIN</title>
<style>
div
{
background:url(wjain.jpg);
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
$query = mysql_query("SELECT * FROM jain");

echo"<body>
<h1 align=center><u> JAIN </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Jain_Name</th>
		<th>Jain_Address</th>
		<th>Jain_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Jain_Name'];
			$address = $rows['Jain_Address'];
			$latitude = $rows['Jain_Latitude'];
			$longitude = $rows['Jain_Longitude'];
			$phone = $rows['Jain_PhoneNo'];
		
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