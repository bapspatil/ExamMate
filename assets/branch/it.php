<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information Science & Engineering Department</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <a class="navbar-brand" href="../../homepage.php"><b>Exam Mate</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../../homepage.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cse.php">CSE</a></li>
            <li class="active"><a href="it.php">ISE</a></li>
            <li><a href="me.php">ME</a></li>
            <li><a href="ce.php">CE</a></li>
            <li><a href="ee.php">EEE</a></li>
            <li><a href="ec.php">ECE</a></li>
          </ul>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../register.php"><span class="glyphicon glyphicon-user"></span> <b>CREATE ACCOUNT</b></a></li>
        <li><a href="../../logout.php"><span class="glyphicon glyphicon-log-in"></span> <b>LOGOUT</b></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" style="background-image: url('../../img/ise.png'); height: 100vh;">
  <div class="container" style="color: white; padding-top: 220px;">
  <h1>Information Science & Engineering Department</h1>
  </div>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4 card">
      <h3>Notes</h3>
      <h4><a href="../pdfFiles/oomd.pdf">Object Oriented Modeling & Design </a></h4>
      <h4><a href="../pdfFiles/ecs.docx">Embedded Computer Systems </a></h4>
      <h4><a href="../pdfFiles/wta.pdf">Programming The Web </a></h4>
      <h4><a href="../pdfFiles/aca.pdf">Advanced Computer Architecture </a></h4>
      <h4><a href="../pdfFiles/java.pdf">Java & J2EE </a></h4>
      <h4><a href="../pdfFiles/csharp.pdf">C# & .NET </a></h4>
    </div>
    <div class="col-sm-4 card">
      <h3>Syllabus</h3>
      <h4><a href="../pdfFiles/cse7syl.pdf">CBCS VTU Syllabus </a></h4>
    </div>
    <div class="col-sm-4 card">
      <h3>More Info</h3>
      <p>For more help on these subjects, visit <a href="https://www.openvtu.com/cse7thsem">OpenVTU</a></p>
      <p>Due to change in syllabus, we have a limited number of reliable notes for the current syllabus. Stay with us, more resources coming soon!</p>
    </div>
  </div>
</div>

</body>
</html>
