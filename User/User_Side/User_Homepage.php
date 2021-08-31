<?php
	session_start();
	//echo "Hello  " . $_SESSION['userid'];
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
  $id=$_SESSION['userid'];
  $sql = "SELECT * from user_register where Email='$id'";
  $result = mysqli_query($conn,$sql);
  
  if($result->num_rows > 0)// checking for email exist or not
      {
          $row = mysqli_fetch_assoc($result);
		  
	  }
?>
<html>
<head>
	<title>User_HomePage</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="User_HomePage.css">
	<link rel="stylesheet" type="text/css" href="User_HomePage2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>	
<div class="menu-bar">
<ul>
	<li><a href="./User_Homepage.php" style="font-size:15px;"><i class="fa fa-home"></i> Home</a></li>
	<li><a href="#" style="font-size:15px;"><i class="fa fa-newspaper-o"></i> Menu</a>
		<div class="sub-menu-1" style="position: absolute; z-index: 1;border-radius: 15%">
			<ul>
				<li><a href="./Menu_Monday.html">Monday</a></li>
				<li><a href="./Menu_Tuesday.html">Tuesday</a></li>
				<li><a href="./Menu_Wednesday.html">Wednesday</a></li>
				<li><a href="./Menu_Thursday.html">Thursday</a></li>
				<li><a href="./Menu_Friday.html">Frinday</a></li>
				<li><a href="./Menu_Saturday.html">Saturday</a></li>
			</ul>
		</div>
	</li>
	<li><a href="./User_Services.html" style="font-size:15px;"><i class="fa fa-shopping-bag"></i> Services</a></li>

	<li><a href="./package.html"><i class="fa fa-rupee" style="font-size:15px;"></i> Package</a></li>
	<li><a href="./User_AboutUs.html" style="font-size:15px;"><i class="fa fa-user-circle"></i> About Us</a></li>
	<li><a href="./User_ContactUs.html" style="font-size:15px;"><i class="fa fa-phone"></i> Contact Us</a></li>
	<li><a href="" style="font-size:15px;">More <i class="fa fa-angle-double-down"></i></a>
		<div class="sub-menu-1" style="position: absolute; z-index: 1;border-radius: 15%">
			<ul>
				<li><a href="./scanner.html">Scan</a></li>
				<li><a href="/mess_management/User/User_login.php">Log-Out</a></li>
				
			</ul>
		</div>
	</li>

</ul>
</div>
<br><br>
<div id="slider">
	<figure>
		<img src="./Breakfast/emong.jpg" style="width:185px; height:250px;" class="photo"> 
		<img src="./Breakfast/echanna.jpg" style="width:185px; height:250px;" class="photo">
		<img src="./Breakfast/ejamun.jpg" style="width:185px; height:250px;" class="photo"> 
		<img src="./Breakfast/evegb.jpg" style="width:185px; height:250px;" class="photo"> 
		<img src="./Breakfast/ejam.jpg" style="width:185px; height:250px;" class="photo"> 
		<img src="./Breakfast/esalad.jfif" style="width:185px; height:250px;" class="photo"> 
		<img src="./Breakfast/epaneers.jpg" style="width:185px; height:250px;" class="photo"> 
		<img src="./Breakfast/poha2.jpg" style="width:185px; height:250px;" class="photo"> 
	</figure>
</div>
<div style="background-color: black"><marquee style="color:white;" direction = "right", scrollamount="15"><i><b style="font-size:150%;text-shadow: 1px 1px blue;">WELCOME TO P & Z EATERY AND EATING HOUSE</b></i></marquee></div>
<div style="background-color: black"><marquee style="color:white;" direction = "center", scrollamount="15"><i><b style="font-size:150%;text-shadow: 1px 1px blue;"><?php echo "Hello ".$row['FName'] .'  '. $row['LName'], '<br/>'."You are a Member of:   " . $row['Package'] ."  Package"; ?></b></i></marquee></div>
<p class = "side">The <strong></strong><abbr title="P & Z  EATERY AND EATING HOUSE">PZEAE</abbr></strong> is runned by the Chef on Wheels. It is one of a kind catering service that offers high quality & cost effective service. Our prime focus is to provide healthy and delicious food for everyone, anytime, anywhere. We believe that food served with warmth and the right attitude will leave a lasting impression in the minds of people being served. Our priority is to maintain a standard operating procedure, uniformly practiced across various sites with high emphasis on following food safety protocols and compliance with all statutory norms.</p>

<p class = "side">Our expertise in world cuisine and a dynamic delivery team comprising of specialized chefs and nutritionists, has been the cornerstone of our success in delivering high quality food services over the years. We also provide end to end catering solutions from equipment selection to kitchen set up and efficient operationalization. Most importantly any kind of harmful food additives are not used in food preparation.</p>

<dl style="margin: 20px; padding: 10px">
	<dt style="font-size: 20px;"><b>NOTE :</b></dt>
	<dd style="font-size: 20px;"><strong>Membership</strong> is compulsory for getting services from our eatery and eating house. </dd>
</dl>
 
<dl style="margin: 20px; padding: 10px">
	<dt style="font-size: 20px;"><b> Registration Requirements :</b></dt>
	<dd style="font-size: 20px;"> 1) Resgistration will be strickly done by the staff members at desk.</dd>
	<dd style="font-size: 20px;"> 2) Only mess members are permitted to use mess facilities at the mess.</dd>
	<dd style="font-size: 20px;"> 3) Futher information will be given once after the registration is confirmed.</dd>
	<dd style="font-size: 20px;"> 4) The generally adhered timing of messes is as follows. However, there may be a slight variation in timings of different messes.</dd><br>
	<dd style="font-size: 20px;"> <b>Breakfast :</b><i> 08.00 am to 10.00 am</i></dd>
	<dd style="font-size: 20px;"> <b>Lunch :</b><i> 01.00 pm to 4.00 pm</i></dd>
	<dd style="font-size: 20px;"> <b>Dinner :</b><i> 08.00 pm to 11.00 pm</i></dd><br>
	<dd style="font-size: 20px;"> 5) Those who are going for vacation for more than five days are requested to fill the dates of absence in the leave register (deduction book) held in the mess, at least a day in advance. </dd>
	<dd style="font-size: 20px;"> 6) Deactivation of mess membership will be done only on the last date of every month. </dd>
</dl><br>
<dl style="margin: 20px; padding: 10px">
	<dt style="font-size: 20px;"><b> General Instructions :</b></dt>
	<dd style="font-size: 20px;"> 1) Mess is not responsible for any of your belongings.</dd>
	<dd style="font-size: 20px;"> 2) Do not keep used plates on table after having food.  They are to be left at the Plate Disposable area.</dd>
	<dd style="font-size: 20px;"> 3) Sharing of food is not allowed. Anyone doing the same will be penalized. </dd>
	<dd style="font-size: 20px;"> 4) Request all the members to follow the mess timing properly. </dd>
	<dd style="font-size: 20px;"> 5) Outside food is not allowed in our mess.</dd>
	<dd style="font-size: 20px;"> 6) Mess properties are not to be taken outside the mess premises.</dd>
	<dd style="font-size: 20px;"> 7) Leave and Cancellation will not be considered if the members do not make requisite entries in the registers held in the mess.</dd> 
	<dd style="font-size: 20px;"> 8) Using power lines & internet is restricted.</dd>
	<dd style="font-size: 20px;"> 9) Non-members are not permitted to use the membership on behalf of an active member.</dd>
</dl><br>
<div style="background: black;color: white;font-size: 20px"> Connect us at : 
	<a href="https://www.facebook.com/"><i class="fa fa-facebook-square" style="font-size: 20px;color:white"></i></a>
	<a href="https://accounts.google.com/signin/v2/challenge/pwd?sacu=1&passive=1209600&acui=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=1&navigationDirection=forward&TL=AM3QAYbCzswCWucdgLHg8sMq3c572qRAnyvxzxqZFcjen2OGGIhtn6V27THfaru4"><i class="fa fa-google" style="font-size: 20px;color:white"></i></a>
	<a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram" style="font-size: 20px;color:white"></i></a>
	<a href="https://twitter.com/login"><i class="fa fa-twitter-square" style="font-size:20px;color:white"></i></a>
</div>
<div style="background: black;color: white;padding: 20px"><h4 style="text-align: center;"><i class="fa fa-copyright"></i> Copyright 2021-2022 by PZEAE.</h4><h4 style="text-align: center;"> All Rights Reserved.</h4></div>
</body>
</html>
