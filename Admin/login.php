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
        $email=$_POST['Email'];
        $Pass=$_POST['Pass'];
        // query for fetching email and password
        $sql = "SELECT * FROM admin_register WHERE email='$email' and pass='$Pass' ";
        $result = mysqli_query($conn,$sql);


        if($result->num_rows > 0)// checking for email exist or not
        {
            $row = mysqli_fetch_assoc($result);
            ?>
            <script>
                //pop up message code for login
                alert("LogIn sucessfull");
                window.location.replace('main.html');
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
                window.location.replace('login.html');
            </script>
            <?php
            #code...
        }     
    }
?>