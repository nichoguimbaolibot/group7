<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
/*session_set_cookie_params(3600,"/");*/
session_start();

?>

<!DOCTYPE html>
<HTML>
<head>
<meta charset = "utf-8">
<meta name = "viewport" content ="width=device-width">
<meta name = "description" content ="Events Organizer">
<meta name = "keywords" content ="Catering and Food Services, Entertainers, Event Organizers, Fashion Designers, Hair and Make up Artists, Light and Sound System, Pastry Shops">
<meta name = "author" content = "CPE 5B">
<title> EventMix </title>
<link rel = "stylesheet" href = "style.css">

</head>

<body>
<header>
<div class ="container">
<div id ="branding">
<h1> EVENTS ORGANIZER
 <input type= "search" placeholder = "Search........" class="inputtype"></input>
<button type = "submit" class= "button_1"> Search</button>
</h1>
</div>

<nav>
<ul>
<li> <a href= "Home.php"> HOME</a></li>
</ul>
</nav>

</div>
</header>
<section id = "showcase">
<div class = "container">


<div class="row">
	<img src="img/login.png" align="center" height = "100" width ="100"/>
	<b> SIGN IN</b>
	<form action="action.php" method="post"> 
		<input type="text" name="email" placeholder="Username"/>
		<input type="password" name="password" placeholder="Password"/>
		<button type="submit" class="login" name="login"> LOG IN</button>
		<a href="signup.php" > Register </a>
	</form> 
</div>


<h1>Events Organizer</h1>

<p>Catering and Food Services, Entertainers, Event Organizers, Fashion Designers </p>
<p>Hair and Make up Artists, Light and Sound System, Pastry Shops</p>


</div>
</section>
<section id ="newsletter">
<div class = "container">

</div>
</section>

<section id="boxes">
<div class= "container">
<div class= "box">
<img src = "img/pinkflower.jpg" height = "100" width ="100">
<h3> Catering and Food Services</h3>
<p> madame pagkaen haha </p>
</div>

<div class= "box">
<img src = "img/Koala.jpg"height = "100" width ="100">
<h3> Entertainers </h3>
<p> masaya </p>
</div>

<div class= "box">
<img src = "img/Penguins.jpg"height = "100" width ="100">
<h3> Patry Shops </h3>
<p> madame pagkaen haha </p>
</div>

<div class= "box">
<img src = "img/Jellyfish.jpg"height = "100" width ="100">
<h3> Fashion Designers</h3>
<p> pak ganoyn </p>
</div>

<div class= "box">
<img src = "img/Hydrangeas.jpg"height = "100" width ="100">
<h3> Lights and Sound Systems</h3>
<p> hehe </p>
</div>

</div>
</section>

<footer>
<p>PRIVACY POLICY, TERMS AND CONDITIONS </p>
<p>Copyright &copy; 2018</p>
</footer>


</body>

</html>