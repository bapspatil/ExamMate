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
		$message = 'We have succesfully created your account! You can now begin studying.';
		
	else:
		$message = 'There was an issue creating your account. Sorry. :-(';
		
	endif;
	
endif;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam Mate – Register</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<style>
	body{ 
		background-image: url("img/register_bg.png");
		background-size: cover;
		height: 100vh;
		color: white;
	}
	</style>
</head>
<body>
	<div class="header">
	<h1 style="font-weight: bold;">EXAM MATE</h1>
	</div>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
	<div style="padding: 170px 0">
	<h1>Start studying, create an account today.</h1>
	<span>Or <a style="text-decoration: none;" href="login.php">login here if you already have an account.</a></span>

	<form action="register.php" method="POST">

		<input type="text" placeholder="What's your email ID?" name="email">
		<input type="password" name="password" placeholder="And password for the same?">
		<input type="password" name="confirm password" placeholder="Type the password again.">	

		<input type="submit" value="CREATE">	
	</form>
	</div>

</body>
</html>