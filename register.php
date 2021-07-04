


<?php

    if 	(isset($_POST['Enter']))
	{
		//$firstname = $_POST['firstname'];

		$_SESSION["firstname"] =  $_POST['firstname'];
		$_SESSION["lastname"] = $_POST['lastname'];
		
			echo "Registration completed for => " .$_POST['firstname'].'<br />';
		

	}

	 if 	(isset($_POST['Login']))
	 {
			header('Location: login.php');
		

	 }
	

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>


	<div class="caption">Quick Registration</div>

	<div class="auth_panel">
		<form action="" method ="POST">
			<input type="email" name="email" class="textbox"  placeholder="Email"> <br>
			<input type="text" name="firstname" class="textbox" required placeholder="First name">
			<input type="text" name="lastname"  class="textbox" required placeholder="Last name"><br>
			<input type="text" name="address"  class="textbox" size="47" required placeholder="Address"><br>	
			
			<input type="submit" class="submit" name="Enter">
		</form>	

	</div>

	<div class="auth_panel">
		<form action="" method ="POST">			
			<input type="submit" class="submit" value = "Login" name="Login">
		</form>	
	</div>
	
</body>
</html>