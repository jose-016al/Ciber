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
            $date = date('j \d\e F \d\e Y');
            echo "<h1>Hoy es dia $date</h1>";
        ?>
    </div>
</body>
</html>