<?php
session_start();
?>	

<div class="nav-row">
	     <a href="index.php">Home</a>
	     <a href="about.php">About</a>
	     <?php
				if(isset($_SESSION['auth']))
				{
					?>
					<a href="logout.php">Logout</a>
				<?php 
				}
				else
				{
				?>
				<a href="login.php">Login</a>
				<?php
				}
				?>


	     <a href="register.php">/ Register</a>

	</div>