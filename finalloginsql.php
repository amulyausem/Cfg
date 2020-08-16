<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'cfg');
if(!$link){
    die('error connection');
}

$email='';
if( isset( $_POST['email'])) {
    $email = $_POST['email']; 
} 

$id = ''; 
if( isset( $_POST['id'])) {
    $id = $_POST['id']; 
} 

$password = ''; 
if( isset( $_POST['field6'])) {
    $password = $_POST['field6']; 
} 


$query = "select * from `users` where email='$email' && classid='$id' ";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$job=$row['job']; 
$hash=$row['password'];                           
                                     
if (mysqli_num_rows($result) > 0 and password_verify($password,$hash)) {
    //$_SESSION["password"]=$passord;
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