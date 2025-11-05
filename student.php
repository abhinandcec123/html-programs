<html>
<head>
<title>Student Details</title>
</head>
<body align="center">
<h2>Details of student</h2>
<form method="REQUEST" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input_type="text" name="name"><br><br>
Email:<input_type="email" name="mail"><br><br>
Address:<textarea rows="4" name="adrs"></textarea><br><br>
Gender:M<input type="radio" value="M" name="gender">F<input type="radio" value="F" name="gender"><br><br>
DOB:<input type="date" name="dob"><br><br>
<input type="Submit" value="Submit">
</form>
<?php
	if($SERVER["REQUEST_METHOD"]=="GET"){
	if(isset($_REQUEST["name"],$_REQUEST["mail"],$_REQUEST["adrs"],$_REQUEST["gender"],$_REQUEST["dob"])){
	$name=$REQUEST["name"];
	$mail=$REQUEST["mail"];
	$adrs=$REQUEST["adrs"];
	$gen=$REQUEST["gender"];
	$dob=$REQUEST["dob"];
	echo="<br><br>DETAILS:<br><br>";echo "Name:$name <br> Email ID:$mail <br> Address:$adrs <br> Gender:$gen <br> D.O.B:$dob";
	}
	else
	{
	   echo"<p>Please enter values.</p>";
	}
	?>
	</body>
	</html>
	
	
