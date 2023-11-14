<?php
    session_start();
    
    require_once("error_config.php");

    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        header("location:index.php");
    } else {
        header("location:index.php");
    }

?>