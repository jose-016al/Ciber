<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">
    <?php
        function calculateTimeLived ($birthday) {
            $datetime1 = new DateTime($birthday);
            $datetime2 = new DateTime('now');
            $interval = $datetime1->diff($datetime2);
            return $interval->format('Llevas vivo: %a días, %m meses y %y años');
        }
        function calculateTimeBirthday ($birthday) {
            $birth = date_parse($birthday);
            $year = idate('Y');
            $month = $birth['month'];
            $day = $birth['day'];
            $datetime1 = new DateTime("$year-$month-$day");
            $datetime2 = new DateTime('now');
            $interval = $datetime1->diff($datetime2);
            return $interval->format('Quedan %a días y %m meses para tu cumpleaños');
        }
    ?>
</head>
<body>
    <div>
        <h1>Introduce tu fecha de nacimiento</h1>
        <form method="POST">
            <input type="date" name="birthday" />
            <input type="submit" value="Enviar">
        </form>
        <?php
            if (isset($_POST["birthday"])) {
                $birthday = $_POST["birthday"];
                echo "<h2>".calculateTimeLived($birthday)."</h2>";
                echo "<h2>".calculateTimeBirthday($birthday)."</h2>";
            }
        ?>
    </div>
</body>
</html>