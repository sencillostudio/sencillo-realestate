<?php
    require_once('env.php'); // envirorment
    require_once('publicConfig.php'); // user config
    require_once('functions.php');
    require __DIR__ . '/../vendor/autoload.php';

    // DB Connections
    if ($env === 'local') {
        require_once('db-local.php');
    } else {
        require_once('db-production.php');
    }
    $db = dbConnect();
    use App\Property;
    Property::setDB($db);
    
    

    // Base Url / Directory
    if ($env === 'local') {
        define('BASE_URL', 'http://localhost/sencillo-realestate');
        define('BASE_DIR', 'D:/programfilesmz/xampp/htdocs/sencillo-realestate');
    } else {
        define('BASE_URL', 'https://mzdev.com.ar/projects/sencillo-realestate');
        define('BASE_DIR', '/home/u728248526/domains/mzdev.com.ar/public_html/projects/sencillo-realestate');
    }
    // note: real BASE_URL will remain hidden in this public repo. Real info will exist only in dev (local) and in server.


?>