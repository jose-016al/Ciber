<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
        <?php 
            $day = date('j');
            $monthNumber = idate('m');
            $year = date('Y');
            $months = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setptiembre", "Octubre", "Noviembre", "Diciembre");
            $monthName = $months[$monthNumber - 1];
            echo "<h1>Hoy es dia $day de $monthName de $year</h1>";
        ?>
    </div>
</body>
</html>