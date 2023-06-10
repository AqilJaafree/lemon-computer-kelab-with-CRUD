
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
	<form name = "users" action="useradd.php" method="post">
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
<!-- register starts  -->
    <div class="wrapper">
    	<div class="title">
    		<h3>Registration Form</h3>
    	</div>
        <div class="form">
			
        	<div class="input_field">
        		<label>Full Name</label>
        		<input type="text" class="input" id="name" name="fname">
        	</div>
        	<div class="input_field">
        		<label>IC Number</label>
        		<input type="text" class="input" id="ic" name="fic">
        	</div>
        	<div class="input_field">
        		<label>Username</label>
        		<input type="text" class="input" id="user_name" name="fusername">
        	</div>
          
        	<div class="input_field">
        		<label>Password</label>
        		<input type="password" class="input" id="password" name="fpassword">
        	</div>
        	<div class="input_field">
        		<label>Home Address</label>
        		<textarea class="textarea" id="address" name="faddress"></textarea>
        	</div>
        	<div class="input_field">
        		<label>Gender</label>
        			<div class="container">
        				<input type="radio" name="fgender" id="female">
        				<label for="female">Female</label>
        				<input type="radio" name="fgender" id="male">
        				<label for="male">Male</label>
        			</div>
        	</div>
			<div class="input_field">
        		<label>Interest</label>
        			<div class="container">
        				<input type="radio" name="finterest" id="animation">
        				<label for="animation">animation</label>
        				<input type="radio" name="finterest" id="visualart">
        				<label for="visualart">Visual Art</label>
						<input type="radio" name="finterest" id="accounting">
        				<label for="accounting">Accounting</label>
        				<input type="radio" name="finterest" id="business">
        				<label for="business">business</label>
						<input type="radio" name="finterest" id="science">
        				<label for="science">science</label>
						<input type="radio" name="finterest" id="coding">
        				<label for="coding">coding</label>

        			</div>
        	</div>
          	<div class="input_field">
        		<label>E-mail</label>
        		<input type="text" class="input" id="email" name="femail">
        	</div>
        	<div class="input_field">
        		<label>Class</label>
        		<input type="text" class="input" id="class" name="fclass">
        	</div>
        	<div class="input_field">
        		<label>Age</label>
        		<input type="text" class="input" id="age" name="fage">
        	</div>
        	<div class="input_field">
        		<label>Telephone</label>
        		<input type="text" class="input" id="telephone" name="ftelephone">
        	</div>
          	<br>
          	<div class="input_field">
          		<input type="reset" value="Reset" class="button" id="reset">
          	</div>
          	<div class="input_field">
          		<input type="submit" value="Register" class="button" id="submit">
          	</div>

        </div>
     </div>
<!-- register ends  -->
<!-- light -->
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </form>
  </body>
</html>
