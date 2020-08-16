<?php
include('preincludes/dbh.php');
include('preincludes/session.php');

if(isset($_POST['but_upload'])){
  $file=$_FILES['file']; 

  $fileName=$_FILES['file']['name'];
  $fileTmpName=$_FILES['file']['tmp_name'];
  $fileSize=$_FILES['file']['size'];
  $fileError=$_FILES['file']['error'];
  $fileType=$_FILES['file']['type'];

  $fileExt=explode('.',$fileName);
  $fileactualext=strtolower(end($fileExt));

  $allow=array('jpg','jpeg','png','mp4','pdf');
  if(in_array($fileactualext,$allow)){
    if($fileError === 0){
      if($fileSize < 10000000000){
        //$filenamenew=$_SESSION["name"];
        $filedest='uploads/'.$filenamenew;
        move_uploaded_file($fileTmpName,$filedest);
        header("Location:searchbook.php?uploadsuccess");
    }
    else{
      echo "Too big";
    }
  }
    else{
      echo "Error uploading your file";
    }
  }
  else{
    echo "Invalid type";
  }
}
 
?>