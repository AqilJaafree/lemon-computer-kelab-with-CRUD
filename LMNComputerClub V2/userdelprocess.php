<?php
	$cic = $_GET['fic'];
		
	$dbc = mysqli_connect ("localhost", "root", "", "lemoncc");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }	  
	$sql = "DELETE FROM users where ccic='$cic'";	
	$result = mysqli_query($dbc, $sql);
	if($result)   
	{
	  mysqli_commit($dbc);
	  Print '<script>alert("Customer Record Successfuly Deleted.");</script>'; 
	  Print '<script>window.location.assign("listusers.php");</script>'; 
	}
	else  
	{
	  mysqli_rollback($dbc);
	  Print '<script>alert("Customer Record is failed to be Deleted.");</script>'; 
	  Print '<script>window.location.assign("listusers.php");</script>';
	}
?>