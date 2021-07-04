<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<?php
		if (isset($_POST['GotoRegister']))
		{
			header('Location: register.php');
		}
	?>

	<div class="Errcaption">Access Denied!</div>

	<div class="auth_panel">
		<form action="" method ="POST">
			<input type="submit" class="submit" value = "Register" name="GotoRegister">
		</form>	

	</div>
	
</body>
</html>