<?php 
include('includes/connection.php');

$email=$_POST['email'];
	$name=$_POST['name'];
	$password2=$_POST['pass'];
	include("includes/user_pictures.php");

	
	if($email=="")
	{
		$msg="Email can't be empty.";
	}
	else if($name=="")
	{
		$msg="Name can't be empty.";
	}
	
	if($msg=="")
	{	
		$sql="select * from accounts where email='$email'"	;
		$records=mysqli_query($connection,$sql);
		if(mysqli_num_rows($records)>0)
		{
			header("location:register.php?msg=record_exists");
		}
	if($file_name=="")
	{
	$sql="update accounts

		SET
			email='$email',
			name='$name'
		where email='$email'";
	}
	else{
		$sql="update accounts

		SET
			email='$email',
			name='$name',
			picture='$file_name'

	 	where email='$email'";
	}
mysqli_query($connection,$sql);
header("location:profile.php?email=$email&option=updated");
}
?>