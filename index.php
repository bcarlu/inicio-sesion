<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login con inicio de sesion</title>
</head>
<body>
    <form action="ingreso.php" method="post">
        <p>
        <label for="">Usuario</label>
        <input type="text" name="usuario" placeholder="Usuario">
        </p>
        <p>
        <label for="">Clave</label>
        <input type="password" name="clave" placeholder="Clave">
        </p>
        <input type="submit" value="ingresar">
    </form>
</body>
</html>