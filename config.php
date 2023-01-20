<?php
$servername = "192.168.100.87";
$username = "root";
$password = "";
$db = "thesis";

// Create connection
$link = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
