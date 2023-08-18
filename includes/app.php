<?php
    require_once('env.php'); // envirorment
    require_once('publicConfig.php'); // user config
    require_once('functions.php');

    // DB Connections
    if ($env === 'local') {
        require_once('db-local.php');
    } else {
        require_once('db-production.php');
    }
    
    require __DIR__ . '/../vendor/autoload.php';

    // Base Url
    if ($env === 'local') {
        define('BASE_URL', 'http://localhost/sencillo-realestate');
    } else {
        define('BASE_URL', 'https://mzdev.com.ar/projects/sencillo-realestate');
    }
    // note: real BASE_URL will remain hidden in this public repo. Real info will exist only in dev (local) and in server.

    use App\Property;
?>