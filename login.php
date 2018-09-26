<?php

session_start();

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
		$message = 'Wrong email ID or password. Try again? :-)';
	}
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam Mate – Login</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<style>
	body{ 
		background-image: url("img/login_bg.png");
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
	<h1>Login & begin studying now.</h1> 
	<span>Or <a style="text-decoration: none;" href="register.php">register here if you're new.</a></span>
	<form action="login.php" method="POST">

		<input type="text" placeholder="What's your email ID?" name="email">
		<input type="password" name="password" placeholder="And password for the same?">	

		<input type="submit" value="LOGIN">	
	</form>
	</div>
 
</body>
</html>
