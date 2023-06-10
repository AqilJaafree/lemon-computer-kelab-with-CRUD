<?php
session_start();
// assign data from customer form into variable

$cusername=$_POST['fusername'];

$cpassword=$_POST['fpassword'];



// Connection to the server and database
$dbc = mysqli_connect ("localhost","root","","lemoncc");
 if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
     }	

// SQL statement  to read the data from form into table users
$s = " select * from users where ccusername = '$cusername' && ccpassword = '$cpassword'";

$results= mysqli_query($dbc,$s); 

if ($results)
{
	mysqli_commit($dbc);
               //display message box Record Been Added
	print '<script>alert("Login verified");</script>';
              //go to frmcustomer.php page
	print '<script>window.location.assign("index.html");</script>'; 
	
}
else
 { 	mysqli_rollback($dbc); 
               //display error message box
	print '<script>alert("Wrong username or password");</script>'; 
              //go to frmcustomer.php page
	print '<script>window.location.assign("login.html");</script>'; 
	}
?>