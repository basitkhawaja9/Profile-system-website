
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<title>Login into your account.</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	
    <?php include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <div class="menu">
    <?php include("includes/menu.php");   ?>
       <div class="right">
    	 <h1 class="heading">Login into Your Account</h1>
    	 <hr>
    	 <div class="msg">
                <?php
        if(isset($_GET['login']))
        {
          echo "<font color='red'>Unable to login.Your email or password is incorect.</font>";
        }
        if(isset($_GET['logout']))
        {
          echo "<font color='red'>You have been logged out. Thank you for using our website.</font>";
        }
        if(isset($_GET['block']))
        {
          echo "<font color='red'>You have been blocked by Admin.</font>";
        }
        ?>

    	 
    	 </div>
    	   <div class="register-and-login-form">
    	      <form action="login_user.php" method="POST">
    	 	          <label>Email:</label>
    	 	           <input type="email" name="email" value="">
    	 	          <label>Password:</label>
    	 	           <input type="password" name="pass" value=""> 
    	 	           <input type="submit" name="submit" id="register-and-login-btn" value="Login">


    	      </form>
    	 

    	   </div>
       </div>

    </div>
    <?php include("includes/footer.php"); ?>


	
    
	



</body>
</html>
