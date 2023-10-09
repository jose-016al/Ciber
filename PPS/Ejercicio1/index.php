<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            display: grid;
            place-items: center;
            min-height: 100vh;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <form method="POST">
            <label>Introduce tu nombre</label><br />
            <input type="text" name="name" />
            <input type="submit" value="Enviar" />
        </form>
        <?php 
            $name = isset($_POST["name"]) ? $_POST["name"] : "";
            echo $name ? "<h1>Hola $name</h1>" : "";
        ?>
    </div>
</body>
</html>