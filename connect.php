<?php
$servername ="bybyoiggty0tldniejiq-mysql.services.clever-cloud.com";
$username = "uyse9ekqzvdlvvtk";
$password = "qj4SinChZJJexo3vpaKI";
$dbname="bybyoiggty0tldniejiq";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?>
