<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesion:</h2>

    <!-- hacemos un formulario -->
    <form action="procesar.php" method="POST">

        
        <label for="nickname">Usuario</label>

        <!-- el input es para digitar datos -->
        <input type="text" name="nickname">

        <label for="password">Contraseña</label>

        <!-- el input es para digitar datos -->
        <input type="text" name="password">

        <input type="submit" value="Acceder"><br>


    </form>
</body>
</html>