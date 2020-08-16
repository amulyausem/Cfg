<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'login');
if(!$link){
    die('error connection');
}
$name=$_POST['name'];
$email=$_POST['email'];
$id=$_POST['id'];
$phone=$_POST['phone'];
$job=$_POST['id'];


$query="select * from `users` where email='$email'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)==0){
        $_SESSION["email"]=$email;
    $pass1=$_SESSION["pass"];
    $password = password_hash($pass1, PASSWORD_DEFAULT);
        $query="insert into `users`(name,email,phoneno,job,classid) values('$name','$email','$phone','$job','$id')";
        $result=mysqli_query($link,$query);
        //header("Location:newreg.html");
}
else{
    header("Location: exists.html");
}
?>