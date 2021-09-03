<?php
include "header.php";
require_once "get_details.php";
?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<div class="container-fluid">
    <div class="row">
      
<!---------------attendance table--------------->

        <div class="col-12 col-md-8">
            <h6 class="text-center">Attendance</h6>
<table class="table table-bordered table-responsive">
    <thead class="thead-dark">
<tr> 
   
    <th scope="col" colspan="6">theory</th>
    <th  scope="col" colspan="4">lab</th>
    <th scope="col" rowspan="2">BOA</th>
    <th scope="col" rowspan="2">total</th>
    <th scope="col" rowspan="2">percentage</th>
    </tr>

    
    <tr>
    <th scope="col"> coit</th>
    <th scope="col">deld</th>
    <th scope="col">m2</th>
    <th scope="col">dbms</th>
    <th scope="col">java</th>
    <th scope="col">fme</th>
    <th scope="col">fme lab</th>
    <th scope="col">minor project</th>
    <th scope="col">ai lab</th>
    <th scope="col">dbms lab</th>
    </tr>
    </thead>
    <tbody>
    <tr>
   
    <td><?php echo $tot['sub_1'];?></td>
    <td><?php echo $tot['sub_2'];?></td>
    <td><?php echo $tot['sub_3'];?></td>
    <td><?php echo $tot['sub_4'];?></td>
    <td><?php echo $tot['sub_5'];?></td>
    <td><?php echo $tot['sub_6'];?></td>
    <td><?php echo $tot['lab_1'];?></td>
    <td><?php echo $tot['lab_2'];?></td>
    <td><?php echo $tot['lab_3'];?></td>
    <td><?php echo $tot['lab_4'];?></td>
    <td><?php echo $tot['boa'];?></td>
    <td><?php echo $tot['total'];?></td>
    <td>100%</td>
    </tr>
    <tr>
    
    <td><?php echo $data['sub_1'];?></td>
    <td><?php echo $data['sub_2'];?></td>
    <td><?php echo $data['sub_3'];?></td>
    <td><?php echo $data['sub_4'];?></td>
    <td><?php echo $data['sub_5'];?></td>
    <td><?php echo $data['sub_6'];?></td>
    <td><?php echo $data['lab_1'];?></td>
    <td><?php echo $data['lab_2'];?></td>
    <td><?php echo $data['lab_3'];?></td>
    <td><?php echo $data['lab_4'];?></td>
    <td><?php echo $data['boa'];?></td>
    <td><?php echo $data['total'];?></td>
    <td><?php echo $data['percent'];?>%</td>
    </tr>
    </tbody>

</table>
        </div>
        <!-----------------chart----------------->
        <div class="col-12 col-md-4">
        <div id="piechart_3d" style="width: auto; height: 100%; overflow-y:hidden;"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['subjects', 'attend'],
          ['coit',     11],
          ['mvr',      2],
          ['java',  2],
          ['c++', 2],
          ['c',    7],
          ['deld',    7]
        ]);

        var options = {
          title: 'Attendance',
          is3D: true,
      
          backgroundColor: '#F7FBFC'
         
        };
        

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        </div>
        <!---------------------ct marks----------------------------->
        
        <div class="col-12 col-md-6">
        <h6 class="text-center">CT Marks</h6>
        <table class="table table-bordered ">
          <thead  class="thead-dark">
    <tr>
    <th scope="col">s.no.</th>
    <th scope="col">subject</th>
    <th scope="col">class test 1</th>
    <th scope="col">class test 2</th>
    </tr>
          </thead>
          <tbody>
    <tr>
    <td>1.</td>
    <td><?php echo $ct['sub_1'];?></td>
    <td><?php echo $sub1['sub_1'];?></td>
    <td><?php echo $sub2['sub_1'];?></td>
    </tr>
    <tr>
    <td>2.</td>
    <td><?php echo $ct['sub_2'];?></td>
    <td><?php echo $sub1['sub_2'];?></td>
    <td><?php echo $sub2['sub_2'];?></td>
    </tr>
    <tr>
    <td>3.</td>
    <td><?php echo $ct['sub_3'];?></td>
    <td><?php echo $sub1['sub_3'];?></td>
    <td><?php echo $sub2['sub_3'];?></td>
    </tr>
    <tr>
    <td>4.</td>
    <td><?php echo $ct['sub_4'];?></td>
    <td><?php echo $sub1['sub_4'];?></td>
    <td><?php echo $sub2['sub_4'];?></td>
    </tr>
    <tr>
    <td>5.</td>
    <td><?php echo $ct['sub_5'];?></td>
    <td><?php echo $sub1['sub_5'];?></td>
    <td><?php echo $sub2['sub_5'];?></td>
    </tr>
    <tr>
    <td>6.</td>
    <td><?php echo $ct['sub_6'];?></td>
    <td><?php echo $sub1['sub_6'];?></td>
    <td><?php echo $sub2['sub_6'];?></td>
    </tr>
          </tbody>

    </table>
        </div>
    </div>
</div>