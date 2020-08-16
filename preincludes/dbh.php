<?php

$link = mysqli_connect("localhost", "root", "Jonathan@123","php_tut");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else 
{
	echo "success";
}

?>