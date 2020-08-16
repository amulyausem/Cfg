<?php
/*session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , 'Jonathan@123', 'cfg');
if(!$link){
    die('error connection');
}
$name=$_POST['field1'];
$email=$_POST['field2'];
$id=$_POST['field5'];
$phone=$_POST['field3'];
$job=1;
if($_POST['field4']=="true")
$job=1;
else
$job=0;




       
        $query="insert into  users (name,email,phone,job,classid) values('$name','$email','$phone','$job','$id')";
        $result=mysqli_query($link,$query);
        
        if(!$result){
        die('Query Failed');}
    
*/

?>



<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'cfg');
if(!$link){
    die('error connection');
}
$name=$_POST['field1'];
$email=$_POST['field2'];
$id=$_POST['field5'];
$phone=$_POST['field3'];
$password=$_POST['field6'];
$job=1;
if($_POST['field4']=="true")
$job=1;
else
$job=0;

$_SESSION['id']=$id;
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['phone']=$phone;
$_SESSION['password']=$password;
$_SESSION['job']=$job;
$query="select * from `users` where email='$email'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)==0){
        
        header("Location: encryption.php");

        
}
else{
    header("Location: exists.html");
}
?>