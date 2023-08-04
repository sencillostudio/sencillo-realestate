<?php
$servername = "localhost";
$database = "";
$username = "";
$password = "";
// note: real credentials will remain hidden in this public repo. Real info will exist only in dev (local) and in server.

// Create connection
 
$dbConnection = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$dbConnection) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
?>