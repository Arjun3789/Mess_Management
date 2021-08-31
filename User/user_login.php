<?php
    session_start();
  //database connection
  $conn=mysqli_connect('localhost','root');
  mysqli_select_db($conn,'mess_management');
  if ($conn) 
  {
      //echo "Connected";
      # code...
  }
  else
  {
      echo "Not Connected";
      # code...
  }

  if(isset($_POST['submit']))// accessing through submit btn
  {
      //assigning values
      $Email=$_POST['Email'];
      $Pass=$_POST['Pass'];
      // query for fetching email and password
      $sql = "SELECT * from user_register where Email='$Email' and pass='$Pass' ";
      $result = mysqli_query($conn,$sql);


      if($result->num_rows > 0)// checking for email exist or not
      {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['userid']=$Email;
          //header("Location:./User_Side/User_Homepage.php");
          ?>
          <script>
           //  
              //pop up message code for login
              alert("LogIn sucessful");
            window.location.replace('./User_Side/User_Homepage.php');
          </script>
          <?php
          #code...
      }
      else
      {
          ?>
          <script>
              //pop up message code
              alert("Email or Password is not correct");
              window.location.replace('User_login.php');
          </script>
          <?php
          #code...
      }     
  }




?>
<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" type="text/css" href="login.css">
		
	</head>
	<body>
		<div class="container"> 
			<div class="card">
				
					<div class="front">
						<h1>LOGIN</h1>
						<form method="POST">
							
							<p>Email Id 
								<input type="email" name="Email" class="input-box" placeholder="Email" required></p>
							<p>Password
								<input type="password" name="Pass" id="pass1" class="input-box" placeholder="Password" required></p>

							</a>
								<a href="./forgot.html">Forgot  Password?</a>	
                            <a href="./User_Side/User_Homepage.php? Email=$row[Email]"></a>
                            
						    <button type="submit" name="submit" class="login-btn">LogIn</button>
                           <!-- <a href='./User_Side/User_Homepage.php?Email=$row[Email]'><input type='submit' name="submit" value='Edit/Update' id='editbtn'>-->
						</form>
                        
                    </div>
               
            </div>
        </div>
    </body>
</html>