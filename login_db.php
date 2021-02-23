<?php

include ('config.php');
session_start();
  

	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$result = mysqli_query($con,"SELECT * FROM `login` WHERE email='$email' && password='$password'");
	

		
      foreach($result as $q)
{
	$_SESSION["name"] = $q['name'];
	$_SESSION["email"] = $q['email'];
	$_SESSION["phone"] = $q['phone'];
	$_SESSION["address"] = $q['address'];
} 
		if($result != null)  {
				header("Location:welcome.php");

			}
	 
 ?>

 
 
 