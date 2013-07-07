<html>
<head>
<style>
div
{
background:url(bg2.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
<div>
<?php
//echo"<body background=bridge1.jpg>";
$database=$_POST["database"];

$table=$_POST["table"];

$lat=$_POST["latitude"];
$lon=$_POST["longitude"];
$distance=$_POST["distance"];

if($distance==0)
{
	$distance=0.004496;
}
else if($distance==1)
{
	$distance=0.008992;
}
else if($distance==2)
{
	$distance=0.017984;
}

$lat1=$lat+$distance;
$lat2=$lat-$distance;
$lon1=$lon+$distance;
$lon2=$lon-$distance;
//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("$database");

//query the database

if ($table=='schools')
{
		$query = mysql_query("SELECT * FROM schools WHERE School_Latitude<=$lat1 and School_Latitude in(select School_Latitude from schools
		where School_Latitude>=$lat2 and School_Longitude<=$lon1 and School_Longitude in
		(select School_Longitude from schools where School_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> SCHOOLS </u> </h1>";
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
	}
}
else if ($table=='colleges')
{
		
		$query = mysql_query("SELECT * FROM colleges WHERE College_Latitude<=$lat1 and College_Latitude in(select College_Latitude from colleges
		where College_Latitude>=$lat2 and College_Longitude<=$lon1 and College_Longitude in
		(select College_Longitude from colleges where College_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> COLLEGES </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>College_Name</th>
		<th>College_Address</th>
		<th>College_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['College_Name'];
			$address = $rows['College_Address'];
			$latitude = $rows['College_Latitude'];
			$longitude = $rows['College_Longitude'];
			$phone = $rows['College_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='tutorials')
{
	
	$query = mysql_query("SELECT * FROM tutorials WHERE Tutorial_Latitude<=$lat1 and Tutorial_Latitude in(select Tutorial_Latitude from tutorials
		where Tutorial_Latitude>=$lat2 and Tutorial_Longitude<=$lon1 and Tutorial_Longitude in
		(select Tutorial_Longitude from tutorials where Tutorial_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> TUTORIALS </u> </h1>";
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
	}
}

else if ($table=='firebrigades')
{
	
	$query = mysql_query("SELECT * FROM firebrigades WHERE FireBrigade_Latitude<=$lat1 and FireBrigade_Latitude in(select FireBrigade_Latitude from firebrigades
		where FireBrigade_Latitude>=$lat2 and FireBrigade_Longitude<=$lon1 and FireBrigade_Longitude in
		(select FireBrigade_Longitude from firebrigades where FireBrigade_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> FIRE BRIGADES </u> </h1>";
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
		}
}

else if ($table=='lpggasleakage')
{
	
	$query = mysql_query("SELECT * FROM lpggasleakage WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from lpggasleakage
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from lpggasleakage where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> LPG GAS LEAKAGE </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='policestations')
{
	
	$query = mysql_query("SELECT * FROM policestations WHERE PoliceStation_Latitude<=$lat1 and PoliceStation_Latitude in(select PoliceStation_Latitude from policestations
		where PoliceStation_Latitude>=$lat2 and PoliceStation_Longitude<=$lon1 and PoliceStation_Longitude in
		(select PoliceStation_Longitude from policestations where PoliceStation_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> POLICE STATIONS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>PoliceStation_Name</th>
		<th>PoliceStation_Address</th>
		<th>PoliceStation_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['PoliceStation_Name'];
			$address = $rows['PoliceStation_Address'];
			$latitude = $rows['PoliceStation_Latitude'];
			$longitude = $rows['PoliceStation_Longitude'];
			$phone = $rows['PoliceStation_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='babysitters')
{
	
	$query = mysql_query("SELECT * FROM babysitters WHERE Agency_Latitude<=$lat1 and Agency_Latitude in(select Agency_Latitude from babysitters
		where Agency_Latitude>=$lat2 and Agency_Longitude<=$lon1 and Agency_Longitude in
		(select Agency_Longitude from babysitters where Agency_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align=center> <u> BABY SITTERS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Agency_Name</th>
		<th>Agency_Address</th>
		<th>Agency_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Agency_Name'];
			$address = $rows['Agency_Address'];
			$latitude = $rows['Agency_Latitude'];
			$longitude = $rows['Agency_Longitude'];
			$phone = $rows['Agency_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='drycleaners')
{
	
	$query = mysql_query("SELECT * FROM drycleaners WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from drycleaners
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from drycleaners where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> DRY CLEANERS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='electricians')
{
	
	$query = mysql_query("SELECT * FROM electricians WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from electricians
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from electricians where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> ELECTRICIANS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='gasagencies')
{
	
	$query = mysql_query("SELECT * FROM gasagencies WHERE GasAgency_Latitude<=$lat1 and GasAgency_Latitude in(select GasAgency_Latitude from gasagencies
		where GasAgency_Latitude>=$lat2 and GasAgency_Longitude<=$lon1 and GasAgency_Longitude in
		(select GasAgency_Longitude from gasagencies where GasAgency_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> GAS AGENCIES </u> </h1>";
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
	}
}
else if ($table=='groceries')
{

	$query = mysql_query("SELECT * FROM groceries WHERE Shop_Latitude<=$lat1 and Shop_Latitude in(select Shop_Latitude from groceries
		where Shop_Latitude>=$lat2 and Shop_Longitude<=$lon1 and Shop_Longitude in
		(select Shop_Longitude from groceries where Shop_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> GROCERIES </u> </h1>";
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
	}
}
else if ($table=='refrigerators')
{
	
	$query = mysql_query("SELECT * FROM refrigerators WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from refrigerators
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from refrigerators where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> REFRIGERATORS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='televisions')
{
	
	$query = mysql_query("SELECT * FROM televisions WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from televisions
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from televisions where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> TELEVISIONS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='washingmachines')
{
	
	$query = mysql_query("SELECT * FROM washingmachines WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from washingmachines
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from washingmachines where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> WASHING MACHINES </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='chinese')
{
	
	$query = mysql_query("SELECT * FROM chinese WHERE Chinese_Latitude<=$lat1 and Chinese_Latitude in(select Chinese_Latitude from chinese
		where Chinese_Latitude>=$lat2 and Chinese_Longitude<=$lon1 and Chinese_Longitude in
		(select Chinese_Longitude from chinese where Chinese_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> CHINESE </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Chinese_Name</th>
		<th>Chinese_Address</th>
		<th>Chinese_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Chinese_Name'];
			$address = $rows['Chinese_Address'];
			$latitude = $rows['Chinese_Latitude'];
			$longitude = $rows['Chinese_Longitude'];
			$phone = $rows['Chinese_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='italian')
{

	$query = mysql_query("SELECT * FROM italian WHERE Italian_Latitude<=$lat1 and Italian_Latitude in(select Italian_Latitude from italian
		where Italian_Latitude>=$lat2 and Italian_Longitude<=$lon1 and Italian_Longitude in
		(select Italian_Longitude from italian where Italian_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> ITALIAN </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Italian_Name</th>
		<th>Italian_Address</th>
		<th>Italian_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Italian_Name'];
			$address = $rows['Italian_Address'];
			$latitude = $rows['Italian_Latitude'];
			$longitude = $rows['Italian_Longitude'];
			$phone = $rows['Italian_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='jain')
{

	$query = mysql_query("SELECT * FROM jain WHERE Jain_Latitude<=$lat1 and Jain_Latitude in(select Jain_Latitude from jain
		where Jain_Latitude>=$lat2 and Jain_Longitude<=$lon1 and Jain_Longitude in
		(select Jain_Longitude from jain where Jain_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> JAIN </u> </h1>";
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
	}
}

else if ($table=='punjabi')
{

	$query = mysql_query("SELECT * FROM punjabi WHERE Punjabi_Latitude<=$lat1 and Punjabi_Latitude in(select Punjabi_Latitude from punjabi
		where Punjabi_Latitude>=$lat2 and Punjabi_Longitude<=$lon1 and Punjabi_Longitude in
		(select Punjabi_Longitude from punjabi where Punjabi_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> PUNJABI </u> </h1>";
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
	}
}

else if ($table=='southindian')
{

	$query = mysql_query("SELECT * FROM southindian WHERE SouthIndian_Latitude<=$lat1 and SouthIndian_Latitude in(select SouthIndian_Latitude from southindian
		where SouthIndian_Latitude>=$lat2 and SouthIndian_Longitude<=$lon1 and SouthIndian_Longitude in
		(select SouthIndian_Longitude from southindian where SouthIndian_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> SOUTH INDIAN </u> </h1>";
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
	}
}

else if ($table=='tiffinservices')
{

	$query = mysql_query("SELECT * FROM tiffinservices WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from tiffinservices
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from tiffinservices where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> TIFFIN SERVICES </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='airconditioners')
{

	$query = mysql_query("SELECT * FROM airconditioners WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from airconditioners
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from airconditioners where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> AIR CONDITIONERS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='automobiles')
{

	$query = mysql_query("SELECT * FROM automobiles WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from automobiles
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from automobiles where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> AUTOMOBILES </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='cellphones')
{

	$query = mysql_query("SELECT * FROM cellphones WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from cellphones
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from cellphones where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> CELLPHONES </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='laptops')
{

	$query = mysql_query("SELECT * FROM laptops WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from laptops
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from laptops where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> LAPTOPS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}
else if ($table=='carrentals')
{

	$query = mysql_query("SELECT * FROM carrentals WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from carrentals
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from carrentals where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> CAR RENTALS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='packersandmovers')
{

	$query = mysql_query("SELECT * FROM packersandmovers WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from packersandmovers
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from packersandmovers where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> PACKERS AND MOVERS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='taxiservices')
{

	$query = mysql_query("SELECT * FROM taxiservices WHERE Company_Latitude<=$lat1 and Company_Latitude in(select Company_Latitude from taxiservices
		where Company_Latitude>=$lat2 and Company_Longitude<=$lon1 and Company_Longitude in
		(select Company_Longitude from taxiservices where Company_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> TAXI SERVICES </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>Company_Name</th>
		<th>Company_Address</th>
		<th>Company_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['Company_Name'];
			$address = $rows['Company_Address'];
			$latitude = $rows['Company_Latitude'];
			$longitude = $rows['Company_Longitude'];
			$phone = $rows['Company_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='bloodbanks')
{

	$query = mysql_query("SELECT * FROM bloodbanks WHERE BloodBank_Latitude<=$lat1 and BloodBank_Latitude in(select BloodBank_Latitude from bloodbanks
		where BloodBank_Latitude>=$lat2 and BloodBank_Longitude<=$lon1 and BloodBank_Longitude in
		(select BloodBank_Longitude from bloodbanks where BloodBank_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> BLOOD BANKS </u> </h1>";
		echo"<table align='center' border='1'>
		<tr>
		<th>BloodBank_Name</th>
		<th>BloodBank_Address</th>
		<th>BloodBank_Phone No</th>
		</tr>";

//fetch the results / convert results into an array
		WHILE($rows = mysql_fetch_array($query)):
	
			$first_name = $rows['BloodBank_Name'];
			$address = $rows['BloodBank_Address'];
			$latitude = $rows['BloodBank_Latitude'];
			$longitude = $rows['BloodBank_Longitude'];
			$phone = $rows['BloodBank_PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";
		//echo"<br><br>";
		endwhile;
		
		echo"</table>";
	}
}

else if ($table=='chemists')
{

	$query = mysql_query("SELECT * FROM chemists WHERE 24HourChemist_Latitude<=$lat1 and 24HourChemist_Latitude in(select 24HourChemist_Latitude from chemists
		where 24HourChemist_Latitude>=$lat2 and 24HourChemist_Longitude<=$lon1 and 24HourChemist_Longitude in
		(select 24HourChemist_Longitude from chemists where 24HourChemist_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> 24 HOUR CHEMISTS </u> </h1>";
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
	}
}

else if ($table=='hospitals')
{
	$query = mysql_query("SELECT * FROM hospitals WHERE Hospital_Latitude<=$lat1 and Hospital_Latitude in(select Hospital_Latitude from hospitals
		where Hospital_Latitude>=$lat2 and Hospital_Longitude<=$lon1 and Hospital_Longitude in
		(select Hospital_Longitude from hospitals where Hospital_Longitude>=$lon2))");
		$anymatches=mysql_num_rows($query);
		if ($anymatches == 0)
	{
			echo"<div>
			<br><br>";
			echo "<h1>Sorry, but we can not find an entry to match your query...<br>
			Please try again!</h1>";
			include('form.html');
	}
	else
	{
		echo"<h1 align='center'> <u> HOSPITALS </u> </h1>";
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
	}
}
else
{
	echo"Incorrect Options Chosen!";
}
?>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</html>