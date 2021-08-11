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
          ?>
          <script>
              //pop up message code for login
              alert("LogIn sucessful");
              window.location.replace('./User_Side/User_Homepage.html');
          </script>
          <?php
          #code...
      }
      else
      {
          ?>
          <script>
              //pop up message code
              alert("Email or Password are not correct");
              window.location.replace('User_login.html');
          </script>
          <?php
          #code...
      }     
  }




?>