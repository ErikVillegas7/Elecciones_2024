<?php

$servidor = "localhost";
$usuario = "root";
$password = "1234"; 
$base_datos = "elecciones_2024";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

echo "Conectado a la base de datos MySQL";
?>