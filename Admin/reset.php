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

/*if(isset($_GET['token']))
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
*/

if(isset($_GET['token']))
{
  $token=$_GET['token'];
  $getemailquery="SELECT Email from register where token='$token'  ";
  $emailresult=mysqli_query($conn,$getemailquery);
  if ($emailresult->num_rows == 0)
  {
    echo "no email found";
  }
if(isset($_POST['submit']))
{
  //$token=$_GET['token'];
  //$email=$_GET['email'];
  $newpass=$_POST['Pass'];
  $newconpass=$_POST['ConPass'];

  //$select="SELECT * FROM register WHERE Token='$token' ";
  //$result=mysqli_query($conn,$select);
  //$count=mysqli_num_rows($result);
  $data=mysqli_fetch_array($emailresult);
  $password=$data['Pass'];

  //if($count>0)
  //{
    if($newpass == $newconpass)
  {
      $update="UPDATE register SET Pass='$newpass' WHERE  Token='$token'";
      $resultsucc=mysqli_query($conn,$update);
      if($resultsucc)
      {
        echo "password reset done";
      }
  }
  else
  {
      // wrong password code
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
    echo "error";
  }
 
  
}
//}


?>
