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
	<title>Welcome to your profile.</title>
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
		$email1="";
		if(isset($_GET['name']))
		{
			$name=$_GET['name'];
		}
		if(isset($_GET['email']))
		{
			$email1=$_GET['email'];
		}
		
		?>
		<div class="profile-tags">
		<a href="profile.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Profile</a>
			
		<a href="setting.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Settings</a>
			 
		<a href="change_password.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Change Password</a>

      </div>

		<?php
		if(isset($_GET['msg']))
		{
			echo $_GET['msg'];
		}
		else{
		?>
		<h1 class="profile-name">Welcome <?php echo $name;?></h1>
		
		
		<?php

		$sql="select * from accounts where email='$email1'";
		$records=mysqli_query($connection,$sql);
		$record=mysqli_fetch_array($records);
		


		?>


          <div class="display-elements">

            		<div class="display-pic">
					<img src="user_profile_pictures/<?php echo $record['picture'];?>"/>
						</div>	
				
						<div class="display-email">
					<?php echo $record['email'];?>
						</div>		
				
						<div class="display-name">	
					<?php echo $record['name'];?>
						</div>
				
	  <?php
		}
		?>		
	
	  </div>

	


    
	



</body>
</html>