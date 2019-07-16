<?php
if(isset($_POST['submit'])){
	if(isset($_POST['name']) && $_POST['name'] !=''){
	$name=$_POST['name'];
}
else{
	$error[]='name Required';

}

if(isset($_POST['last_name']) && $_POST['last_name'] !=''){
	$last_name=$_POST['last_name'];
}
else{
$error[]='last Name Required';
}


if(isset($_POST['email']) && $_POST['email'] !=''){

	$email=$_POST['email'];
}
else{
$error[]='email Required';
}

if(isset($_POST['phone']) && $_POST['phone'] !=''){

	$email=$_POST['phone'];
}
else{
$error[]='Phone Number Required';
}



if(isset($error) && count($error) >0 )
		
	{
		 foreach($error as $value){
  echo " $value<br>";
}
		 
   }
	
else{
	echo "this is else";
	      $servername = "localhost";
          $username = "root";
          $password = "";
          $db="test";

// Create connection
       $conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
}
     
      
     echo "Connected successfully";
         
      $sql = "INSERT INTO users (Name,LName, Email, PhoneNo) VALUES ('$_POST[name]', '$_POST[last_name]',  '$_POST[email]','$_POST[phone]')";
      
    //  $sql1="SELECT FROM users";
          $conn->query($sql);

        
}
}
?>




<form  method="post">
<h1> User Data Entry </h1>
Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])){$name=$_POST['name']; echo "$name";}   ?>" ><br>

Last_Name: <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){ $last_Name=$_POST['last_name']; echo "$last_Name"; }  ?>"><br>


E-mail: <input type="text" name="email" value="<?php if(isset($_POST['email'])){$email=$_POST['email']; echo "$email";}?>"><br>


Phone: <input type="text" name="phone" value="<?php if(isset($_POST['phone'])){$phone=$_POST['phone']; echo "$phone";}?>"><br>

<input type="submit" name="submit" value="submit">
</form>

<h1>Users Data</h1>
<table cellpadding="5" border="1">
	
	<tr>
<th>I</th>		<th>Name</th>   <th>Last Name</th>   <th>Email</th>   <th>Phone</th> <th>Update</th> <th>Delete</th>
	</tr>

	<?php 

  $servername = "localhost";
          $username = "root";
          $password = "";
          $db="test";

  $conn = mysqli_connect($servername, $username, $password, $db);
     $show="SELECT * FROM users";
      $show2=mysqli_query($conn,$show);
      while ($row=mysqli_fetch_array($show2)) {
      	# code...
      
      ?>
      <tr>
      <td><?php echo $row['id']; ?></td>

       <td><?php echo $row['Name']; ?></td> 
          <td><?php echo $row['LName']; ?></td> 
              <td><?php echo $row['Email']; ?></td>  
                 <td><?php echo $row['PhoneNo']; ?></td>
                  <td><a href="update.php?id=<? php echo $row['id'];?>">Update</a></td> 
                  <td align="center"><a href ='delet.php?del=<?php echo $id;?>'>Delete</td>

      </tr>
      <?php 



    }
     ?>
	 
</table>

</body>
</html>