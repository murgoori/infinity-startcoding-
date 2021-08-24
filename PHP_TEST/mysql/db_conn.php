<?php
//PHP versions prior to 5.2.9 and 5.3.0,
$servername = "sql212.epizy.com";
$username = "epiz_27429861";
$password = "Start2020";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>