<html>
<head>
<title>SOUTH INDIAN</title>
<style>
div
{
background:url(wsouthindian.jpg);
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
$query = mysql_query("SELECT * FROM southindian");

echo"<body>
<h1 align=center><u> SOUTH INDIAN </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>SouthIndian_Name</th>
		<th>SouthIndian_Address</th>
		<th>SouthIndian_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['SouthIndian_Name'];
			$address = $rows['SouthIndian_Address'];
			$latitude = $rows['SouthIndian_Latitude'];
			$longitude = $rows['SouthIndian_Longitude'];
			$phone = $rows['SouthIndian_PhoneNo'];
		
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