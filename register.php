<?php
    //database connection
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'mess_management');
    if ($conn) 
    {
    	// echo "Connected";
    	# code...
    }
    else
    {
    	echo "Not Connected";
        # code...
    }

    if(isset($_POST['submit'])){// accessing through submit btn
        //assigning values
        $Fname=$_POST['FName'];
        $Lname=$_POST['LName'];
        $Pass=$_POST['Pass'];
        $Confirm=$_POST['ConPass'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];

        // email verification
        $emailquery = "select * from register where Email='$Email'";
        $query = mysqli_query($conn,$emailquery);
        $emailcount =  mysqli_num_rows($query);


        if ($emailcount>0) { //condition of email verification 
            ?>
            <script>
                //pop up message code
                alert("email already exist");
                window.location.replace('register.html');
            </script>
            <?php
            # code...
        }
        else{
            if($Pass === $Confirm)// password condition
            {
                //insert query... adding details to database
                $q = "INSERT INTO `register` VALUES(`Id`,'$Fname','$Lname','$Pass','$Confirm','$Email','$Phone','','')";
                $query = mysqli_query($conn,$q);
                if(mysqli_query($conn, $query))
                {
        
                }
                ?>
                <script>
                    alert("Registered  Successfully");
                    window.location.replace('login.html');
                </script>
                <?php
                #code....
           }
            else
            { // wrong password code
                ?>
                <script>
                    alert("password does not matched ");
                    window.location.replace('register.html');
                </script>
                <?php
                #code...
            }

        }       
    }
?>