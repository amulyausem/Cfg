<?php  
include('preincludes/dbh.php');
include('preincludes/session.php');

$email='';
if( isset( $_POST['email'])) {
    $email = $_POST['email']; 
} 

$id = ''; 
if( isset( $_POST['id'])) {
    $id = $_POST['id']; 
} 


$query = "select * from `users` where email='$email' && classid='$id' ";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$job=$row['job'];                            
                                     
if (mysqli_num_rows($result) > 0) {
   $_SESSION["email"] = "$email";
   $_SESSION["id"]="$id";
   $_SESSION["name"]="$name";
   //header("Location: home.html");
   if($job)
   header("Location: Teachers/Teacher_view.php");
   else
   header("Location: Student_view.php");

  
}
else {
   header("Location: newlogin1.html");
}
mysqli_close($link);
?>