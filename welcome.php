<?php
session_start();


if 	(isset($_SESSION['firstname']))
	{

		echo "You are in";
	}
	else
	{

		header('Location: noaccess.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

	<div class="caption">Basic Authentication Task</div>

	<div class="auth_panel">
		<form action="login.php" method ="POST">
			<input type="email" name="email" required placeholder="Email"> 
			<input type="password" name="pwd" required placeholder="Password"><br>			
			<input type="submit" class="submit" name="Enter">
		</form>	

	</div>
	
</body>
</html>