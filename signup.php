<?php 

/* Main page with two forms: sign up and log in */
require 'db.php';
/*session_set_cookie_params(3600,"/");*/
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>EventMix</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

}
body{
	background: url('img/flower.jpg') no-repeat;
	background-position: top;
	background-size: cover;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #659b3e;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #e2856f;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
</head>


<body>
<form action="action.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

	<label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
    
    <label for="bday"><b>Birthday</b></label>
    <input type="text" placeholder="Enter Birthday" name="bday" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="bname"><b>Name of Business</b> <i>(Optional)</i></label>
    <input type="text" placeholder="Enter Name of Business" name="bname">
    
    <label for="bcateg"><b>Business Category</b> <i>(Optional)</i></label>
	
    <p><select name="busCat">
  <option value="">None</option>
  <option value="Catering and Food Services">Catering and Food Services</option>
  <option value="Entertainment">Entertainers</option>
  <option value="Events Organizer">Events Organizer</option>
  <option value="Hair and Makeup Artists">Hair and Makeup Artists</option>
  <option value="Lights and Sounds">Lights and Sounds</option>
  <option value="Pastry Shops">Pastry Shops</option>
</select>
 </p>

<p>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <label for="psw-repeat"><b>Re-type Password</b></label>
    <input type="password" placeholder="Re-type Password" name="cpass" required>
    
    <p>By creating an account you agree to our <u><i>Terms & Privacy</u></i>.</p>

    <div class="clearfix">
      <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn" name="signup">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
