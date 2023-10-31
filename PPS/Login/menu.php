<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bievenido</title>
    <link rel="stylesheet" href="style.css">
    <?php
        session_start();
        if(!isset($_SESSION['user'])) {
            header("location:index.php");
        }
    ?>
</head>
<body>
    <header>
        <h1>Logged in</h1>
        <ul>
            <li><a href="./logout.php">Cerrar Sesion</a></li>
        </ul>
    </header>
</body>
</html>