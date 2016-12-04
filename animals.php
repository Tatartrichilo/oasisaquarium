<html lang="en">
<head>
 <nav class="navbar navbar-default" style="background:transparent; border-color: transparent;">
      <div class="container-fluid">
    	<div class="navbar-header" style="line-height: 100px; height: 100px; padding-top: 0;">
      	<a class="navbar-brand" href="index.html"><img src="oasis logo.png"/></a>
    	</div>
        <ul class="nav navbar-nav navbar-right" style="font-size: 24px; margin-top: 35px !important;">
	<li class="active"><a href="animals.php">Animals</a></li>
	<li><a href="shows.html">Shows</a></li>
	<li><a href="tours.html">Tours</a></li>
	<li><a href="vlogin.html">Visitor Login</a></li>
	<li><a href="slogin.html">Staff Login</a></li>
        </ul>
      </div>
	  </nav>
</head>
  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aqua";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM species";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $speciesname = $row['species'];
	 $tankname = $row['tank_id'];
	 $size = $row['size'];
	 $diet = $row['diet'];
	 $lifespan = $row['lifespan'];
	 echo "Species: " . $speciesname . "<br>";
	 echo "Tank: " . $tankname . "<br>";
	 echo "Size: " . $size . "<br>";
	 echo "Diet: " . $diet . "<br>";
	 echo "<br>";
     }
} else {
     echo "0 results";
}
?>

    	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
