<?php 
error_reporting(0); 
include "admin_header.php";
?> 
<title>event</title>
<?php 
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['submit'])) { 
  
    $filename = $_FILES["event_banner"]["name"]; 
    $tempname = $_FILES["event_banner"]["tmp_name"];  
    $text = $_POST['des'];
    $title = $_POST['title'];  
    $link = $_POST['link'];  
    $folder = "assets/images/event/".$filename; 
    
          
    if(!$db){
        die("connection failed");
    }
    $msg=  "connected successfully";
    
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO event (title, event_banner, comment, registration) VALUES ('$title','$filename','$text','$link')"; 
  
        // Execute query 
        mysqli_query($db, $sql); 
        
        // move the uploaded image into the folder: event
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  
  $result = mysqli_query($db, "SELECT * FROM image"); 
  //delete row
 
  if (isset($_POST['delete'])) {
      
  $sql1 ="DELETE FROM event WHERE id = '{$_REQUEST['id']}'";
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
<form class="form-container" method="post" action="admin_event.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Event title" required>
  </div>
  <div class="form-group">
    <label>Upload Event Banner</label>
    <input type="file" name="event_banner" class="form-control-file" required>
  </div>
  <div class="form-group">
    <label>Registration Link</label>
    <input type="url" name="link" class="form-control" placeholder="link" required>
  </div>
<div class="form-group">
    <label>Description:</label>
    <textarea class="form-control" name="des" rows="5" ></textarea>
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
     $sql2 = "SELECT * FROM event ORDER BY id DESC";
     $result1 = mysqli_query($db, $sql2);
     
     while($row = mysqli_fetch_array($result1)) {
      echo "<div class='container'>";
      echo "<div class='row' id='img'>";
      echo"<div class='col-12 col-md-6'>";
      echo '<form action="" method="POST" class="delete"><input type="hidden" name="id" value=' .$row['id']. '><input type="submit" name="delete" value= "Delete"></form>';
      echo "<h1>".$row['title']."</h1>";
      echo'<img class="myimg" src="assets/images/event/'.$row["event_banner"].'" onClick="modal(event)"/>';
 echo'<div id="myModal" class="modal" style="padding:0px;">';
   echo'<span class="close">&times;</span>';
   echo'<img class="modal-content" id="img01" style="height:93vh; width:100%; margin-top:7vh; border:none;" />';
 echo'</div>';


      echo"</div>";
      echo"<div class='col-12 col-md-6'>";
      echo "<h1>Description:</h1>";
      echo "<p>".$row['comment']."</p>";
      echo"<a href=".$row['registration']." style='text-decoration:none; font-size:15px;'>Register here...</a>";
      echo"</div>";
        echo"</div>";
        echo"</div>";  
        echo'<script src="assets/js/fullscreen.js"></script>';
     }
     

    ?>
</div>
</div>
       

    </div>
</div>
<script src="assets/js/fullscreen.js"></script>

