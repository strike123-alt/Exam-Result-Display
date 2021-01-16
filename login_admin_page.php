<!DOCTYPE html>
<html>
<body>
	<?php

		include 'connection.php';
		
     
		
	
		 $username=$_POST['user'];
		 $password=$_POST['pass'];
			
		$query=mysqli_query($con,"select * from admin_login where username='$username' and password='$password'") or die(mysqli_error($con));

		$row=mysqli_fetch_array($query);

		if ($row['username']===$username && $row['password']===$password)
		{
			header("location: open_admin.php");
		} 
		else
	    {
			
			header("location: admin_login.php");
		}
		


	?>
</body>
</html>