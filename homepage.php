<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam Mate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
  </script>
  <style>
  
    .navbar-no-margin {
      margin-bottom: 0px;
      border-radius: 0px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    margin: 32px;
    padding: 24px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    @keyframes ticker {
    0% { transform: translate3d(0, 0, 0); }
    100% { transform: translate3d(-100%, 0, 0); }
  }
  .tcontainer{
    width: 100%;
    overflow: hidden;
  }
  .ticker-wrap {
    width: 100%;
    padding-left: 100%;
    background-color: #eee;
  }
  .ticker-move {
    display: inline-block;
    white-space: nowrap;
    padding-right: 100%;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    animation-name: ticker;
    animation-duration: 5s;
  }
  .ticker-move:hover{
    animation-play-state: paused;
  }
  .ticker-item{
    display: inline-block;
    padding: 0 2rem;
  }
    .modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 80%; 
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
  </style>

</head>
<body>
<nav class="navbar navbar-inverse navbar-no-margin">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="./homepage.php"><b>Exam Mate</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./homepage.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="assets/branch/cse.php">CSE</a></li>
            <li><a href="assets/branch/it.php">ISE</a></li>
            <li><a href="assets/branch/me.php">ME</a></li>
            <li><a href="assets/branch/ce.php">CE</a></li>
            <li><a href="assets/branch/ee.php">EEE</a></li>
            <li><a href="assets/branch/ec.php">ECE</a></li>
          </ul>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./register.php"><span class="glyphicon glyphicon-user"></span> <b>CREATE ACCOUNT</b></a></li>
        <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> <b>LOGOUT</b></a></li>
      </ul>
    </div>
  </div>
</nav>
  <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>This is more information regarding dummy text.</p>
  </div>
</div>
  <div class="tcontainer">
    <div class="ticker-wrap">
      <div class="ticker-move">
        <div class="ticker-item"><button id="myBtn">Open Modal</button></div>
        <div class="ticker-item">Blah</div>
        <div class="ticker-item">Blah blah.</div>
        <div class="ticker-item">Text Blah</div>
      </div>
    </div>
  </div>
  <script>

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}
</script>

<div class="jumbotron text-center" style="background-image: url('./img/home_bg.png'); height: 100vh;">
<div class="container" style="color: white; padding-top: 220px;">
  <h1>Welcome to Exam Mate!</h1>
  <p>An app by Bapusaheb Patil.</p>
  <h4> Begin studing now. Scroll down to find your department.</h4>
  </div>
  <h2 style="color: white; margin-top: 200px;">↓</h2>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-3 card">
    <a style="text-decoration: none; color: black;" href="assets/branch/cse.php">
      <h3 >CSE Department</h3>
      <p>Question papers, syllabus and coding examples from the Department of Computer Science & Engineering.</p>
      <p> CLICK HERE</p>
      </a>
    </div>
    <div class="col-sm-3 card">
    <a style="text-decoration: none; color: black;" href="assets/branch/it.php">
      <h3>ISE Department</h3>
      <p>Question papers, syllabus and coding examples from the Department of Information Science & Engineering.</p>
      <p> CLICK HERE</p>
    </a>
    </div>
    <div class="col-sm-3 card">
    <a style="text-decoration: none; color: black;" href="assets/branch/me.php">
      <h3>ME Department</h3>        
      <p>Question papers, syllabus and coding examples from the Department of Mechanical Engineering.</p>
      <p> CLICK HERE</p>
    </a>
    </div>
    <div class="col-sm-3 card">
      <a style="text-decoration: none; color: black;" href="assets/branch/ce.php">
      <h3>CE Department</h3>        
      <p>Question papers, syllabus and coding examples from the Department of Civil Engineering.</p>
      <p> CLICK HERE</p>
    </div>
    <div class="col-sm-3 card">
      <a style="text-decoration: none; color: black;" href="assets/branch/ee.php">
      <h3>EEE Department</h3>        
      <p>Question papers, syllabus and coding examples from the Department of Electrical & Electronics Engineering.</p>
      <p> CLICK HERE</p>
    </div>
    <div class="col-sm-3 card">
      <a style="text-decoration: none; color: black;" href="assets/branch/ec.php">
      <h3>ECE Department</h3>        
      <p>Question papers, syllabus and coding examples from the Department of Electronics & Comm. Engineering.</p>
      <p> CLICK HERE</p>
    </a>
    </div>
  </div>
</div>

</body>
</html>
