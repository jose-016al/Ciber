<?php
    session_start();
    require_once("error_config.php");

    if (isset($_SESSION['user'])) {
        header("location:menu.php");
    } elseif (isset($_POST['user']) && isset($_POST['password'])) {
        $user = $_POST['user'];
        $password = md5($_POST['password']);
    
        require_once("db.php");
        $bd = Conectar::conexion();
    
            // Utilizar consultas preparadas para evitar inyección de SQL
        $q = "SELECT * FROM users WHERE user = ? AND password = ?";
        $stmt = $bd->prepare($q);
    
            // Vincular parámetros
        $stmt->bind_param("ss", $user, $password);
    
            // Ejecutar la consulta
        $stmt->execute();
    
            // Obtener resultados
        $results = $stmt->get_result();
        $datos = $results->fetch_assoc();
    
            // Cerrar la declaración
        $stmt->close();
    
        if ($datos) {
            $_SESSION['user'] = $datos;
            header("location:menu.php");
            exit();
        } else {
            header("location: index.php?error=incorrect");
            exit();
        }
    } else {
        header("location: index.php");
        exit();
    }
?>