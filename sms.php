<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<label>Mobile Number</label>
		<input type="text" name="num">
		<br><br>
		<label>Enter Message</label>
		<input type="text" name="message">
		<input type="submit" name="submit">
		
	</form>
</body>
</html>




<?php

	if(isset($_POST["submit"]))
	{


	// Authorisation details.
	$username = "jonathandabreo24@gmail.com";
	$hash = "ee5cf6f31f0ebccea517ece4e611200f4e9cbc71280abc249a4afe4a301dd66a";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = array("919823144058"); // A single number or a comma-seperated list of numbers
	$message = $_POST["message"];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);


	echo $result;

}
?>

