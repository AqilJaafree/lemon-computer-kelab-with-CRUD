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
<!-- search start here -->
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Search user ic</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="ccic" value="<?php if(isset($_GET['ccic'])){echo $_GET['ccic'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","lemoncc");

                                    if(isset($_GET['ccic']))
                                    {
                                        $cic = $_GET['ccic'];

                                        $query = "SELECT * FROM users WHERE ccic='$cic' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['ccname']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Username</label>
                                                    <input type="text" value="<?= $row['ccusername']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Password</label>
                                                    <input type="text" value="<?= $row['ccpassword']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Address</label>
                                                    <input type="text" value="<?= $row['ccaddress']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Gender</label>
                                                    <input type="text" value="<?= $row['ccgender']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Email</label>
                                                    <input type="text" value="<?= $row['ccemail']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">CLass</label>
                                                    <input type="text" value="<?= $row['ccclass']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Age</label>
                                                    <input type="text" value="<?= $row['ccage']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Telephone</label>
                                                    <input type="text" value="<?= $row['cctelephone']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Interest</label>
                                                    <input type="text" value="<?= $row['ccinterest']; ?>" class="form-control">
                                                </div>
                                              
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<!-- search ends here  -->

<!-- list users starts here  -->
<div class="container">
<div class="row justify-content-center">
<form>
<h3 align="center"><font color="#000000">Users' Details</font></h3>
  <table align="center" border="1">
    <tr> 
    <th><font color="#000000">User IC</font></th>
    <th><font color="#000000">username</font></th>
    <th><font color="#000000">Name</font></th>
    <th><font color="#000000">Password</font></th>
    <th><font color="#000000">Address</font></th>
    <th><font color="#000000">Gender</font></th>
    <th><font color="#000000">Email</font></th>
    <th><font color="#000000">Class</font></th>
    <th><font color="#000000">Age</font></th>
    <th><font color="#000000">Telephone</font></th>
    <th><font color="#000000">Interest</font></th>
    <th colspan="2"><font color="#000000">Action</font></th>
    </tr>
     <?php
    // Connection to the server and datbase
    $dbc = mysqli_connect ("localhost","root","","lemoncc");
    if (mysqli_connect_errno())
     {
       echo "Failed to connect to MySQL: ".mysqli_connect_error();
     }	
     $sql = "select * from users";
     $result = mysqli_query($dbc, $sql);    
     while($row = mysqli_fetch_assoc($result)){      
        Print '<tr>
                
                <td><font color="#000000">'.$row['ccic'].'</font></td>
                <td><font color="#000000">'.$row['ccusername'].'</font></td>
                <td><font color="#000000">'.$row['ccname'].'</font></td>
                <td><font color="#000000">'.$row['ccpassword'].'</font></td>
                <td><font color="#000000">'.$row['ccaddress'].'</font></td>
                <td><font color="#000000">'.$row['ccgender'].'</font></td>
                <td><font color="#000000">'.$row['ccemail'].'</font></td>

                <td><font color="#000000">'.$row['ccclass'].'</font></td>

                <td><font color="#000000">'.$row['ccage'].'</font></td>


                <td><font color="#000000">'.$row['cctelephone'].'</font></td>
                <td><font color="#000000">'.$row['ccinterest'].'</font></td>

                <td>
                <a href="fupdusers.php?fic='.$row['ccic'].' & " class="btn btn-warning" role="button">Update</a>
	 </td>
                <td>
                  <a href="fdelusers.php?fic='.$row['ccic'].'" class="btn btn-danger" role="button">Delete</a>
	</td>
       </tr>';
      }
    ?>
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