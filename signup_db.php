<?php
include("config.php");
if(isset($_POST['submit']))
{
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	
	

$query="INSERT into login (name , email , password , phone , address ) values ('$name','$email','$password','$phone','$address')";
	$r=mysqli_query($con,$query);
    
if($query)
{
header("Location:login.php");

   
}
else
{
echo "Unable to insert records.";
}

}


?>