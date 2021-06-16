<?php 
$servername ="localhost";
$username = "id17051437_debadutta";
$password = "6|C3[]||8daDZ!_=";
$dbname="id17051437_rtlearn";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?> 