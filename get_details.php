<?php
include "config.php";
//attendance
$user = $_SESSION['username'];
$sql = "SELECT * FROM attendance WHERE email='$user'";
$result= mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($result);

//subjects
$user = $_SESSION['username'];
$sql = "SELECT * FROM subjects WHERE semester='$sem' AND branch='$branch'";
$result= mysqli_query($db, $sql);
$sub = mysqli_fetch_assoc($result);
$sem = $sub['semester'];
$branch = $sub['branch'];

//total attendance
$sql = "SELECT * FROM total_attendance WHERE semester='$sem' AND branch='$branch'";
$result= mysqli_query($db, $sql);
$tot = mysqli_fetch_assoc($result);
$sem=$tot['semester'];
$branch=$tot['branch'];

//ct details
$sql2 = "SELECT * FROM class_test WHERE semester='$sem' AND branch='$branch'";
$result2= mysqli_query($db, $sql2);
$ct = mysqli_fetch_assoc($result2);
$sem=$ct['semester'];
$branch=$ct['branch'];

//ct marks
$sql3 = "SELECT * FROM ct1_marks WHERE  email='$user'";
$result3= mysqli_query($db, $sql3);
$sub1 = mysqli_fetch_assoc($result3);


$sql4 = "SELECT * FROM ct2_marks WHERE  email='$user'";
$result4= mysqli_query($db, $sql4);
$sub2 = mysqli_fetch_assoc($result4);

//events
$sql5 = "SELECT * FROM event";
$result5= mysqli_query($db, $sql5);
$event = mysqli_fetch_assoc($result5);
?>

