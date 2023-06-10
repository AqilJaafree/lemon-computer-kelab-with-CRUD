<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lemon Computer Club</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- header starts  -->
    <main>
      
      <div class="big-wrapper light">

        <header>
          <div class="container">
            <div class="logo">
              <img src="./img/logolemon.png" alt="Logo" />
              <h3>Lemon Computer Club</h3>
            </div>

            <div class="links">
              <ul>
              <li><a href="index.html">Home</a></li>
                <li><a href="clubinfo.html">Club Info</a></li>
                <li><a href="activity.html">Activity</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="listusers.php">List users</a></li>
                <li><a href="login.html" class="btn">Login</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>
<!-- header ends -->


<!-- list users starts here  -->
<?php
 $cic = $_GET['fic'];    
 // Connection to the server and datbase
 $dbc = mysqli_connect ("localhost","root","","lemoncc");
 if (mysqli_connect_errno())
   {
     echo "Failed to connect to MySQL: ".mysqli_connect_error();
   }		
 $sql = "select * from users where ccic = '$cic'";
 $result = mysqli_query($dbc,$sql);
 // to display the details error  
 if (false === $result) 
  {
    echo mysql_error();
  }
 $row = mysqli_fetch_assoc($result)
?>
<div class="container">
<div class="row justify-content-center">
<form action="userupdprocess.php?fic=<?php echo $cic;?>" method="post">
<h3 align="center">Update Users Record</h3>
<table align="center" border="1">
<tr>
 <h3><td>IC</td> 
  <td><input type="text" name="fic" value='<?=$row['ccic'];?>' disabled></td>  
</h3>
</tr>
<tr>
  <td>Username</td>
  <td><input type="text" name="fusername" value='<?=$row['ccusername'];?>'></td>
</tr>
<tr>
  <td>name</td>
  <td><input type="text" name="fname" value='<?=$row['ccname'];?>'></td>
</tr>
<tr>
  <td>Password</td>
  <td><input type="text" name="fpassword" value='<?=$row['ccpassword'];?>'></td>
</tr>
<tr>
  <td>Address</td>
  <td><input type="text" name="faddress" value='<?=$row['ccaddress'];?>'></td>
</tr>
<tr>
  <td>Gender</td>
  <td><input type="text" name="fgender" value='<?=$row['ccgender'];?>'></td>
</tr>
<tr>
  <td>Email</td>
  <td><input type="text" name="femail" value='<?=$row['ccemail'];?>'></td>
</tr>

<tr>
  <td>Class</td>
  <td><input type="text" name="fclass" value='<?=$row['ccclass'];?>'></td>
</tr>
<tr>
  <td>Age</td>
  <td><input type="text" name="fage" value='<?=$row['ccage'];?>'></td>
</tr>
<tr>
  <td>telephone</td>
  <td><input type="text" name="ftelephone" value='<?=$row['cctelephone'];?>'></td>
</tr>
<tr>
  <td>interest</td>
  <td><input type="text" name="finterest" value='<?=$row['ccinterest'];?>'></td>
</tr>
<tr>  
  <td colspan="2"><center><input type="submit" value="Update" onClick="return confirm('Are you sure?')"></center></td>
</tr>
</table>
</form>
</div>
</div>
<!-- list users ends here  -->


    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </body>
</html>