<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <h1>Formulario</h1>
        <form action="./pedido.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="&nbsp;">
                <label class="floating" for="name">Nombre</label>
            </div>
            <div class="form-group">
                <label for="model">Modelo</label>
                <select name="model">
                    <option value="Montain Bike">Montain Bike</option>
                    <option value="Plegable">Plegable</option>
                    <option value="Electrica">Electrica</option>
                </select>
            </div>
            <div class="form-group extra">
                <div>
                    <label for="luces">Luces</label>
                    <input type="checkbox" id="luces" name="extras[]" value="Luces">
                </div>
                <div>
                    <label for="bombin">Bombín</label>
                    <input type="checkbox" id="bombin" name="extras[]" value="Bombin">
                </div>
                <div>
                    <label for="canasta">Canasta</label>
                    <input type="checkbox" id="canasta" name="extras[]" value="Canasta">
                </div>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="&nbsp;">
                <label class="floating" for="password">Contraseña</label>
            </div>
            <div class="form-group">
                <textarea name="obs" placeholder="&nbsp;"></textarea>
                <label class="floating" for="obs">Observaciones</label>
            </div>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>