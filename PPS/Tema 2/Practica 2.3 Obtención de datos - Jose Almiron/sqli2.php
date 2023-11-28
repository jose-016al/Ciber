<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://educacionadistancia.juntadeandalucia.es/centros/granada/pluginfile.php/995308/mod_assign/introattachment/0/table.css">
</head>

<body>
<div class="form">
    <form action="sqli2.php" method="get">
        Artículo: <input type="text" name="articulo">
        <input type="submit">
</div>
<?php
if (isset($_GET["articulo"])) {
    $conexion = mysqli_connect("localhost", "root", "", "demos")
    or die ("No se puede conectar con el servidor");

        // Utilizar consultas preparadas para evitar inyecciones SQL
    $queEmp = "SELECT * FROM demos.articulos WHERE Nombre = ?";
    $stmt = mysqli_prepare($conexion, $queEmp);
    mysqli_stmt_bind_param($stmt, "s", $_GET["articulo"]);
    mysqli_stmt_execute($stmt);
    $resEmp = mysqli_stmt_get_result($stmt);

    $totEmp = mysqli_num_rows($resEmp);


    if ($totEmp > 0) {
        echo '<div  class="table">';
        echo '<table>';
        echo "<tr><th>Artículo</th><th>Precio</th></tr>";
        while ($rowEmp = mysqli_fetch_assoc($resEmp)) {
            echo "<tr><td> " . $rowEmp['Nombre'] . "</td><td> " . $rowEmp['Precio'] . "</td></tr>";
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo "Artículo no encontrado. :(";
    }


}

?>

</form>
</form>
</body>

</html>
