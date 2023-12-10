<?php
error_reporting(0);
session_start();
include("dbconnection.php");
if(isset($_SESSION['complaint_id']))
{
	echo "<script>window.location='compaccount.php';</script>";
}
if(isset($_POST[submit]))
{
	$sql ="INSERT INTO complainer(name, email_id, phoneno, password, status) VALUES ('$_POST[name]','$_POST[email_id]','$_POST[phoneno]','$_POST[password]','Active')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) >= 1)
	{
		echo "<script>alert('You have registered successfully..');</script>";
		echo "<script>window.location='complainerlogin.php';</script>";
	}
	else
	{
	echo mysqli_error($con);
	}
}
?>
<html>
<head>
    <title> Crime Report Management System </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box" style="width: 500px;height: 570px;">
    <img src="avatar.png" class="avatar">
        <h1>Complainer Registration panel</h1>
            <form method="post" action="">
            <p>Name</p>
            <input type="text" name="name" id="name" placeholder="Enter Name">
            <p>Email ID</p>
            <input type="text" name="email_id" id="email_id" placeholder="Enter Email ID">
            <p>Phone No.</p>
            <input type="text" name="phoneno" id="phoneno" placeholder="Enter Phone No.">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
            <input type="submit" name="submit" value="Click to Register">   
            </form>
        
        
        </div>
    
    </body>
</html>