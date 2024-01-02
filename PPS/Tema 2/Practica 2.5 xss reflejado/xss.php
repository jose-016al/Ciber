<html>

<head></head>

<body>
    <form method="get">
        Introduce Nombre<input type="text" name="nombre">
        <input type="submit">

        <?php
        if (isset($_GET["nombre"])) {
            $nombre = htmlspecialchars($_GET["nombre"], ENT_QUOTES, 'UTF-8');
            echo "Hola " . $nombre;
        }
        ?>
    </form>

</body>

</html>