<?php
include_once "header.php";
//last row
$eve1 = "SELECT * FROM event ORDER BY id DESC LIMIT 1";
$res1 = mysqli_query($db, $eve1);
$last = mysqli_fetch_array($res1);
//second last row
$eve2 = "SELECT * FROM event ORDER BY id DESC LIMIT 1,1";
$res2 = mysqli_query($db, $eve2);
$second = mysqli_fetch_array($res2);
//third last row
$eve3 = "SELECT * FROM event ORDER BY id DESC LIMIT 2,2";
$res3 = mysqli_query($db, $eve3);
$third = mysqli_fetch_array($res3);

?>
<title>events</title>
<link rel="stylesheet" href="assets/css/event.css"> 
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding: 0px !important;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php echo '<img class="d-block img-fluid" src="assets/images/event/'.$last["event_banner"].'"  alt="first slide">';?>
    </div>
    <div class="carousel-item">
     <?php echo '<img class="d-block img-fluid" src="assets/images/event/'.$second["event_banner"].'"  alt="Second slide">';?>
    </div>
    <div class="carousel-item">
    <?php echo '<img class="d-block img-fluid" src="assets/images/event/'.$third["event_banner"].'"  alt="third slide">';?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
        </div>
    </div>
<!-----------------event deatails----------------->
<div class="col-12">
        <div class="preview"> 

<?php
     $sql2 = "SELECT * FROM event ORDER BY id DESC";
     $result1 = mysqli_query($db, $sql2);
     
     while ($row = mysqli_fetch_array($result1)) {
         echo "<div class='container'>";
         echo "<div class='row' id='img'>";
         echo"<div class='col-12 col-md-4'>";
         echo "<h1>".$row['title']."</h1>";
         echo'<img class="myimg img-fluid" src="assets/images/event/'.$row["event_banner"].'" onClick="modal(event)"/>';
         echo'<div id="myModal" class="modal" style="padding:0px">';
         echo'<span class="close">&times;</span>';
         echo'<img class="modal-content" id="img01" style="height:93vh; width:100%; margin-top:7vh; border:none;" />';
         echo'</div>';

         echo"</div>";
         echo"<div class='col-12 col-md-8'>";
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
<script src="assets/js/fullscreen.js"></script>