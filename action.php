<?php
require 'db.php';
session_start();

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$result = $mysqli->query("SELECT * FROM user WHERE username='$email'");

    	if ( $result->num_rows == 0 ){ // User doesn't exist
            echo "<script type='text/javascript'>
            alert('user not found!!!');
            window.location.href='index.php';
            </script>";
            
        }
        else { // User exists
            $user = $result->fetch_assoc();
            if ( $user['pass'] == $pass ) {
                $_SESSION['logged'] = 1;
                $_SESSION['name']=$user['email'];
            	header("location: Home.php");
            }
            else{
            	echo "<script type='text/javascript'>
            	alert('incorrect password!!!');
            	window.location.href='index.php';
            	</script>";
            	
            }
        }

}

if(isset($_POST['signup'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$bname = $_POST['bname'];
	$bday = $_POST['bday'];
	$busCat = $_POST['busCat'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];	

	if ($cpass == $pass){

	$result = $mysqli->query("SELECT * FROM user WHERE email='$email'") or die($mysqli->error());

	if ( $result->num_rows > 0 ) {
        
        echo "<script type='text/javascript'>
            alert('exsisting user!!!');
            </script>";
            header("location: signup.php");
          
    }
    else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO user (fname, lname, email, pass, username, businessCat, bday, nob) " 
    . "VALUES ('$fname','$lname','$email','$pass','$uname','$busCat', '$bday', '$bname')";
    if ( $mysqli->query($sql) ){
    		 echo "<script type='text/javascript'>
            	alert('Successfully Created');
                window.location.href='index.php';
            		</script>";
            
    	}
	}

}

	else{
			echo "<script type='text/javascript'>
            	alert('Password dont match');
            		</script>";
            header("location: signup.php");
	}

}


if(isset($_POST['book'])){

    $event = $_POST['email'];
    $date = $_POST['pwd'];
    $name = $_POST['user'];
    $bname = $_POST['bname']; 
    echo $name.$bname.$event;
    $sql = "INSERT INTO list (event, edate, bname, client) " 
    . "VALUES ('$event','$date','$bname','$name')";
    if ( $mysqli->query($sql) ){
             echo "<script type='text/javascript'>
                alert('Successfully Created');
                window.location.href='list.php';
                    </script>";
        }
  
    else{
            echo "<script type='text/javascript'>
                alert('Error While Saving');
                window.location.href='books.php';
                    </script>";
            
    }

}

