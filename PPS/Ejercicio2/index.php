<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1>Selecciona un numero</h1>
        <form method="POST">
            <select name="number">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Enviar" />
        </form>
        <div class="tables">
            <?php
            $count = 1;
            $number = isset($_POST["number"]) ? $_POST["number"] : "";

            if ($number) {
                echo "<div><h1>Suma con while</h1>";
                while ($count <= 10) {
                    echo "<h3>$number + $count = " . $number + $count . "</h3>";
                    $count++;
                }
                echo "</div>";

                echo "<div><h1>Multiplicacion con for</h1>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<h3>$number x $i = " . $number * $i . "</h3>\n";
                }
                echo "</div>";

                echo "<div><h1>Division con switch</h1>";
                for ($i = 1; $i <= 10; $i++) {
                    switch ($i) {
                        case 1:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 2:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 3:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 4:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 5:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 6:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 7:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 8:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 9:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        case 10:
                            echo "<h3>$number / $i = " . $number / $i . "</h3>";
                            break;
                        default:
                    }
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>