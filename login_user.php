
<?php 
session_start();
include ("includes/connection.php");
$msg="";

if(count($_POST)){
	$email=$_POST['email'];
	$password2=$_POST['pass'];

	
	if($email=="")
	{
		$msg="Email can not be empty.";
	}

	else if($password2=='')
	{
		$msg="Password can not be empty.";
	}
	

if($msg=="")
	{	
		$sql="select * from accounts where email='$email' and password='$password2'"	;
		$records=mysqli_query($connection,$sql);
		$record=mysqli_fetch_array($records);
		if($record['block_user']==0)
		{


		
			if(isset($record['email']))
			{
				$_SESSION['auth']=1;
				header("location:profile.php?email=$email&name=".$record['name']);
			}
			else{
				header("location:login.php?login=0");	
			}
		}
		else{
				header("location:login.php?block=1");	
		}

	}
	
}



?>