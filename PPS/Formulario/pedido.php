<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link rel="stylesheet" href="style.css">
    <?php
        $numid = time();
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $model = isset($_POST['model']) ? $_POST['model'] : "";
        $extras = isset($_POST['extras']) ? $_POST['extras'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $obs = isset($_POST['obs']) ? $_POST['obs'] : "";

        $info = array($name, $model, $extras, $password, $obs);
    ?>
</head>
<body>
    <div class="order">
        <h1>Detalles del pedido</h1>
        <?php
            echo "<p>Numero de pedido: $numid</p>";
            echo "<p>Nombre del cliente: $name</p>";
            echo "<p>Modelo: $model</p>";
            if (count($extras) >= 1) {
                echo "<p>Extras: </p>";
                echo "<ul>";
                foreach ($extras as $extra) {
                    echo "<li>$extra</li>";
                }
                echo "</ul>";
            }
            echo "<p>La contraseña del candado: $password</p>";
            echo "<p>Observaciones: $obs</p>";
        ?>
    </div>
</body>
</html>