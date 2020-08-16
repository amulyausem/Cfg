<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		
		<br>
		<label>Enter Message</label>
		<input type="text" name="message">
		<input type="submit" name="submit">
		
	</form>
</body>
</html>




<?php
	include ('preincludes/dbh.php');
	include ('preincludes/session.php');
	if(isset($_POST["submit"]))
	{
		$msg=$_POST["message"];
	$query="select phone from `users` where job=0 and classid=$_SESSION['classid']'";

	$result=mysqli_query($link,$query);
	while($res2 = mysqli_fetch_assoc($result))
	{
		// Authorisation details.
	$username = "jonathandabreo24@gmail.com";
	$hash = "ee5cf6f31f0ebccea517ece4e611200f4e9cbc71280abc249a4afe4a301dd66a";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "91".res2['phone']; // A single number or a comma-seperated list of numbers
	$message = $msg;
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
	

}
?>

	

<?php
	/*// Account details
	$apiKey = urlencode("ee5cf6f31f0ebccea517ece4e611200f4e9cbc71280abc249a4afe4a301dd66a");
	$a=array();
	array_push($a,"918805417345","918805417345");
	// Message details
	$numbers = $a;
	$sender = urlencode('TXTLCL');
	$message = $_POST["message"];
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;*/
?>

