<?php
    //database connection
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'mess_management');
    if ($conn) 
    {
    	# echo "Connected";
    	# code...
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $date=$_POST['date'];
        {
            $q = "INSERT INTO `qr_code` VALUES('','$name','$date')";
            $query = mysqli_query($conn,$q);
            if(mysqli_query($conn, $query))
            {
            }
              ?>  
                <script>
                      alert("Details Added");
                     window.location.replace('User_Homepage.php');
                </script>
            <?php
            
        }
    

    }
    }
    else
    {
        echo "Not Connected";
        # code...
    }
    
    ?>