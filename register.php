
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<title>Register your account.</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	
    <?php include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <div class="menu">
    <?php include("includes/menu.php");   ?>
       <div class="right">
    	 <h1 class="heading">Create Your Account</h1>
    	 <hr>
    	 <div class="msg">
    	 	<?php 
         			
			if(isset($_GET['msg'])&&$_GET['msg']=='record_exists'){
				echo "<font color='red'>Record already exists.</font>";
	
			}
			else if(isset($_GET['msg']) && $_GET['msg']=='insert')
			{
				echo "<font color='green'>Your account is succecfully created.</font>";


			}
			else if(isset($_GET['msg'])){
				echo "<font color='red'>".$_GET['msg']."</font>";
	
			}
			?>
			</div>
    	 	
    	   <div class="register-and-login-form">
    	      <form action="user_registration.php" method="POST" enctype="multipart/form-data"> 
    	      	    <label>Name:</label>
    	 	           <input type="text" name="name" value="">
    	 	          <label>Email:</label>
    	 	           <input type="email" name="email" value="">
    	 	          <label>Password:</label>
    	 	           <input type="password" name="pass" value=""> 
    	 	          <label>Select profile picture:</label>
    	 	           <input type="file" name="image" id="image-input" value="" >
    	 	           <input type="submit" name="submit" id="register-and-login-btn" value="Register">


    	      </form>
    	 

    	   </div>
       </div>

    </div>
    <?php include("includes/footer.php"); ?>


	
    
	



</body>
</html>
