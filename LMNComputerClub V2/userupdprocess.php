<?php
    $cic = $_GET['fic'];
    $cname = $_POST['fname'];		
    $dbc = mysqli_connect ("localhost", "root", "","lemoncc");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
   $sql = "update `users` set `ccic`='$cic',`ccname`='$cname' where `ccic`='$cic'";
   $result = mysqli_query($dbc, $sql);
   if($result) 
    {
       mysqli_commit($dbc);
      Print '<script>alert("Customer is successfully updated.");</script>'; 
      Print '<script>window.location.assign("listusers.php");</script>'; 
   }
  else 
  {
     mysqli_rollback($dbc);
     Print '<script>alert("Customer is failed to update.");</script>'; 
     Print '<script>window.location.assign("listusers.php");</script>'; 		
  }
?>