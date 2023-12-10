<?php
error_reporting(0);
session_start();
include("dbconnection.php");
if(isset($_SESSION['complainer_id']))
{
	echo "<script>window.location='compaccount.php';</script>";
}
if(isset($_POST[submit]))
{
	$sql ="SELECT * FROM complainer WHERE email_id='$_POST[username]' and password='$_POST[password]' and status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_num_rows($qsql) >= 1)
	{
		$rspro = mysqli_fetch_array($qsql);
		$_SESSION['complainer_id'] = $rspro[complainer_id];
		echo "<script>window.location='compaccount.php';</script>";
	}
	else
	{
		echo "<script>alert('You have entered invalid login credentials..');</script>";
	}
}
?>
<html>
<head>
    <title> Crime Report Management System </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form method="post" action="">
            <p>Email ID</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="recoverpassword.php">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
</html>