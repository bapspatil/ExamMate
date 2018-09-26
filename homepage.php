<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
  </script>
</head>
<body>

<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDBNNk-WmrLZ_Bzk3T-hh6rRzPhI9Gx8yM",
    authDomain: "exam-partner-f1ae4.firebaseapp.com",
    databaseURL: "https://exam-partner-f1ae4.firebaseio.com",
    projectId: "exam-partner-f1ae4",
    storageBucket: "exam-partner-f1ae4.appspot.com",
    messagingSenderId: "1074270033002"
  };
  firebase.initializeApp(config);
</script>

<!--<div href = "logout.php" style="float:right">
<form align="right" name="Logout" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="logout" type="submit" id="submit2" value="Logout">
  </label>
</form>
</div>-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Exam Partner</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./homepage.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" style="background-image: walle.jpg;">
  <h1>Welcome to Exam Partner</h1>
 <!--<p>Resize this responsive page to see the effect!</p> -->
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3 >Computer Science</h3>
      <p>It provides you Question Papers of University exam..</p>
      <p>Also you will get Coding examples of various Languages..</p>
      <a style="text-decoration: none;" href="assets/branch/cse.php"> Click here..</a>
    </div>
    <div class="col-sm-4">
      <h3>Information & Technology</h3>
      <p>It provides you Question Papers of University exam..</p>
      <p>Also you will get Coding examples of various Languages..</p>
      <a style="text-decoration: none;" href="assets/branch/it.php"> Click here..</a>
    </div>
    <div class="col-sm-4">
      <h3>Mechanical</h3>        
      <p>We provide you helpful study material..</p></br>
      <p>Learn more about the design, construction, and use of machines.</p>
      <a style="text-decoration: none;" href="assets/branch/me.php"> Click here..</a>
    </div>
    <div class="col-sm-4">
      <h3>Civil Engineering</h3>        
      <p>The best platform where you can find out more about this field</p>
      <p>We provide you material of autocad etc.</p>
      <a style="text-decoration: none;" href="assets/branch/ce.php"> Click here..</a>
    </div>
    <div class="col-sm-4">
      <h3>Electrical & Electronics</h3>        
      <p>We provide you Advance Electrical Design and Simulation Tools.</p>
      <p>Details about High End Experimental Platforms and Equipment.</p>
      <a style="text-decoration: none;" href="assets/branch/ee.php"> Click here..</a>
    </div>
    <div class="col-sm-4">
      <h3>Electronics & Communication</h3>        
      <p>The powerful CAD tools for VLSI, RF Design, Electromagnetic simulation and Circuit simulation provide high tech platforms for experimentation with extreme flexibility.</p>
      <p></p>
      <a style="text-decoration: none;" href="assets/branch/ec.php"> Click here..</a>
    </div>
    <!--<div class="col-sm-4">
      <h3>EEE</h3>        
      <p>Learn more about Network Theory, Power System and Digital Electronics.</p>
      <p>We provide you EEE projects ideas and well prepared projects.</p>
      <a style="text-decoration: none;" href="assets/branch/eee.php"> Click here..</a>
    </div>-->
  </div>
</div>

</body>
</html>
