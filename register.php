<?php
include ('preincludes/session.php');
include ('preincludes/dbh.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_register.css">
</head>
<body>

<div class="form-style-5">
<form class="form-f" action="register.php" method="post">
<fieldset>

<legend><span class="number">1</span> Candidate Info</legend>
<label for="field1">Name:</label>
<input type="text" name="field1" placeholder="Your Name *">
<label for="field2">Email:</label>
<input type="email" name="field2" placeholder="Your Email *">
<label for="field3">Phone No:</label>
<input type="text" name="field3" placeholder="Phone No *">

<label for="job">Login as:</label>
<select id="job" name="field4">
<option value=true>Teacher</option>
    <option value=false>Student</option>
</select>  

<label for="field5">Classroom ID:</label>
<input type="text" name="field5" placeholder="Classroom ID *">    
</fieldset>

<input type="submit"   value="Submit" name="submit" />
</form>
</div>

</body>
</html>






<!---this is the form handling section where we enter users into database-->

<?php

$name=$_POST["field1"];
$email=$_POST["field2"];
$phone=$_POST["field3"];
$rol=$_POST["field4"];
$classid=$_POST["field5"];









?>