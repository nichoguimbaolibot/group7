<?php
require 'db.php';
session_start();

if ($_SESSION['logged'] == 1){
   $inn = "logout.php";
 }
 else {
   $inn = "index.php";
 }

?>

<!DOCTYPE html>
<html>
<head>
<title>EventMix</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="servicesstyle.css">
</head>
<body>
	<?php
		$id = $_GET['id'];
		if($id == "Light and Sound System"){
			$id = "lss";
		}
		if($id == "Pastries"){
			$id = "past";
		}
		if($id == "Hair and Make up artists"){
			$id = "hma";
		}
          $result = $mysqli->query("SELECT * FROM pic where categ = '$id' ");
            // output data of each row
            $row = $result->fetch_assoc();
            
    ?>

	<nav>
	<ul>
		<li><a href="Home.php">EventMix</a></li>
		
	</ul>
	<form action="Home.php" method="post">
		<input type="text" name="find" placeholder="Search...">
		<button type = "submit" class= "button_1"> Search</button>
		&nbsp&nbsp&nbsp&nbsp
		<a href="<?php echo $inn; ?>" ><i class="fa fa-power-off" style="font-size:24px"></i></a>

	</form>
</nav>	

	<div class = "topinfo">
		<div class= "profimg">
			<img class= "pimg" src="img/photo.jpg">
		</div>

		<?php
		$name = $_GET['n'];
		
          $result1 = $mysqli->query("SELECT * FROM business where bname = '$name' ");
            // output data of each row
            $row1 = $result1->fetch_assoc();
            
    ?>
		<div class = "business">
			<h1 class = "busname"><?php echo $row1['bname']; ?></h1>
			<div class = "info">
				<p class= "location">Location</p>
					<div>
						<p class="location1"><?php echo $row1['loc']; ?></p>
					</div>
				<p class= "contact">Contact Info</p>
					<div>
						<p class="contact1"><?php echo $row1['contact']; ?></p>
						<a class="btn btn-default" href="books.php?id=<?php echo $row1['bname']; ?>">PLAN EVENT</a>
					</div>
			</div>

		</div>

		<div class="reviews">
			<h1 class = "reviewsh1">Reviews</h1>
		</div>
	</div>

	<div class = "aboutcont">
				<p class= "about">About</p>
					<div>
						<p class="about1">about le business ganern ganer pak pak asdasdad</p>
					</div>	
	</div>
	<div class="albumheader">Albums</div>
	<table = class = "album">
			<tr>
			<td><img id = "albphoto" src = "img/<?php echo $row['img1'];?>.jpg"></td>
			<td><img id = "albphoto" src = "img/<?php echo $row['img2'];?>.jpg"></td>
			<td><img id = "albphoto" src = "img/<?php echo $row['img3'];?>.jpg"></td>
			<td><img id = "albphoto" src = "img/<?php echo $row['img4'];?>.jpg"></td>
		</tr>
		<tr class = "albtitle">
			<td>Album Title</td>
			<td>Album Title</td>
			<td>Album Title</td>
			<td>Album Title</td>
		</tr>

		<tr>
			<td><img id = "albphoto" src = "img/<?php echo $row['img5'];?>.jpg"></td>
			<td><img id = "albphoto" src = "img/<?php echo $row['img6'];?>.jpg"></td>
			<td><img id = "albphoto" src = "img/<?php echo $row['img7'];?>.jpg"></td>
			<td><img id = "albphoto" src = "img/<?php echo $row['img8'];?>.jpg"></td>
		</tr>
		<tr class = "albtitle">
			<td>Album Title</td>
			<td>Album Title</td>
			<td>Album Title</td>
			<td>Album Title</td>
		</tr>
	</table>
</body>
</html>