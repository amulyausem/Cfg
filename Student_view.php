<?php 
include('preincludes/dbh.php');
include('preincludes/session.php');
echo $_SESSION["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Student_view.css">
</head>
<body>
   <div class="container-fluid mt-1 w-100">
    <div class="row">
<!--   SideNav    -->
        <nav class="col-md-3 col-lg-2 d-md-blockbg-light sidebar-collapse border-right">
            <div class="sidebar-sticky pt-3">

        <h4 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          
          <?php
              echo "<span>".$_SESSION['name']."</span>"
          ?>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h4>
        
      </div>
        </nav>
<!--   SideNav    -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> STUDENT Dashboard</h1>
        
      </div>
       <!--    Basic Stats     -->
       
    <!--    Basic Stats     -->
    <hr>
    <!--   Scrollable Text View  For Assignments  -->
         
    <!--     Dynamically Generated list of cards         -->
               <div class="card mb-1 p-2">
                <form action="studentsuploadfile.php" method="post" enctype="multipart/form-data">
                   <label for="field1">ASSIGNMENT NO:</label>
                   <input type="text" name="ass_no" placeholder="Assignment no">
                   <br>
                   <input type="file" name="file" id="">
                    <input type="submit" value="Upload" class="btn btn-success btn-sm mt-2 " id="upload_button" name="but_upload">
                  </form>
               </div>
               
               
        <!--     Dynamically Generated list of cards         -->
           
           
       <hr>
           <!--   Scrollable Text View    -->
           <div class="container mt-5 jumbotron pt-1" id="text_view">
    <!--     Dynamically Generated list of cards         -->

              <?php 
              $id=$_SESSION['id'];
              $query="select * from links where classid='".$id."';";
              $result = mysqli_query($link,$query);
              if(mysqli_num_rows($result) > 0)
              {
                while($row = mysqli_fetch_assoc($result))
                {
                  echo "
                    <div class='card mb-1 p-2'>
                   <h5 class='p-0 m-0'>".$row["title"]."</h5>
                   <p class='p-0 m-0'><a href='".$row["link"]."'>Click to view lecture</a></p>
                      </div>
                  ";
                }
              }
              ?>
               <!--
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>
               <div class="card mb-1 p-2">
                   <h5 class="p-0 m-0">Lecture Name</h5>
                   <p class="p-0 m-0"><a href="#">Click to view lecture</a></p>
               </div>-->
               
        <!--     Dynamically Generated list of cards         -->

        <!--Dynamically generated list of lecture videos-->
        </div>
        <hr>
        <div class="container mt-5 jumbotron pt-1" id="text_view">
        <div class="card mb-1 p-100" id="video_card">
          <iframe id="video" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        <div class="card mb-1 p-100" id="video_card">
          <iframe id="video" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        <div class="card mb-1 p-100" id="video_card">
          <iframe id="video" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        </div>
        <!--Dynamically generated list of lecture videos-->
<!--
           <div class="card w-25" >
              <form-group class="p-1" id="Assignment-form">
                 <div class="card-title">
                  <input type="text" name="title" id="" class="w-100" placeholder="Title">
                  <textarea name="details" id="" cols="30" rows="10" placeholder="Details" ></textarea>
                 </div>
              </form-group>
          </div>

           <button class="btn btn-primary" id="add_button"><span id="add_plus">+</span></button>-->
    <!--   Scrollable Text View    -->
      
        <!--   File upload   
       <form-gorup class=" p-1">
         <h2>Upload file here</h2>
           <input type="file" name="upload" id="">
           <br>
           <input type="submit" value="Upload" class="btn btn-success mt-2">
       </form-gorup>
         File upload   -->
       <hr>

       
        </main>
    </div>
      </div>
       
</body>
</html>




<!--
 <article class='container  h-100 bg-secondary'  id="side_nav">
        <div class="container">
            <h1>Teacher</h1>
            <h3>NAME_OF_TEACHER</h3>
        </div>
    </article>
    <main>
        
    </main>-->
