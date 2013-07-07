<html>
  <head>
	<title>Password test, page 2</title>
  <head>

  <body>
	<?php 
		 $name  = $_POST['realname'];
		 $pass  = $_POST['mypassword']; 

		 //read the contents of our password file.
		 $myFile = "password.txt";
		 $fh = fopen($myFile, 'r');
		 $data = fgets($fh);
		 fclose($fh);

		 //echo the data from the text file
		 echo $data;

		 //print out an HTML line break
		 print "<br>";

		 //now we need to split our line of data from the text
		 //file so that we can do the comparison.

		 //split the text into an array
		 $text = explode(":",$data);

 
		 //echo the split user name
		 echo $text[0];
	 
		 //print out an HTML line break
		 print "<br>";

		 //echo the split password
		 echo $text[1];

		 //assign the data to variables
		 $good_name = $text[0];
		 $good_pass = $text[1];

		 //print out an HTML line break
		 print "<br>";

		 //compare the strings
		 if( $name === $good_name && $pass === $good_pass){
			echo "That is the correct log-in information";
		 }else{
			echo "That is not the correct log-in information.";
		 }
	  ?>	
		<br>
  
  </body>
</html>