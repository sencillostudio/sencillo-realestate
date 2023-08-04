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
?>