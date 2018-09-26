<?php

/* session will start after this.*/
session_start();

/* it will call value from database.*/
require 'database.php';
if(!empty($_POST['email']) && !empty($_POST['password'])):

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email= :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';
	
	if(count($results) > 0 && !strcmp($_POST['password'],$results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header( 'Location: homepage.php' );
	} else{
		$message = 'Sorry, those credentials do not match';
		/* if your credentisals do not match then it will give this message.*/
	}
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>


	<div class="header">
	<h1><a href="/">Exam Partner</a></h1>
	</div>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Login</h1> 
	<span>or <a style="text-decoration: none;" href="register.php">Register here</a></span>

	<form action="login.php" method="POST">

		<input type="text" placeholder="Enter your Email" name="email">
		<input type="password" name="password" placeholder="Enter your password">	

		<input type="submit">	
	</form>
 
</body>
</html>
