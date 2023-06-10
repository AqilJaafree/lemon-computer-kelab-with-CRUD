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


<!-- delete users starts here  -->
<div class="container">
<div class="row justify-content-center">
<?php
  $cic = $_GET['fic'];
  $dbc = mysqli_connect ("localhost","root","","lemoncc");
  if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      } 
  $sql = "select * from users where ccic = '$cic'";
  $results = mysqli_query($dbc, $sql);
  $row = mysqli_fetch_assoc($results);   
?>
<form action="userdelprocess.php?fic=<?php echo $cic;?>" method="post">
<h1 align="center">Delete User Record</h1>
<table align="center" border="1">
 <h3>
 <tr>
  <td>User IC</td> 
  <td><input  type="text" name="fic" value='<?=$row['ccic'];?>' disabled></td>
</tr>
<tr>
  <td>User Name</td>
  <td><input  type="text" name="fname" value='<?=$row['ccname'];?>' disabled></td>
</tr>  
<td colspan="2" align="center"><input type="submit" value="Delete" onClick="return confirm('Are you sure?')"></td>
</h3>
</table>
</form>
    </div>
    </div>
<!-- delete users ends here  -->


    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </body>
</html>