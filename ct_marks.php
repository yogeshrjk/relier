<?php
include "admin_header.php";
?>
<link rel="stylesheet" href="assets/css/ctmarks.css">
<div class="container-fluid">
<div class="row">
    <!--------------upload ct result------------->
    <div class="col-12 col-md-3" style="border-right: 2px solid gray;">

    <form class="form-container" style="border-bottom: 2px solid gray;">
  <div class="form-group">
    <label for="exampleFormControlFile1">upload CT result:</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <input class="form-control" type="submit" name="submit" value="submit">
    </div>
</form>

    
<!--------------filter------------->

<form action="" class="form-container" >
<div class="form-group">
<label>branch:</label>
<?php 
     
     // Fetch all the branch data 
     $query = "SELECT * FROM branch ORDER BY branch_name ASC"; 
     $result = $db->query($query); 
 ?>
 
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
      <option value="" selected disabled hidden>Select branch</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['branch_id'].'">'.$row['branch_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">branch not available</option>'; 
    } 
    ?>
      </select>
</div>
      <div class="form-group">
<label>semester:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option  selected disabled hidden>select semester</option>
        <option value="1" >1st</option>
        <option value="2" >2nd</option>
        <option value="3" >3rd</option>
        <option value="4" >4th</option>
        <option value="5" >5th</option>
        <option value="6" >6th</option>
        <option value="7" >7th</option>
        <option value="8" >8th</option>
      </select>
</div>
<div class="form-group">
    <input class="form-control" type="submit" name="submit" value="submit"  >
    </div>
      </form>
</div>
<!--------------------------------table---------------------------->
<div class="col-12 col-md-9 table-responsive" >
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">CT 1</th>
      <th scope="col">CT 2</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>edit</td>
      <td>dlt</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>