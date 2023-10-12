<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php 
    function palindromo ($cadena) {
        $minusculas = explode(" ", strtolower($cadena));
        $nuevo="";
        foreach($minusculas as $m) {
            trim($m);
            $nuevo .= $m; 
        }
    
        if ($nuevo == strrev($nuevo)) {
            return "Es Palindromo"; }
        else {
            return "No es";
        }
    }

    $cadena = "reconoceddd";
    echo palindromo($cadena);
    ?>
</body>
</html>