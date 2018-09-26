<?php

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):

	//Enter the new user in the db
	$sql = "INSERT INTO users (email,password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', $_POST['password']);

	if($stmt->execute()):
		$message = 'Successfully created new user';
		
	else:
		$message = 'Sorry there must have been an issue creating your account';
		
	endif;
	
endif;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class="header">
	<a href="/">Exam Partner</a>
	</div>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Register</h1>
	<span>or <a style="text-decoration: none;" href="login.php">Login here</a></span>

	<form action="register.php" method="POST">

		<input type="text" placeholder="Enter your Email" name="email">
		<input type="password" name="password" placeholder="Enter your password">
		<input type="password" name="confirm password" placeholder="confirm password">	

		<input type="submit">	
	</form>

</body>
</html>