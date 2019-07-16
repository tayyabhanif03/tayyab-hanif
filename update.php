<?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $db="test";

  $conn = mysqli_connect($servername, $username, $password, $db);


	// if(isset($_REQUEST['uid']))
	// {
	// 	$uid = $_REQUEST['uid'];
	// 	$query = "select * from form where ID = '$uid'";
	// 	$run = mysqli_query($conn,$query);
	// 	$row = mysqli_fetch_array($run);
	// }
	
	$uid = $_GET['id'];
	if(isset($_POST['submit'])){

		$name=$_POST['fname'];
		$Lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['PhoneNo'];
		//$uid = $_REQUEST['Id'];
		//$name = $_REQUEST['Name'];
        //$email = $_REQUEST['Email'];
        //$phone = $_REQUEST['PhoneNo'];
		$uquery = "UPDATE  form SET Name = '$name' , LName = '$Lname' , Email = '$email' , PhoneNo = '$phone' where Id = '$uid'";
		
		if( mysqli_query($conn,$uquery))
		{
			echo "Your records has updated";
		}
	}
			
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" >
First Name:<input type="text" name="fname"  /><br />

Last Name: <input type="text" name="lname"  /><br />

Email: <input type="email" name="email" /><br />

Mobile No: <input type="number" name="PhoneNo"  /><br />

<input type="submit" name="submit" /><br />
</form>
</body>
</html>