<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form method="POST" enctype="multipart/form-data">
            <label for="file">Subir imagen</label>
            <input type="file" name="file">
            <input type="submit" value="Enviar">
        </form>

        <?php
        if (isset($_FILES['file'])) {
            if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                $nameDirectory = "./img/";
                $id = time();
                $nameFile = $id . "-" . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $nameDirectory.$nameFile);
                echo "<h1>Se ha subido el fichero correctamente</h1>";
                echo '<img src="./img/' . $nameFile . ' " width ="50%">';
            } else {
                echo "<h1>Error, No se ha podido subir el fichero</h1>";
            }
        } 
        ?>
    </div>
</body>
</html>