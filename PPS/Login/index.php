<?php require_once("error_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Verificar si hay un parámetro de error en la URL
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get('error');

        // Mostrar una alerta si el parámetro de error es "incorrect"
        if (error === 'incorrect') {
            alert("Usuario o contraseña incorrecta");
        }
    </script>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        header("location:menu.php");
    }
    ?>
</head>

<body>
    <div class="login">
        <section>
            <form action="./procesa.php" method="POST">
                <h1>Login</h1>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="user" placeholder="&nbsp;" required>
                    <label for="user">Usuario</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="&nbsp;" required>
                    <label for="password">Contraseña</label>
                </div>
                <input type="submit" value="Iniciar sesion">
            </form>
        </section>
    </div>
</body>

</html>