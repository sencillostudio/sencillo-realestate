<?php
    require_once('env.php'); // envirorment
    require_once('functions.php');

    // DB Connections
    if ($env === 'local') {
        require_once('db-local.php');
    } else {
        require_once('db-production.php');
    }
    

    // Base Url
    if ($env === 'local') {
        define('BASE_URL', '...');
    } else {
        define('BASE_URL', '...');
    }

    // note: real BASE_URL will remain hidden in this public repo. Real info will exist only in dev (local) and in server.
?>