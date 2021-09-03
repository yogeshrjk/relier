<?php
error_reporting(0);
include "admin_header.php";
include_once "ajaxData.php";
?>
<title>que. paper</title>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
    $filename = $_FILES["paper"]["name"];
    $tempname = $_FILES["paper"]["tmp_name"];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $yr = $_POST['year'];
    $session = $_POST['session'];
    $folder = "assets/paper/" . $filename;


    if (!$db) {
        die("connection failed");
    }
    $msg =  "connected successfully";


    // Get all the submitted data from the form
    $sql = "INSERT INTO que_paper (branch, paper ,semester, subject, year, session ) VALUES ('$branch','$filename','$semester','$subject','$yr','$session')";

    // Execute query
    mysqli_query($db, $sql);

    // move the uploaded image into the folder: images
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "que. paper uploaded successfully";
    } else {
        $msg = "Failed to upload que. paper";
    }
}

$result = mysqli_query($db, "SELECT * FROM que_paper");
//delete row

if (isset($_POST['delete'])) {
    $sql1 = "DELETE FROM que_paper WHERE id = '{$_REQUEST['id']}'";
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
<!--custom css-->
<link rel="stylesheet" type="text/css" href="assets/css/admin_notes_paper.css">
<!-------ajax script----->
<script src="assets/js/ajax.js"></script>

<div class="container-fluid">
  <div class="row">
    <!------------------------form start------------------------->
    <div class="col-12 col-lg-3 order-lg-2">
      <form class="form-container" method="post" action="admin_quepaper.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="form-row">
          <div class="col-12">
 
            <label>branch:</label>
            <select name="branch" id="branchSel" class="custom-select">
<option value="" selected disabled hidden>Select branch</option>
</select>
          </div>

          <div class="col-4">
            <label>semester:</label>
            <select name="semester" id="semSel" class="custom-select">
<option value="" selected disabled hidden>Please select branch first</option>
</select>
          </div>
          <div class="col-5">
            <label>session:</label>

            <select class="custom-select" name="session">
              <option value="" selected disabled hidden>session</option>
              <option value="April-May">April-May</option>
              <option value="Nov.-Dec.">Nov.-Dec.</option>
            </select>
          </div>
          <div class="col-3 form-group">
            <label>year:</label>
            <input type="text" name="year" class="form-control" placeholder="20--" maxlength="4">
          </div>
          <div class="col-12">
            <label>subject:</label>
            <select name="subject" id="subjectSel" class="custom-select">
<option value="" selected disabled hidden>Please select sem first</option>
</select>
          </div>
        </div>
        <div class="form-group">
          <label>Upload notes</label>
          <input type="file" name="paper" class="form-control-file" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="submit" name="submit" value="submit">
        </div>
      </form>
    </div>

    <!-------------preview------------------->
    <div class="col-12 col-lg-9 order-lg-1">
      <div class="preview">
        <?php
        $sql4 = "SELECT * FROM que_paper ORDER BY id DESC";
        $result3 = mysqli_query($db, $sql4);
        echo "<div class='table-responsive'>";
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">branch</th>';
        echo '<th scope="col">semester</th>';
        echo '<th scope="col">subjects</th>';
        echo '<th scope="col">session</th>';
        echo '<th scope="col">year</th>';
        echo '<th scope="col">paper</th>';
        echo '<th scope="col">action</th>';
        echo '</tr>';
        echo '</thead>';

        echo '<tbody>';
        while ($row = mysqli_fetch_array($result3)) {
            echo '<tr>';
            echo '<td>' . $row['branch'] . '</td>';
            echo '<td>' . $row['semester'] . '</td>';
            echo '<td>' . $row['subject'] . '</td>';
            echo '<td>' . $row['session'] . '</td>';
            echo '<td>' . $row['year'] . '</td>';
            echo '<td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="padding:5px 10px !important;">view</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class=modal>
      <object data="assets/paper/' . $row['paper'] . '" type="application/pdf" width="100%" height="100%" style="width:100%; height:85vh;">
</object>
    </div>
    </div>
  </div>
</div>

      </td>';
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
<script>
    function filterTable() {
  // Variables
  let dropdown, table, rows, cells, country, filter;
  dropdown = document.getElementsByClassName("countriesDropdown");
  table = document.getElementsByClassName("myTable");
  rows = table.getElementsByTagName("tr");
  filter = dropdown.value;

  // Loops through rows and hides those with countries that don't match the filter
  for (let row of rows) { // `for...of` loops through the NodeList
    cells = row.getElementsByTagName("td");
    country = cells[1] || null; // gets the 2nd `td` or nothing
    // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
    if (filter === "All" || !country || (filter === country.textContent)) {
      row.style.display = ""; // shows this row
    }
    else {
      row.style.display = "none"; // hides this row
    }
  }
}
</script>
<!---------------------script------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('#branch').on('change', function(){
        var branchID = $(this).val();
        if(branchID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'branch_id='+branchID,
                success:function(html){
                    $('#sem').html(html);
                    $('#sub').html('<option value="" selected disabled hidden>Select sem first</option>'); 
                }
            }); 
        }else{
            $('#sem').html('<option value="" selected disabled hidden>Select branch first</option>');
            $('#sub').html('<option value="" selected disabled hidden>Select sem first</option>'); 
        }
    });
    
    $('#sem').on('change', function(){
        var semID = $(this).val();
        if(semID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sem_id='+semID,
                success:function(html){
                    $('#sub').html(html);
                }
            }); 
        }else{
            $('#sub').html('<option value="" selected disabled hidden>Select sem first</option>'); 
        }
    });
});
</script>

