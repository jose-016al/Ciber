<?php
    session_start();
    
    require_once("error_config.php");

    if(isset($_SESSION['user'])) {
        header("location:menu.php");
    } else {
        header("location:index.php");
    }

    $user = $_POST['user'];
    $password = md5($_POST['password']);

    require_once("db.php");
    $bd = Conectar::conexion();

    $q = "SELECT * FROM users WHERE user ='" . $user . "' AND password ='" . $password . "'";
    $results = $bd->query($q);
    $datos = $results->fetch_assoc(); 

    if (isset($user) && isset($password)) {
        if ($user == $datos['user'] && $password == $datos['password']) {
            $_SESSION['user'] = $datos;
            header("location:menu.php");
        } else {
            header("location: index.php?error=incorrect");
        }
    }
?>