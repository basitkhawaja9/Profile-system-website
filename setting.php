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
	<title>Profile Settings</title>
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
			 
		<a href="setting.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Settings</a>
			 
		<a href="change_password.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Change Password</a>

      </div>
		
		<?php

		$sql="select * from accounts where email='$email'";
		$records=mysqli_query($connection,$sql);
		$record=mysqli_fetch_array($records);
	

		?>
		<form action="update_setting.php" method="POST" enctype="multipart/form-data">
	    <table class="setting-table">  

			<tr>
				<td class="table-data">

					<img src="user_profile_pictures/<?php echo $record['picture'];?>"/>
					<br/> 
					<input type="file" name="picture"/>
					<br/>
					<label>Update Email.</label>
					<input type="text" name="email" value="<?php echo $record['email'];?>"/>	
					<br/>	
					<label>Update Name.</label>

					<input type="text" name="name" value="<?php echo $record['name'];?>"/>
					<input type="submit" value="Update Profile"/>
				</td>
				
			</tr>
				
		</table>
		</form>
	</div>

	</div>
	
            
	
</div>
                  
</body>
</html>