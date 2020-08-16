<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'cfg');
if(!$link){
    die('error connection');
}
$name=$_SESSION["name"];
$pass1=$_SESSION["password"];
$email=$_SESSION["email"];
$phone=$_SESSION["phone"];
$job=$_SESSION["job"];
$id=$_SESSION["id"];
$password = password_hash($pass1, PASSWORD_DEFAULT);
$query="insert into `users`(name,email,phone,job,classid,password) values('$name','$email','$phone','$job','$id','$password')";
        $result=mysqli_query($link,$query);
    
        if(!$result){
        die('Query Failed');
        }
        else{
            header("Location: newlogin.html");
        }
    }
?>

