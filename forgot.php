<?php
 //database connection
 $conn=mysqli_connect('localhost','root');
 mysqli_select_db($conn,'mess_management');
 if ($conn) 
 {
     echo "Connected";
     # code...
 }
 else
 {
     echo "Not Connected";
     # code...
 }



?>