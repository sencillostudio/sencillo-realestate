<?php
$servername = "localhost";
$database = "";
$username = "";
$password = "";
 
// Create connection
 
$dbConnection = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$dbConnection) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
?>