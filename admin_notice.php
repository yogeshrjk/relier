<?php 
error_reporting(0); 
include "admin_header.php";
?> 

<title>notice</title>
<?php 
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['submit'])) { 
  
    $filename = $_FILES["image"]["name"]; 
    $tempname = $_FILES["image"]["tmp_name"];  
    $id=$_POST['id'];
    $text = $_POST['des'];
    $title = $_POST['title'];  
    $date = $_POST['date'];
    $folder = "assets/images/notice/".$filename; 
    
          
    if(!$db){
        die("connection failed");
    }
    $msg=  "connected successfully";
    
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO notice (title, image, comment, date) VALUES ('$title','$filename','$text','$date')"; 
  
        // Execute query 
        mysqli_query($db, $sql); 
        
        // move the uploaded image into the folder: images
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  
  $result = mysqli_query($db, "SELECT * FROM image"); 
  //delete row
 
  if (isset($_POST['delete'])) {
      
  $sql1 ="DELETE FROM notice WHERE id = '{$_REQUEST['id']}'";
  if(mysqli_query($db, $sql1)){
   $msg= "record deleted successfully"; 
    }
else{ 
    $msg="Failed to delete record"; 
} 
  }
?> 
<!--to avoid resubmission of form-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!--custom css-->
<link rel="stylesheet" type="text/css" href="assets/css/admin_notice_event.css">

<div class="container-fluid">
    <div class="row">
        <!--form start-->
<div class="col-12 col-lg-3 order-lg-2">
<form class="form-container" method="post" action="admin_notice.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="notice regarding" required>
  </div>
  <div class="form-group">
    <label>Upload notice</label>
    <input type="file" name="image" class="form-control-file" required>
  </div>
  <div class="form-group">
    <label>Date</label>
    <input type="date" name="date" class="form-control" placeholder="dd-mm-yyyy" value=""
        min="2020-01-01" max="2030-12-31" required>
  </div>
<div class="form-group">
    <label>Description:</label>
    <textarea class="form-control" name="des" rows="5" required></textarea>
  </div>
  <div class="form-group">
    <input class="form-control" type="submit" name="submit" value="submit">
    </div>
  </form>
    </div>

    <!-------------preview------------------->
<div class="col-12 col-lg-9 order-lg-1">
<div class="preview"> 

    <?PHP
     $sql3 = "SELECT * FROM notice ORDER BY id DESC";
     $result2 = mysqli_query($db, $sql3);
     
     while($row = mysqli_fetch_array($result2)) {
       echo "<div class='container'>";
         echo "<div class='row' id='img'>";
         echo"<div class='col-12 col-md-6'>";
         echo '<form action="" method="POST" class="delete"><input type="hidden" name="id" value=' .$row['id']. '><input type="submit" name="delete" value= "Delete"></form>';
         echo "<h1>".$row['title']."</h1>";
         
         echo'<img class="myimg" src="assets/images/notice/'.$row["image"].'" onClick="modal(event)"/>';
    echo'<div id="myModal" class="modal" style="padding:0px;">';
      echo'<span class="close">&times;</span>';
      echo'<img class="modal-content" id="img01" style="height:93vh; width:100%; margin-top:7vh; border:none;" />';
      echo'</div>';
    echo"</div>";

         echo"<div class='col-12 col-md-6'>";
         echo "<h1>Description:</h1>";
         echo "<p>".$row['comment']."</p>";
         echo"</div>";
           echo"</div>";
           echo"</div>";  
           echo'<script src="assets/js/fullscreen.js"></script>';
     }
     

    ?>
    
</div>
</div>
    </div>
    <script src="assets/js/fullscreen.js">
</script>
