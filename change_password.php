<?php
   include("includes/connection.php");
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Shippori+Antique&family=Source+Code+Pro:wght@200&display=swap');
</style>
	<title>User Profile system</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	
    <?php include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <div class="menu">
    <?php include("includes/menu.php");   ?>
       <div class="right">
    	 <?php
		$name="";
		$email="";
		if(isset($_GET['name']))
		{
			$name=$_GET['name'];
		}
		if(isset($_GET['email']))
		{
			$email=$_GET['email'];
		}
		
		?>
		<div class="profile-tags">
		<a href="profile.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Profile</a>
			 
		<a href="settings.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Settings</a>
			 
		<a href="change_password.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Change Password</a>

	</div>
		
		<hr/>
		
		<?php

		$sql="select * from accounts where email='$email'";
		$records=mysqli_query($connection,$sql);
		$record=mysqli_fetch_array($records);
		


		?>
		<form action="password_update.php" method="post">
			<?php
			if(isset($_GET['msg']) &&$_GET['msg']==1)
			{
				echo "Your Password has been successfully changed";
			}
			else{
				if(isset($_GET['msg']))echo $_GET['msg'];
			}
			?>
		<table > 

			<tr>
				<td class="password-form">
					Old Password:<input type="text" name="old_password" value="<?php echo $record['password'];?>"/>
					<br/>
					New Password:<input type="text" name="new_password"/>	
					<br/>	
					Confirm Password:<input type="text" name="confirm_password" value=""/>
					<input type="hidden" name="email" value="<?php echo $email;?>"/>
					<br/>
					<input type="submit" value="Update Password"/>
				</td>
				
			</tr>
				
		</table>
		</form>
	</div>

	</div>


	
    
	



</body>
</html>

		