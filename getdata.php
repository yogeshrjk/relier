<?php
session_start();
include "config.php";
$user = $_SESSION['username'];
if($user==true)
{

}
else
{
    header('location:signin.php');
   
}
$sql = "SELECT * FROM sign_in WHERE email='$user'";
$result= mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($result);
$sem=$data['semester'];
$branch=$data['branch'];
?>
