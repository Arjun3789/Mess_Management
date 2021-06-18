<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'mess_management');
    if ($conn) {
    	// echo "Connected";
    	# code...
    }
    else{
    	echo "Not Connected";
    }

    if(isset($_POST['submit'])){

        $Fname=$_POST['FName'];
        $Lname=$_POST['LName'];
        $Pass=$_POST['Pass'];
        $Confirm=$_POST['ConPass'];
        $email=$_POST['Email'];
        $phone=$_POST['Phone'];

        $q = "INSERT INTO `register` VALUES(`Id`,'$Fname','$Lname','$Pass','$Confirm','$email','$phone')";
        $query = mysqli_query($conn,$q);
        if(mysqli_query($conn, $query))
        {

        }
        ?>
        <script>
            alert("Record Inserted Successfully");
            window.location.replace('login.html');
        </script>
        <?php
    }
?>