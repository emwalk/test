<html>
<head>
<title>GROCERIES</title>
<style>
div
{
background:url(wgrocery.jpg);
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
$query = mysql_query("SELECT * FROM groceries");

echo"<body>
<h1 align=center><u> GROCERIES </u></h1>
</body>";

		echo"<table align='center' border='1'>
		<tr>
		<th>Shop_Name</th>
		<th>Shop_Address</th>
		<th>Shop_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Shop_Name'];
			$address = $rows['Shop_Address'];
			$latitude = $rows['Shop_Latitude'];
			$longitude = $rows['Shop_Longitude'];
			$phone = $rows['Shop_PhoneNo'];
		
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