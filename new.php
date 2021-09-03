<?php 
//connect to database, checking, etc 
include "config.php";
// process form when posted
if(isset($_POST['value'])) {
	if($_POST['value'] == 'branch') {
		// query to get all Fitzgerald records  
		$query = "SELECT * FROM branch WHERE name='branch'";  
	}  
	elseif($_POST['value'] == 'semester') {  
		// query to get all Herring records  
		$query = "SELECT * FROM semester WHERE name='semester'";  
	} else {  
		// query to get all records  
		$query = "SELECT * FROM subjects";  
	}  
	$sql = mysqli_query($query,$db);  
	
	while ($row = mysqli_fetch_array($query,$db)){ 
		$Id = $row["Id"]; 
		$FirstName = $row["FirstName"]; 
		$LastName = $row["LastName"]; 
		
		// Echo your rows here... 
		echo 'The user ID is:' . $row['id'];
	}
	mysql_close($con); 
}
?>
<html>
<head></head>
<body>
<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' name='form_filter' > 
<?php $sql3 = "SELECT * FROM notes ORDER BY id DESC";
        $result2 = mysqli_query($db, $sql3);
        ?>
         while ($row = mysqli_fetch_array($result2)) {
	<select name="value"> 
		<option value="all">All</option> 
		<option value="Fitzgerald">Fitzgerald</option> 
		<option value="Herring">Herring</option> 
	</select> 
	<br /> 
	<input type='submit' value = 'Filter'> 
</form>
</body>
</html>