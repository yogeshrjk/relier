<?php
ob_start();
session_start();
include "config.php";
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/css/admin_login.css">

    <title>Relier</title>
  </head>
  <body>
   <div class="container-fluid bg"> 
   <div class="row h-100 back">
   <!--------------------form------------------------>
   <div class="col-12" >
   <div class="d-flex align-items-start flex-column logo">
<h1>Relier</h1>
<small style="margin-bottom:5px; margin-right:5px; color: white; opacity:0.5;">connect to lead inspire and support</small>
  </div> 
   <form class="form-container" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="wel">
   <p class="text-center">Welcome</p>
</div>
  <div class="form-group d=flex">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
   </div>
  </div>
   </div>
   <?php
        if(isset($_POST['submit'])){
    
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM sign_in where email='{$email}' AND pass='{$pass}'";

        $result = mysqli_query($db, $sql) or die("Query Failed.");

        if(mysqli_num_rows($result) > 0){
        $_SESSION['username']=$email;
        header('location:dashboard.php');
        }
        else
        {
        header('location:signin.php');
        }
        }
        
        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

