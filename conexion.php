<?php
//Detalles de la BD
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cursos';

//Creamos la conexion
$conexion= new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexion->connect_error) {
    die("Error al conectarse con la BD: " . $db->connect_error);
}