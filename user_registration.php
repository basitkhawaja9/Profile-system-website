<?php 
include("includes/connection.php");
$msg="";
if(count($_POST)){
	$email=$_POST['email'];
	$name=$_POST['name'];
	$password2=$_POST['pass'];

	include("includes/user_pictures.php");
	
	if($email=="")
	{
		$msg="Email can not be empty.";
	}
	else if($name=="")
	{
		$msg="Name can not be empty.";
	}
	else if($password2=='')
	{
		$msg="Password can not be empty.";
	}
	

	if($msg=="")
	{	
		$sql="select * from accounts where email='$email'"	;

		$records=mysqli_query($connection,$sql);

		if(mysqli_num_rows($records)>0)
		{
			header("location:register.php?msg=record_exists");
		}
		else{
			$date1=date("d-m-Y");

		$sql="insert into accounts(email,name,password,picture,date_created,block_user) values('$email','$name','$password2','$newfilename','$date1','0')";
		mysqli_query($connection,$sql);
		header("Location:register.php?msg=insert");
		}
	}
	else {
		header("Location:register.php?msg=$msg");
	}
}



?>