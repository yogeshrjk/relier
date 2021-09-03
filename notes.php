<?php
include_once "header.php";
include_once "ajaxData.php";
?>
<link rel="stylesheet" type="text/css" href="assets/css/notes.css">

<div class="container-fluid">
  <div class="row">
        <!---------branch---------->
        <!-- branch dropdown -->
        <div class="col-12 col-lg-4">
        <select name="branch" id="branchSel" class="custom-select">
<option value="" selected disabled hidden>Select branch</option>
</select>
        </div>
<!---------------semester----------->
        <!-- semester dropdown -->
        <div class="col-12 col-lg-4">
        <select name="semester" id="semSel" class="custom-select">
<option value="" selected disabled hidden>Please select branch first</option>
</select></div>
<!---------------subjects----------->
        <!-- subject dropdown -->
        <div class="col-12 col-lg-4">
        <select name="subject" id="subjectSel" class="custom-select">
<option value="" selected disabled hidden>Please select sem first</option>
</select></div>
</div>
</div>

    <!-------------form end------------------->
<!-------ajax script----->
<script src="assets/js/ajax.js"></script>

        


        <?PHP
        $sql3 = "SELECT * FROM notes ORDER BY id DESC";
        $result2 = mysqli_query($db, $sql3);
        
        echo "<div class=' col-12 table-responsive'  >";
        echo '<table class="table table-bordered myTable">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        //download
        echo '<th scope="col">download</th>';
        echo '<th scope="col">action</th>';
        echo '</tr>';
        echo '</thead>';

        echo '<tbody>';
        while ($row = mysqli_fetch_array($result2)) {
          echo '<tr>';
          echo '<td><a href="assets/notes/' . $row['notes'] . '" download>' . $row['notes'] . '</a></td>';
          echo '<td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" style="padding:5px 10px !important;">
  view
</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="overflow:hidden;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content" style="margin:0px !important; height:95vh;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">pdf</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="padding:0px;">
                  <embed src="assets/notes/' . $row['notes'] . '" type="application/pdf" width="100%" height="100%" style="width:100%; height:80vh;">
                </div>
            </div>
          </div>
  
        </td>';
          echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo "</div>";


        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
<!---------------------script------------------>



