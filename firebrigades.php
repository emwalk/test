<html>
<head>
<title>FIRE BRIGADES</title>
<style>
div
{
background:url(wfb.jpg);
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
$query = mysql_query("SELECT * FROM firebrigades");

echo"<body>
<h1 align=center><u> FIRE BRIGADES </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>FireBrigade_Name</th>
		<th>FireBrigade_Address</th>
		<th>FireBrigade_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['FireBrigade_Name'];
			$address = $rows['FireBrigade_Address'];
			$latitude = $rows['FireBrigade_Latitude'];
			$longitude = $rows['FireBrigade_Longitude'];
			$phone = $rows['FireBrigade_PhoneNo'];
		
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