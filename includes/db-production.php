<?php
function dbConnect() : mysqli {
    $servername = " ";
    $database = " ";
    $username = " ";
    $password = " ";
    // note: real credentials will remain hidden in this public repo. Real info will exist only in dev (local) and in server.

    $db = new mysqli($servername, $username, $password, $database);
     
    if (!$db) {
        echo "db connection error";
    }
    return $db;
}
?>