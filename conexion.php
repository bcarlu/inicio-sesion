<?php 

$host = "localhost";
$usuario = "brian";
$clave = "brian";
$datab = "sesiones";

$conexion = mysqli_connect($host,$usuario,$clave,$datab) or die ("Ups falló la conexión a la base de datos");