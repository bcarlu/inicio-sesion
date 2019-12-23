<?php

session_start();
$usuario = $_SESSION['username'];

if (isset($usuario)) {
    echo "<h2>:) Bienvenido $usuario !! ahora puedes disfrutar de nuestra plataforma</h2>";
    echo "<a href='salir.php'>Cerrar sesión</a>";
}else{
    echo ":( no has ingresado tus datos, por favor <a href='index.php'>inicia sesión</a> :)";
}
