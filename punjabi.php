<html>
<head>
<title>PUNJABI</title>
<style>
div
{
background:url(wpunjabi.jpg);
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
$query = mysql_query("SELECT * FROM punjabi");

echo"<body>
<h1 align=center><u> PUNJABI </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Punjabi_Name</th>
		<th>Punjabi_Address</th>
		<th>Punjabi_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Punjabi_Name'];
			$address = $rows['Punjabi_Address'];
			$latitude = $rows['Punjabi_Latitude'];
			$longitude = $rows['Punjabi_Longitude'];
			$phone = $rows['Punjabi_PhoneNo'];
		
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