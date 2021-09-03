<?php 
// Include the database config file 
include_once 'Config.php'; 
 
if(!empty($_POST["branch_id"])){ 
    // Fetch sem data based on the specific branch 
    $query = "SELECT * FROM semester WHERE branch_id = ".$_POST['branch_id']." ORDER BY sem_name ASC"; 
    $result = $db->query($query); 
     
    // Generate HTML of sem options list 
    if($result->num_rows > 0){ 
        echo '<option value="" selected disabled hidden>Select sem</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['sem_id'].'">'.$row['sem_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="" selected disabled hidden>sem not available</option>'; 
    } 
}elseif(!empty($_POST["sem_id"])){ 
    // Fetch sub data based on the specific sem 
    $query = "SELECT * FROM subjects WHERE sem_id = ".$_POST['sem_id']." ORDER BY sub_name ASC"; 
    $result = $db->query($query); 
     
    // Generate HTML of sub options list 
    if($result->num_rows > 0){ 
        echo '<option value="" selected disabled hidden>Select sub</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['sub_name'].'">'.$row['sub_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="" selected disabled hidden>sub not available</option>'; 
    } 
} 
?>