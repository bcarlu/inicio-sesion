<?php
require_once 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = mysqli_query($conexion,"SELECT COUNT(*) AS contar FROM t_usuarios WHERE nombre='$usuario' AND clave='$clave'");
$arreglo = mysqli_fetch_array($consulta);

if ($arreglo['contar']>0) {
    //Si existe el usuario se redirecciona a la pagina principal del sitio
    $_SESSION['username'] = $usuario;
    header('location:paginaprincipal.php');
}else{
    echo "No estas registrado, entra aquí y hazlo gratuitamente, para disfrutar de nuestro servicio.";
}