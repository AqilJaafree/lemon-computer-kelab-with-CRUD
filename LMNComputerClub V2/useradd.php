<?php
// assign data from customer form into variable
$cic=$_POST['fic'];
$cusername=$_POST['fusername'];
$cname=$_POST['fname'];
$cpassword=$_POST['fpassword'];
$caddress=$_POST['faddress'];
$cgender=$_POST['fgender'];
$cemail=$_POST['femail'];
$cclass=$_POST['fclass'];
$cage=$_POST['fage'];
$ctelephone=$_POST['ftelephone'];
$cinterest=$_POST['finterest'];


// Connection to the server and datbase
$dbc = mysqli_connect ("localhost","root","","lemoncc");
 if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
     }	

// SQL statement  to insert data from form into table users
$sql="insert into `users`(`ccname`,`ccic`,`ccusername`,`ccpassword`,`ccaddress`,`ccgender`,`ccemail`,`ccclass`,`ccage`,`cctelephone`,`ccinterest`) values ('$cname','$cic','$cusername','$cpassword','$caddress','$cgender','$cemail','$cclass','$cage','$ctelephone','$cinterest')";

$results = mysqli_query($dbc,$sql); 

if ($results)
{
	mysqli_commit($dbc);
               //display message box Record Been Added
	print '<script>alert("Record Had Been Added");</script>';
              //go to frmcustomer.php page
	print '<script>window.location.assign("register.php");</script>'; 
	
}
else
 { 	mysqli_rollback($dbc); 
               //display error message box
	print '<script>alert("Data Is Invalid , No Record Been Added");</script>'; 
              //go to frmcustomer.php page
	print '<script>window.location.assign("register.php");</script>'; 
	}
?>