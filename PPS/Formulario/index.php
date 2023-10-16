<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./pedido.php" method="post">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="model">Modelo</label>
            <select name="model">
                <option value="Montain Bike">Montain Bike</option>
                <option value="Plegable">Plegable</option>
                <option value="Electrica">Electrica</option>
            </select>
        </div>
        <div>
            <label for="extra">Extras</label>
            <input type="checkbox" name="extras[]" value="Luces">
            <input type="checkbox" name="extras[]" value="Bombin">
            <input type="checkbox" name="extras[]" value="Canasta">
        </div>
        <div>
            <label for="password">Contraseña del candado</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="obs">Observaciones</label>
            <textarea name="obs"></textarea>
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>