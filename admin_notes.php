<?php
include_once "admin_header.php";
?>

<title>notes</title>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
    $filename = $_FILES["notes"]["name"];
    $tempname = $_FILES["notes"]["tmp_name"];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $folder = "assets/notes/" . $filename;


    if (!$db) {
        die("connection failed");
    }
    $msg =  "connected successfully";


    // Get all the submitted data from the form
    $sql = "INSERT INTO notes (branch,notes ,semester,subject ) VALUES ('$branch','$filename','$semester','$subject')";

    // Execute query
    mysqli_query($db, $sql);

    // move the uploaded image into the folder: notes
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "notes uploaded successfully";
    } else {
        $msg = "Failed to upload notes";
    }
}

$result = mysqli_query($db, "SELECT * FROM notes");
//delete row

if (isset($_POST['delete'])) {
    $sql1 = "DELETE FROM notes WHERE id = '{$_REQUEST['id']}'";
    if (mysqli_query($db, $sql1)) {
        $msg = "record deleted successfully";
    } else {
        $msg = "Failed to delete record";
    }
}
?>
<!--to avoid resubmission of form-->
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>
<!-------ajax script----->
<script src="assets/js/ajax.js"></script>
<!--custom css-->
<link rel="stylesheet" type="text/css" href="assets/css/admin_notes_paper.css">

<div class="container-fluid">
  <div class="row">
    <!--form start-->
    <div class="col-12 col-lg-3 order-lg-2">
      <form class="form-container" method="post" action="admin_notes.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <!---------branch---------->
        <label>select branch:</label>
        <!-- branch dropdown -->
        <select name="branch" id="branchSel" class="custom-select">
<option value="" selected disabled hidden>Select branch</option>
</select>
<!---------------semester----------->
        <label>select semester:</label>
        <!-- semester dropdown -->
        <select name="semester" id="semSel" class="custom-select">
<option value="" selected disabled hidden>Please select branch first</option>
</select>
<!---------------subjects----------->
        <label>select subject:</label>
        <!-- subject dropdown -->
        <select name="subject" id="subjectSel" class="custom-select">
<option value="" selected disabled hidden>Please select sem first</option>
</select>
        <div class="form-group">
          <label>Upload notes</label>
          <input type="file" name="notes" class="form-control-file" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="submit" name="submit" value="submit">
        </div>
      </form>
    </div>
    <!-------------form end------------------->

    <!-------------preview------------------->
    <div class="col-12 col-lg-9 order-lg-1">
      <div class="preview">

        <?php
        $sql3 = "SELECT * FROM notes ORDER BY id DESC";
        $result2 = mysqli_query($db, $sql3); 
        echo "<div class='table-responsive' style='padding: 0px !important; height:90vh !important;'>";
        echo '<table class="table table-bordered">';
        echo '<thead class="thead-dark" style="position: sticky; top: 0;">';
        echo '<tr>';
        echo '<th scope="col">subjects</th>';
        echo '<th scope="col">branch</th>';
        echo '<th scope="col">semester</th>';
        echo '<th scope="col">download</th>';
        echo '<th scope="col">action</th>';
        echo '</tr>';
        echo '</thead>';

        echo '<tbody>';
        while ($row = mysqli_fetch_array($result2)) {
            echo '<tr>';
            echo '<td>' . $row['subject'] . '</td>';
            echo '<td>' . $row['branch'] . '</td>';
            echo '<td>' . $row['semester'] . '</td>';
            echo '<td><a href="assets/notes/' . $row['notes'] . '" download>' . $row['notes'] . '</a></td>';
            echo '<td><form action="" method="POST" class="delete"><input type="hidden" name="id" value=' . $row['id'] . '><input type="submit" name="delete" value= "Delete"></form></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo "</div>";


        ?>

      </div>
    </div>
  </div>
</div>

