<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Introduce tu nombre</h1><br />
        <form method="POST">
            <input type="text" name="name" />
            <input type="submit" value="Enviar" />
        </form>
        <?php 
            $name = isset($_POST["name"]) ? $_POST["name"] : "";
            echo $name ? "<h2>Hola $name</h1>" : "";
        ?>
    </div>
</body>
</html>