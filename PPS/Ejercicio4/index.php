<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="style.css">
    <?php 
        function palindromo ($cadena) {
            $minusculas = explode(" ", strtolower($cadena));
            $nuevo="";
            foreach($minusculas as $m) {
                trim($m);
                $nuevo .= $m; 
            }
        
            if ($nuevo == strrev($nuevo)) {
                return "<h2>$cadena: es un palindromo</h2>";
            } else {
                return "<h2>$cadena: no es un palindromo</h2>";
            }
        }
    ?>
</head>
<body>
    <div>
        <h1>Introduce una palabra (para comporbar sies palindromo o no)</h1>
        <form method="POST">
            <input type="text" name="text">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if (isset($_POST["text"])) {
                echo palindromo($_POST["text"]);
            }
        ?>
    </div>
</body>
</html>