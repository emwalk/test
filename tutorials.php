<html>
<head>
<title>TUTORIALS</title>
<style>
div
{
background:url(wtutorials.jpg);
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
$query = mysql_query("SELECT * FROM tutorials");

echo"<body>
<h1 align=center><u> TUTORIALS </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Tutorial_Name</th>
		<th>Tutorial_Address</th>
		<th>Tutorial_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Tutorial_Name'];
			$address = $rows['Tutorial_Address'];
			$latitude = $rows['Tutorial_Latitude'];
			$longitude = $rows['Tutorial_Longitude'];
			$phone = $rows['Tutorial_PhoneNo'];
		
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