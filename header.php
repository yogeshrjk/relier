
<?php
require "getdata.php";
require "config.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin_header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
  </head>
  <body>
    <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-bars"></i></a>
      <div id="user">
      <img src="assets/images/profilepic/<?php echo $data['profile_pic'];?>" class="rounded mx-auto d-block" alt="profile picture">
            <h4><?php echo $data['user_name']; ?></h4>
        </div>
        <div class="panelcontent">
      <a href="dashboard.php"><i class="fa fa-bar-chart"></i>dashboard </a>
      <a href="notice.php"><i class="fa fa-pencil-square-o"></i></i> notice</a>
      <a href="event.php"><i class="fa fa-calendar"></i></i> events</a>
      <a href="notes.php"><i class="fa fa-pencil"></i> notes</a>    
      <a href="#"><i class="fa fa-book"></i> question<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paper</a>
        </div>
    </div>
    

<!-- top bar-->
<nav class="navbar sticky-top navbar-dark bg-primary">
  <button class="openbtn" onclick="openNav()"><i class="fa fa-bars"></i></button>
  <h2>Relier</h2>
  <a href="signout.php"id="signout"><i class="fa fa-sign-out"></i>Sign out</a>
</nav>

    <!-- Optional JavaScript -->
    <!--for active page-->
    <script type=text/javascript>
      for (var i = 0; i < document.links.length; i++) {
          if (document.links[i].href == document.URL) {
              document.links[i].className = 'active';
          }
      }
    </script>
      <!--custom js-->
    <script src="assets/js/header.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>