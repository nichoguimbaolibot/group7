<?php
require 'db.php';
session_start();

if ($_SESSION['logged'] == 1){
   $inn = "logout.php";
 }
 else {
   $inn = "index.php";
 }

 if(!$_SESSION['logged']){
     echo "<script type='text/javascript'>
            alert('Log in First!!!');
            window.location.href ='login.php';
            </script>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EventMix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

</head>
<body>

<?php
  $id = $_GET['id'];
  $name = $_SESSION['name'];
  if(empty($id)){
    header("Location: Home.php");
  }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Home.php">Home</a></li>
        <li><a href="list.php">Reservation</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $inn; ?>"><span class="glyphicon glyphicon-log-in"></span></a></li>
      </ul>
    </div>
  </div>
</nav>



  <div class="container">
    <div class="row content">
    <div class="col-sm-4">
    
    </div>
   
    <div class="col-sm-4">
    <br>
<h2><?php echo $id; ?></h2>
  <form action="action.php" method="post">
    <div class="form-group">
      <label for="email">Event:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Event" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Date:</label>
      <input type="date" class="form-control" id="pwd" name="pwd">
    </div>
    <input type="hidden" name="user" value="<?php echo $name;?>">
    <input type="hidden" name="bname" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-default" name ="book">Submit</button>
  </form>
</div>

<div class="col-sm-4">
    
    </div>
  </div>
</div>
</body>
</html>

