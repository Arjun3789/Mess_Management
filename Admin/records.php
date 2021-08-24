<html>
<head>
<title>Displaying Records</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
		<link rel="stylesheet" type="text/css" href="#">
<style>
#editbtn
{
    background-color:green;
    color:white;
    width:90px;
    font-size:14px;
    height:25px;    
}
#dltbtn
{
    background-color:red;
    color:white;
    width:80px;
    font-size:14px;
    height:25px; 
}
</style>
</head>
<body>
    <h2 align="center" style="width:40%;">Admin_Records</h2>
<h1><table   border="4" cellspacing="4" style="width:45%; float:left;">
<tr>
	<th>Id</th>
	<th>First_Name</th>
	<th>Last_Name</th>
	<th>Email</th>
	<th>Contact</th>
    <th colspan="2" align="center">Operations</th>
</tr>
</h1>

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
	echo "no connected";
	#code....
     }
$query="SELECT * FROM admin_register";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
	echo"
   	<tr>
       <td>".$result['Id']."</td>
		<td>".$result['FName']."</td>
        <td>".$result['LName']."</td>
		<td>".$result['Email']."</td>
        <td>".$result['Phone']."</td>
        <td><a href='update_Edit.php?Id=$result[Id] & FName=$result[FName] & LName=$result[LName] & Email=$result[Email] & Phone=$result[Phone] '><input type='submit' value='Edit/Update' id='editbtn'></td>
        <td><a href='delete.php?id=$result[Id]' onclick='return checkdelete() '><input type='submit' value='Delete' id='dltbtn'></td>
	
	</tr>";
	}
}
else
{
	echo "no data found";
}
?>
</table>
<script>
    function checkdelete()
    {
        return confirm ('Are you sure you want to Delete this Record');
    }
</script>
</body>
</html>




<!--user database-->
<html>
<head>
<title>Displaying Records</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
		<link rel="stylesheet" type="text/css" href="#">
<style>
#editbtn
{
    background-color:green;
    color:white;
    width:90px;
    font-size:14px;
    height:25px;    
}
#dltbtn
{
    background-color:red;
    color:white;
    width:80px;
    font-size:14px;
    height:25px; 
}
</style>
</head>
<body>
    <h2 align="center" style="width:40%; float:right;margin:-50px;margin-right:50px">User_Records</h2>
<h1><table   border="4" cellspacing="4" style="width:45%; float:right;margin-right:30px">
<tr>
	<th>Id</th>
	<th>First_Name</th>
	<th>Last_Name</th>
	<th>Email</th>
	<th>Contact</th>
    <th colspan="2" align="center">Operations</th>
</tr>
</h1>

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
	echo "no connected";
	#code....
     }
$query="SELECT * FROM user_register";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
	echo"
   	<tr>
       <td>".$result['Id']."</td>
		<td>".$result['FName']."</td>
        <td>".$result['LName']."</td>
		<td>".$result['Email']."</td>
        <td>".$result['Phone']."</td>
        <td><a href='User_update_Edit.php?id=$result[Id] & fn=$result[FName] & ln=$result[LName] & eml=$result[Email] & ph=$result[Phone] '><input type='submit' value='Edit/Update' id='editbtn'></td>
        <td><a href='User_delete.php?id=$result[Id]' onclick='return checkdelete() '><input type='submit' value='Delete' id='dltbtn'></td>
	
	</tr>";
	}
}
else
{
	echo "no data found";
}
?>
</table>
<script>
    function checkdelete()
    {
        return confirm ('Are you sure you want to Delete this Record');
    }
</script>
</body>
</html>
