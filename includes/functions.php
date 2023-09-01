<?php
    function checkAuth() : bool {
        session_start();
        
        $auth = false;
        if (isset($_SESSION['login'])) {
            $auth = $_SESSION['login'];
        }
        if($auth) {
            return true;
        }
        return false;
    };

    function debug($var) {
        echo "<div class='debug-modal'>";
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        echo "</div>";
    }
    function alertSuccess($var) {
        echo "<div class='alert alert-success' role='alert'>";
        echo $var;
        echo "</div>";
    }

    function alertDanger($var) {
        echo "<div class='alert alert-danger' role='alert'>";
        echo $var;
        echo "</div>";
    }
    function alertSuccessFromArray($errors) {
        echo "<div class='alert alert-success' role='alert'>";
        foreach ($errors as $message) {
            echo $message;
        }
        echo "</div>";
    }
    function alertDangerFromArray($errors) {
        echo "<div class='alert alert-danger' role='alert'>";
        foreach ($errors as $message) {
            echo $message;
        }
        echo "</div>";
    }

    function createImageFromFormat($format, $route) {
        switch ($format) {
            case 'jpg':
            case 'jpeg':
                return imagecreatefromjpeg($route);
            case 'png':
                return imagecreatefrompng($route);
            case 'gif':
                return imagecreatefromgif($route);
            default:
                return false;
        }
    }

    
?>