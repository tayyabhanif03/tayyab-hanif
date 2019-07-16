<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db="test";

  $conn = mysqli_connect($servername, $username, $password, $db);

  if($conn)
  {
  	echo 'successfully';
  }
//$id=$_GET['id'];
		
		//$query = "delete from `users` where id = $id";
		//$run = mysqli_query($conn,$query);
		//header('location:Assignment.php');

	$delete_record =$_GET['del'];
  
  $query = "delete from users where id='$delete_record'";
  
  if (mysqli_query($conn,$query))
  {
	 echo "<script>window.open('view.php?deleted=Record has been deleted successfully!','_self')</script>";
  }	
	
			
	
?>



