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
    	 <h1 class="heading">Home</h1>
    	 <hr>
    	 <h4 class="home-heading">
    	 Welcome To Our Home Section
       </h4> 
    	
      
     <?php 
          if(isset($_SESSION['auth'])) { ?>
          	<div class="profile-tags">
		<a href="profile.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Profile</a>

		  <?php header("location:profile.php") ?>
			 
		<a href="settings.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Settings</a>
			 
		<a href="change_password.php?email=<?php echo $email1;?>&name=<?php echo $name;?>">Change Password</a>

	</div>


	    <?php
          } 
       ?>
   </div>
    </div>
    <?php include("includes/footer.php"); ?>


	
    
	



</body>
</html>

		