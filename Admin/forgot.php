<?php

use PHPMailer\PHPMailer\PHPMailer;  //php mailer 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 


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


if(isset($_POST['submit']))  // accessing through submit btn
{
  $email=$_POST['Email'];   //assigning values
 
  $query="select * from register where email='$email'  ";
  $result=mysqli_query($conn,$query);
 
 
 if($row = $result->fetch_assoc())
 {
  $name=$row['FName'];
  $lname=$row['LName'];
  $token=$row['Token'];
  
  $mail = new PHPMailer(true);                   //Create an instance; passing `true` enables exceptions

  
  if ($result->num_rows > 0)
  {

  
    
    
  
    //Server settings
   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'PandZEatery@gmail.com';             //SMTP username
    $mail->Password   = 'Arjun&Ajju98@Eatery';                           //SMTP password
    $mail->SMTPSecure = 'tls';            
    $mail->Port       = 587;                                   

    //Recipients
    $mail->setFrom('PandZEatery@gmail.com');
    $mail->addAddress($email);                     //recipient through database
      

    /* //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    */


    //Content
    $url="http://localhost/Mess_Management/Admin/reset.html?token=$token";
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Password reset";
    $mail->Body    = "<h1>You requested to reset password..</h1>
    
    
    <h2>Dear  $name  $lname </h2>
    <h2>
    <pre>
    A request has been made to reset your password. If you made this request, please <a href='$url'>CLICK HERE</a> to complete your process.<br>
    If you did not request to reset your password, please ignore this message.
    
    Regards
    P & Z Eatery Support Team 
    </pre></h2>";
  
    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ?>
    <script>
      //pop up message code for login
      alert("Email sent sucessful");
      //window.location.replace('login.html');
    </script>
    <?php
    #code...
  }   
}
else
  {
    ?>
    <script>
      //pop up message code
      alert("Email  not correct");
     // window.location.replace('forgot.html');
    </script>
    <?php
    #code...
  }  

}
  
 

?>