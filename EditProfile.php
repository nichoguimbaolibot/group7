<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
/*session_set_cookie_params(3600,"/");*/
session_start();

 if ($_SESSION['logged'] == 1) {
   header("location: profile.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="editprofilestyle.css">
</head>
<body>
	<nav>
	<ul>
		<li><a href="Home.php"><strong>Home<strong></a></li>
		
	</ul>

	<form action="">
		<input class = "search" type="text" name="" placeholder="Search...">
		<button class="button_1" type="submit" name = "search">GO</button>
	</form>
</nav>
<br>
	<div class = "EDFORM">
		<form>
			<h1 style="font-family:verdana;">Edit Profile</style></h1>

			<div>
					<img class= "profimg" src="img/photo.jpg">
			</div>

			<span class = "editformtext">First Name</span>
			<span class = "editformtext2">Last Name</span>
			<br>
			<input class = "editform" type="text" name="fname">
			<input class = "editform" type="text" name="lname">
			<br>

			<span  class = "editformtext">Date of Birth</span>
			<br>
			<input class = "editform2" type="date" name="date1"/>
			<br>

			<span class = "editformtext">Current Password</span>
			<br>
			<input class = "editform" type="Password" name="pass">
			<br>

			<span class = "editformtext">New Password</span>
			<span class = "editformtext3">Re-Type New Password</span>
			<br>
			<input class = "editform" type="Password" name="newpw">
			<input class = "editform" type="Password" name="cpw">
			<br>

			<span class = "editformtext">E-mail</span>
			<br>
			<input class = "editform" type="email" name="email">
			<br>

			<span class = "editformtext">Business Name</span>
			<br>
			<input class = "editform" type="text" name="Bsname">
			<br>

			<span class = "editformtext">Business Type</span>
			<br>
			<select class = "editformoption" name = "Bstype">
				<option>Business Type</option>
				<option value="Catering and Food Services">Catering and Food Services</option>
				<option value="Entertainers">Entertainers</option>
				<option value="Event Organizers">Event Organizers</option>
				<option value="Fashion Designers">Fashion Designers</option>
				<option value="Hair and Make-up Artists">Hair and Make-up Artists</option>
				<option value="Light and Sound System">Light and Sound System</option>
				<option value="Pastry Shops">Pastry Shops</option>
			</select>

			<button type="submit" class = "savebut" name="save">SAVE</button>
			
		</form>
	</div>
</body>
</html>