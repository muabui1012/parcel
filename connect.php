<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "parcel";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die();
}

?>