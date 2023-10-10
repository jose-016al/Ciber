<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
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
        <h1>Tabla de multiplicar</h1>
        <form method="POST">
            <label>Introduce el numero</label><br />
            <select name="number">
                <?php
                    for ($i = 1; $i <= 10; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Enviar" />
        </form>
        <?php 
            $number = isset($_POST["number"]) ? $_POST["number"] : "";
            
            if ($number) {
                for ($i = 1; $i <= 10; $i++) { 
                    echo "<h3>$number x $i = ".$number*$i."</h3>\n";
                }
            }
        ?>
    </div>
</body>
</html>