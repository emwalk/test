<html>
<head><title>Searching...</title>
<style>
div
{
background:url(bg1.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
}
</style>
</head>
<body background=bg1.jpg>
<a href="Expt1.php">
<h3 align=left>Back</h3></a>
<?php
echo "<h2>Search Results:</h2><p>";
$find = $_POST['find'];
$field = $_POST['field'];
$field1 = $_POST['field1'];

//If they did not enter a search term we give them an error
if ($find == "")
{
echo "<p>You forgot to enter a search term!!!";
exit;
}

//connect to the server
$connect = mysql_connect("localhost","root","");

//connect to the datatbase
mysql_select_db("helplines");

// We perform a bit of filtering
$find = strtoupper($find);
$find = strip_tags($find);
$find = trim ($find);

//Now we search for our search term, in the field the user specified
$query = mysql_query("SELECT * FROM $field1  WHERE upper($field) LIKE '%$find%'");
echo"<br><br>";
echo"<table align='center' border='1'>
		<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Phone No</th>
		</tr>";
		
//And we display the results
	WHILE($rows = mysql_fetch_array($query)):

			$first_name = $rows['Name'];
			$address = $rows['Address'];
			$phone = $rows['PhoneNo'];
		
		echo"<tr>";
		echo"<td>".$first_name."</td>";
		echo"<td>".$address."</td>";
		echo"<td>".$phone."</td>";
		echo"</tr>";

	endwhile;


//This counts the number or results - and if there wasn't any it gives them a little message explaining that
$anymatches=mysql_num_rows($query);
if ($anymatches == 0)
{
echo "Sorry, but we can not find an entry to match your query...<br><br>";
}
?>

</body>
</html>