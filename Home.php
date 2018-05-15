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


<html>
<head>
	<title>EventMix</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>

<?php



if(isset($_POST['order'])){
$fix=$_POST['order'];
}
else{
  $fix= 'ASC';
}

if(isset($_POST['sort'])){
  $sort=$_POST['sort'];
}
else{
  $sort= 'bname';
}

$find=$_POST['find'];

?>

<nav>
	<ul>
		<li><a href="Home.php">EventMix</a></li>
		<li><a href="list.php">Reservation</a></li>		
	</ul>
	<form action="Home.php" method="post" align="right">
		<input type="text" name="find" placeholder="Search...">
		<button type = "submit" class= "button_1"> Search</button>
		&nbsp&nbsp&nbsp&nbsp
		<a href="<?php echo $inn; ?>" ><i class="fa fa-power-off" style="font-size:24px"></i></a>
	</form>
		
</nav>

<div class="container">
<br>
	<form action="Home.php" method = "post">
         <select name="sort" placeholder="Sort BY">
            <option value="bname">Business</option>
            <option value="categ">Category</option>
            <option value="loc">Location</option>
            <option value="rate">Rating</option>
      </select>
    
      <select name="order" placeholder="Order BY">
            <option value="ASC">ASCENDING</option>
            <option value="DESC">DESCEDING</option>
      </select>
     
      <button class="btn btn-default" type="submit">
            <span> SORT </span>
          </button>
    </form>

  <table class="table table-hover" style="background-color: rgba(255,255,255,0.7);">
    <thead>
    	<tr>
    		<td><strong>Name</strong></td>
    		<td><strong>Location</strong></td>
    		<td><strong>Categorty</strong></td>
    		<td><strong>rate</strong></td>
    	</tr>
    </thead>
    <tbody>
      <?php
          $result = $mysqli->query("SELECT * FROM business where bname LIKE '%$find%'
           or loc LIKE '%$find%' or categ like '%$find%' order by $sort $fix");
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              ?>
              <tr>
                  <td ><?php echo $row['bname']; ?></td>
                  <td><?php echo $row['loc']; ?></td>
                  <td><?php echo $row['categ']; ?></td>
                  <td><?php echo $row['rate']; ?></td>
                  <td><a href="Services.php?id=<?php echo $row['categ']; ?>&n=<?php echo $row['bname']; ?>" class="btn btn-default">CHECK</a></td>
              </tr>

              <?php
            }
          }
          ?>
    </tbody>
  </table>
</div>


	
</body>	
</html>