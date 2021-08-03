<?php
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

if(isset($_GET['token']))
{
  $token=$_GET['token'];
  $getemailquery="SELECT Email from register where token='$token'  ";
  $emailresult=mysqli_query($conn,$getemailquery);
  if ($emailresult->num_rows > 0)
  {
    //exit("no email found");

    if(isset($_POST['submit']))  // accessing through submit btn
    {
      //$email=$_POST['Email'];   //assigning values
      $pass=$_POST['Pass'];
      $conpass=$_POST['ConPass'];
  
      $row = $emailresult->fetch_array();
      $email=$row['Email'];
      if($pass === $conpass)
      {
        //insert query... adding details to database
        $q = "UPDATE register SET pass=$pass , conpass=$conpass WHERE Token=$token";
        $query = mysqli_query($conn, $q);
        if($query)//if(mysqli_query($conn, $query)) 
        {
        
        } 
        ?>
        <script>
        alert("updated  Successfully");
        //window.location.replace('login.html');
        </script>
        <?php 
        #code...
     
      }
      else
      { // wrong password code
        ?>
        <script>
        alert("password does not matched ");
        // window.location.replace('reset.html');
        </script>
        <?php
        #code...
      }
    }
    else
    {
      echo "email not found";
    }
  }
}       

?>
<html>
	<head>
		<title>Reset_password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
		<link rel="stylesheet" type="text/css" href="reset.css">
	</head>
	<body>
        <form method="POST">
			    <div class="card">
                    <div class="front" >  
                        <h1>Reset Password</h1>
                       
                
                        <p>Password
                        <input type="password" name="Pass" id="pass1" class="input-box" placeholder="Passwoed" required></p>
                        <p>Confirm Password
                        <input type="password/text" name="ConPass" id="pass2" class="input-box" placeholder="Confirm Password" required></p>
                        
                       
                        <a href="#">
                        <button type="submit" value="submit" name="submit" class="reg-btn">update password </button></a>		
                    </div>   
               
                </div>
           
        </form>
    </body>
</html>