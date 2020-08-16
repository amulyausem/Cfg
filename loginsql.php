<?php  
session_start();  
?>  


<?php
include ('preincludes/session.php');
include ('preincludes/dbh.php');

$email='';
if( isset( $_POST['email'])) {
    $id = $_POST['email']; 
} 

$id = ''; 
if( isset( $_POST['id'])) {
    $id = $_POST['id']; 
} 


$query = "select * from `users` where email='$email' && classid='$id' ";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
                                   
                                     
if (mysqli_num_rows($result) > 0) {
   $_SESSION["email"] = "$email";
   header("Location: home.html");
}
else {
   $_SESSION["error"]="Invalid Credentials";
   header("Location: login1.html");
}
mysqli_close($link);
?>