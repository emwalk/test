<html>
<head>
<title>SCHOOLS</title>
<style>
div
{
background:url(wschool.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("education");

//query the database
$query = mysql_query("SELECT * FROM schools");

echo"<body>
<h1 align=center><u> SCHOOLS </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>School_Name</th>
		<th>School_Address</th>
		<th>School_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['School_Name'];
			$address = $rows['School_Address'];
			$latitude = $rows['School_Latitude'];
			$longitude = $rows['School_Longitude'];
			$phone = $rows['School_PhoneNo'];
		
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