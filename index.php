<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class="header">
	<a href="/">Exam Partner</a>
	</div>

	<?php if( isset($_SESSION['user_id'])): ?>

		<br/>Welcome. You are  successfully logged in!

		<a href="logout.php">Logout? </a>

	<?php else: ?>

		<h1>Login or Register </h1>
		<a href="login.php">Login </a>or
		<a href="register.php">Register</a>

	<?php endif; ?> 	

</body>
</html>
